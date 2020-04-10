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
    const categories = formData[5];
    const url = new URL(`${process.env.REACT_APP_API_URL}/entities/search`);
    const urlSearchParams = new URLSearchParams({
      lat,
      lng,
      country: countryCode
    });
    let categoriesString = "";
    categories.forEach(categoryId => {
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
      {!formResponse && (
        <Form
          data={askForHelpForm(categories)}
          evaluateForm={evaluate}
          onFinishingForm={() => {}}
        />
      )}
      {formResponse &&
        formResponse.map((entity, index) => (
          <div className="results-wrapper" key={index}>
            <SearchResultListItem
              title={entity.name}
              color={index % 2 === 0 ? "cyan" : ""}
            >
              <p>{entity.description}</p>

              <br />
              <b>Tip de ajutor:</b>
              <ul>
                {entity.categories.map((category, index) => (
                  <li key={index}>{category.name}</li>
                ))}
              </ul>
              <address>
                <br />
                {entity.address && (
                  <>
                    <b>Adresa:</b>
                    {entity.address.map(address => (
                      <>
                        <br />
                        {address}
                      </>
                    ))}
                    <br />
                    <br />
                  </>
                )}
                <b>Website: </b>
                <a
                  href={entity.contact.url}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {entity.contact.url}
                </a>
                <br />
                <b>Telefon: </b>
                <a href={`tel:${entity.contact.phone}`}>
                  {entity.contact.phone}
                </a>
                <br />
                <b>Email: </b>
                <a
                  href={`mailto:${entity.contact.email}subject=Hello&body=Body-goes-here`}
                >
                  {entity.contact.email}
                </a>
                <br />
                <br />
                <b>
                  <a
                    href={`https://maps.google.com/maps?ll=${entity.latlng}&q=${entity.latlng}&hl=en&t=m&z=15`}
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    Vezi pe harta
                  </a>
                </b>
              </address>
            </SearchResultListItem>
          </div>
        ))}
      {formResponse && !formResponse.length && (
        <p className="result-msg">Nu am putut gasi nici un rezultat.</p>
      )}
    </>
  );
};

export default HelpForm;
