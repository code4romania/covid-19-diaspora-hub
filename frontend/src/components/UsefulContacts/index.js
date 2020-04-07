import React from "react";
import {
  Hero,
  SearchResultListItem,
  SocialsShare
} from "@code4ro/taskforce-fe-components";
import contacts from "../../data/useful-contacts";

import "./styles.scss";

const UsefulContacts = () => {
  return (
    <>
      <Hero title="Contacte utile" />
      <SocialsShare currentPage="https://diasporahub.ro/contacte-utile" />

      {contacts.map((contact, index) => (
        <div key={index} className="contact-wrapper ">
          <SearchResultListItem title={contact.name}>
            <address>
              <b>Website: </b>
              <a
                href={contact.website}
                target="_blank"
                rel="noopener noreferrer"
              >
                {contact.website}
              </a>
              <br />
              <b>Telefon: </b>
              <a href={`tel:${contact.phone}`}>{contact.phone}</a>
              <br />
              <b>Email: </b>
              <a href={`mailto:${contact.email}`}>{contact.email}</a>
            </address>
          </SearchResultListItem>
        </div>
      ))}
    </>
  );
};

export default UsefulContacts;
