import React from "react";
import { Hero, SocialsShare } from "@code4ro/taskforce-fe-components";
import usefulContacts from "../../data/useful-contacts";

const UsefulContacts = () => {
  return (
    <>
      <Hero title={usefulContacts.title} />
      <SocialsShare currentPage="https://diasporahub.ro/contacte-utile" />
      <div dangerouslySetInnerHTML={{ __html: usefulContacts.content }} />
    </>
  );
};

export default UsefulContacts;
