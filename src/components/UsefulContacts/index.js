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
            <div className="contact-details">
              <span>
                <b>Website: </b>
                <a
                  href={contact.website}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {contact.website}
                </a>
              </span>
              <span>
                <b>Telefon:</b>
                <a href={`tel:${contact.phone}`}>{contact.phone}</a>
              </span>
              <span>
                <b>Email:</b>{" "}
                <a href={`mailto:${contact.email}`}>{contact.email}</a>
              </span>
            </div>
          </SearchResultListItem>
        </div>
      ))}
    </>
  );
};

export default UsefulContacts;
