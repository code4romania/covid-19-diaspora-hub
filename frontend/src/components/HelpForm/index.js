import React from "react";
import { Hero, SocialsShare, Form } from "@code4ro/taskforce-fe-components";
import staticPages from "../../data/static-pages";
import formData from "../../data/ask-for-help-form";

import "./styles.scss";

const HelpForm = () => {
  const { page } = staticPages[0].content[0];
  const evaluate = () => {};
  return (
    <>
      <Hero title="Ai nevoie de ajutor?" />
      <SocialsShare currentPage="https://diasporahub.ro" />
      <p className="info">{page}</p>
      <Form
        data={formData}
        evaluateForm={evaluate}
        onFinishingForm={results => console.log(results)}
      />
    </>
  );
};

export default HelpForm;
