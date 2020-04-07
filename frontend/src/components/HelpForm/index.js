import React, { useState } from "react";
import {
  Hero,
  SocialsShare,
  Accordion,
  SearchResultListItem
} from "@code4ro/taskforce-fe-components";
import AlgoliaPlaces from "algolia-places-react";
import { algoliaConfig } from "../../config/algolia";

import "./styles.scss";

const HelpForm = () => {
  const [categories, setCategories] = useState();
  const [errorMessage, setErrorMessage] = useState();

  const locationChange = async ({ suggestion }) => {
    const { lat, lng } = suggestion.latlng;
    const apiResult = await fetch(
      `${process.env.REACT_APP_API_URL}/api/v1/entities/search?lat=${lat}&lng=${lng}`
    );
    const { data } = await apiResult.json();
    setCategories(data);
  };

  return (
    <>
      <Hero title="Ai nevoie de ajutor?" />
      <SocialsShare currentPage="https://diasporahub.ro" />
      <AlgoliaPlaces
        placeholder="Completeaza orasul sau adresa ta aici"
        options={algoliaConfig}
        onChange={result => locationChange(result)}
        onLimit={() => setErrorMessage("Ne pare rau, a aparut o problema.")}
        onError={() => setErrorMessage("Ne pare rau, a aparut o problema.")}
      />
      <div className="accordion-wrapper">
        {categories &&
          categories.map((category, index) => (
            <Accordion title={category.name} key={index}>
              {category.entities.map((entity, index) => (
                <div className="results-wrapper" key={index}>
                  <SearchResultListItem
                    title={entity.name}
                    color={index % 2 === 0 ? "cyan" : ""}
                  >
                    <p>{entity.description}</p>
                    <address>
                      <b>Adresa:</b>
                      <br />
                      {entity.address_line_1} , {entity.city}
                      {entity.address_line_2 && (
                        <>
                          <br />
                          {entity.address_line_2}, {entity.city}
                        </>
                      )}
                      <br />
                      <br />
                      <b>Website: </b>
                      <a
                        href={entity.url}
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        {entity.url}
                      </a>
                      <br />
                      <b>Telefon: </b>
                      <a href={`tel:${entity.phone}`}>{entity.phone}</a>
                      <br />
                      <b>Email: </b>
                      <a href={`mailto:${entity.email}`}>{entity.email}</a>
                    </address>
                  </SearchResultListItem>
                </div>
              ))}
            </Accordion>
          ))}
        {categories && !categories.length && (
          <p className="result-msg">Nu am putut gasi nici un rezultat.</p>
        )}
        {errorMessage && (
          <p className="result-msg result-msg__error">{errorMessage}</p>
        )}
      </div>
    </>
  );
};

export default HelpForm;
