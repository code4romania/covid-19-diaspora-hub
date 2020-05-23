import React from "react";
import PropTypes from "prop-types";
import { SearchResultListItem } from "@code4ro/taskforce-fe-components";

import "./styles.scss";

const SearchResult = ({ entity, color, userResponse }) => (
  <SearchResultListItem title={entity.name} color={color}>
    <p>{entity.description}</p>
    <b>Tip de ajutor:</b>
    <ul>
      {entity.categories.map((category, index) => (
        <li key={index}>{category.name}</li>
      ))}
    </ul>
    <address>
      {entity.address && entity.address.length > 0 && (
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
          {entity.address.map((address) => (
            <>
              <br />
              {address}
            </>
          ))}
        </p>
      )}
      {entity.contact && (
        <>
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
              <a href={`tel:${entity.contact.phone}`}>{entity.contact.phone}</a>
            </p>
          )}

          {entity.contact.email && (
            <p>
              <b>Email: </b>
              <a
                href={`mailto:${entity.contact.email}?subject=Am nevoie de ajutor&body=Oras solicitare: ${userResponse.selectedCity} %0d%0aSituatie: ${userResponse.relationSituation}, ${userResponse.currentSituation} %0d%0aNevoi: ${userResponse.selectedCategoriesString} %0d%0a`}
              >
                {entity.contact.email}
              </a>
            </p>
          )}
        </>
      )}
    </address>
  </SearchResultListItem>
);

SearchResult.propTypes = {
  entity: PropTypes.shape({
    name: PropTypes.string,
    latlng: PropTypes.shape({
      lat: PropTypes.string,
      lng: PropTypes.string,
    }),
    description: PropTypes.string,
    address: PropTypes.arrayOf(PropTypes.string),
    categories: PropTypes.arrayOf(PropTypes.object),
    contact: PropTypes.shape({
      url: PropTypes.string,
      phone: PropTypes.string,
      email: PropTypes.string,
    }),
  }),
  userResponse: PropTypes.shape({
    selectedCity: PropTypes.string,
    relationSituation: PropTypes.string,
    currentSituation: PropTypes.string,
    selectedCategoriesString: PropTypes.string,
  }),
  color: PropTypes.oneOf(["cyan", "blue"]),
};

SearchResult.defaultProps = {
  color: "blue",
};

export default SearchResult;
