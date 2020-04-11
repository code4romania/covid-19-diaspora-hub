import React, { useState, useEffect, useCallback } from "react";
import {
  Hero,
  SocialsShare,
  SearchResultListItem,
  Form
} from "@code4ro/taskforce-fe-components";
import { askForHelpForm } from "../../data/ask-for-help-form";

import "./styles.scss";

const HelpForm = () => {
  const [categories, setCategories] = useState();
  const [formResponse, setFormResponse] = useState();

  const fetchCategory = useCallback(async () => {
    const apiResult = await fetch(
      `${process.env.REACT_APP_API_URL}/categories`
    );
    const { data } = await apiResult.json();

    return data.map(category => ({
      label: category.name,
      value: category.id
    }));
  }, []);

  useEffect(() => {
    async function fetchData() {
      const categories = await fetchCategory();
      setCategories(categories);
    }
    fetchData();
  }, [fetchCategory]);

  const evaluate = async formData => {
    const { lat, lng, countryCode } = formData[1];
    const categories = formData[4];
    const url = new URL(`${process.env.REACT_APP_API_URL}/entities/search`);
    const urlSearchParams = new URLSearchParams({
      lat,
      lng,
      country: countryCode
    });
    let categoriesString = "";
    Object.keys(categories).forEach(categoryId => {
      categoriesString += `${categoryId}&categories[]=`;
    });
    urlSearchParams.append("categories[]", categoriesString);
    url.search = urlSearchParams;
    const apiResult = await fetch(url);
    const { data } = await apiResult.json();
    setFormResponse(data);
    return 1;
  };

  return (
    <>
      <Hero title="Ai nevoie de ajutor?" />
      <SocialsShare currentPage="https://diasporahub.ro" />
      <p>
        Cu ajutorul chestionarului de mai jos, poți fi ghidat cu ușurință către
        grupurile care îți pot oferi sprijin, fie că vorbim despre livrarea unor
        cumpărături, sprijin cu câteva traduceri, informații utile în această
        perioadă sau alte informații.
      </p>
      {!formResponse && (
        <Form
          data={askForHelpForm(categories)}
          evaluateForm={evaluate}
          onFinishingForm={() => {}}
        />
      )}
      <div className="results-wrapper content">
        {formResponse &&
          formResponse.map((entity, index) => (
            <SearchResultListItem
              title={entity.name}
              color={index % 2 === 0 ? "cyan" : ""}
              key={index}
            >
              <p>{entity.description}</p>

              <b>Tip de ajutor:</b>
              <ul>
                {entity.categories.map((category, index) => (
                  <li key={index}>{category.name}</li>
                ))}
              </ul>
              <address>
                {entity.address && (
                  <p>
                    <b>
                      Adresa (
                      <a
                        href={`https://www.google.com/maps?q=${entity.latlng}&z=15`}
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        Vezi pe harta
                      </a>
                      ):
                    </b>
                    {entity.address.map(address => (
                      <>
                        <br />
                        {address}
                      </>
                    ))}
                  </p>
                )}

                {entity.contact.url && (
                  <p>
                    <b>Website: </b>
                    <a
                      href={entity.contact.url}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      {entity.contact.url}
                    </a>
                  </p>
                )}

                {entity.contact.phone && (
                  <p>
                    <b>Telefon: </b>
                    <a href={`tel:${entity.contact.phone}`}>
                      {entity.contact.phone}
                    </a>
                  </p>
                )}

                {entity.contact.email && (
                  <p>
                    <b>Email: </b>
                    <a
                      href={`mailto:${entity.contact.email}&subject=Hello&body=Body-goes-here`}
                    >
                      {entity.contact.email}
                    </a>
                  </p>
                )}
              </address>
            </SearchResultListItem>
          ))}
      </div>
      {formResponse && !formResponse.length && (
        <p className="result-msg">Nu am putut gasi nici un rezultat.</p>
      )}
    </>
  );
};

export default HelpForm;
