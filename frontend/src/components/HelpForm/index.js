import React, { useState, useEffect, useCallback } from "react";
import { Hero, SocialsShare, Form } from "@code4ro/taskforce-fe-components";
import { askForHelpForm } from "../../data/ask-for-help-form";
import SearchResult from "./SearchResult";

import "./styles.scss";

const HelpForm = () => {
  const [categories, setCategories] = useState();
  const [formResponse, setFormResponse] = useState();

  const fetchCategory = useCallback(async () => {
    const apiResult = await fetch(
      `${process.env.REACT_APP_API_URL}/categories`
    );
    const { data } = await apiResult.json();

    return data.map((category) => ({
      label: category.name,
      value: category.id,
    }));
  }, []);

  useEffect(() => {
    async function fetchData() {
      const categories = await fetchCategory();
      setCategories(categories);
    }
    fetchData();
  }, [fetchCategory]);

  const fetchEntitiesWithoutLocation = async () => {
    const apiResult = await fetch(
      `${process.env.REACT_APP_API_URL}/entities/withoutLocation`
    );
    const { data } = await apiResult.json();
    return data;
  };

  const fetchEntities = async (lat, lng, country, categories) => {
    let url;

    try {
      url = new URL(`${process.env.REACT_APP_API_URL}/entities/search`);
    } catch (error) {
      url = new URL(
        `${process.env.REACT_APP_API_URL}/entities/search`,
        window.location.origin
      );
    }

    const urlSearchParams = new URLSearchParams({
      lat,
      lng,
      country,
    });
    let categoriesString = "";
    Object.keys(categories).forEach((categoryId) => {
      categoriesString += `${categoryId}&categories[]=`;
    });
    urlSearchParams.append("categories[]", categoriesString);
    url.search = urlSearchParams;
    const apiResult = await fetch(url);
    const { data } = await apiResult.json();
    return data;
  };

  const evaluate = async (formData) => {
    const {
      latlng: { lat, lng },
      countryCode,
    } = formData[1];
    const categoriesFormData = formData[4];
    const [entities, entitiesWithoutLocation] = await Promise.all([
      await fetchEntities(lat, lng, countryCode, categoriesFormData),
      await fetchEntitiesWithoutLocation(),
    ]);

    const selectedCity = `${formData[1].name}, ${formData[1].administrative}, ${formData[1].country}`;
    const relationSituation = askForHelpForm().form[1].options.find(
      (option) => option.value === formData[2]
    ).label;
    const currentSituation = askForHelpForm().form[2].options.find(
      (option) => option.value === formData[3]
    ).label;
    const selectedCategoriesString = categories
      .filter((category) =>
        Object.keys(formData[4]).includes(category.value.toString())
      )
      .map((selectedCategory) => selectedCategory.label)
      .join(", ");

    setFormResponse({
      entities,
      entitiesWithoutLocation,
      userResponse: {
        selectedCity,
        relationSituation,
        currentSituation,
        selectedCategoriesString,
      },
    });
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
    return 0;
  };

  return (
    <div className="content">
      <Hero title="Ai nevoie de ajutor?" />
      <SocialsShare currentPage="https://diasporahub.ro" />
      {!formResponse && (
        <>
          <p>
            Cu ajutorul chestionarului de mai jos, poți fi ghidat cu ușurință
            către grupurile care îți pot oferi sprijin, fie că vorbim despre
            livrarea unor cumpărături, sprijin cu câteva traduceri, informații
            utile în această perioadă sau alte informații.
          </p>
          <Form
            data={askForHelpForm(categories)}
            evaluateForm={evaluate}
            onFinishingForm={() => {}}
          />
        </>
      )}
      {formResponse && (
        <>
          {formResponse.entities.length > 0 && (
            <div className="results-wrapper">
              <p>
                Aici sunt organizațiile din țara ta care te-ar putea ajuta cu ce
                ai tu nevoie. Transmite un mesaj cu cererea ta către una sau mai
                multe dintre ele cu un simplu click pe e-mailul organizației.
                Dacă acestea nu au cum să te ajute, poți încerca să postezi și
                un mesaj în grupurile de Facebook de mai jos, fie din țara ta,
                fie cele internaționale.
              </p>
              {formResponse.entities.map((entity, index) => (
                <SearchResult
                  key={`entities-${index}`}
                  entity={entity}
                  userResponse={formResponse.userResponse}
                  color={index % 2 === 0 ? "cyan" : "blue"}
                />
              ))}
            </div>
          )}
          <div className="results-wrapper">
            {!formResponse.entities.length && (
              <p className="title is-4 is-spaced">
                Din păcate în țara ta nu am găsit o organizație care să se fi
                înscris în Diaspora Hub și care să te poată ajuta.
              </p>
            )}
            <p className="subtitle is-5">
              Poți încerca să postezi și un mesaj în grupurile de Facebook de
              mai jos sau să dai un mesaj altor organizații din țara ta, cu
              rugămintea să te direcționeze către alte posibile surse de
              sprijin.
            </p>
            {formResponse.entitiesWithoutLocation.map((entity, index) => (
              <SearchResult
                key={`entities2-${index}`}
                entity={entity}
                userResponse={formResponse.userResponse}
                color={index % 2 === 0 ? "cyan" : "blue"}
              />
            ))}
          </div>
        </>
      )}
    </div>
  );
};

export default HelpForm;
