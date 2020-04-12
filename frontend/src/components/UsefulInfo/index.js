import React from "react";
import { Hero, SocialsShare } from "@code4ro/taskforce-fe-components";
import usefulInfo from "../../data/useful-info";

const UsefulInfo = () => {
  return (
    <>
      <Hero title={usefulInfo.title} />
      <SocialsShare currentPage="https://diasporahub.ro" />
      <div
        className="content"
        dangerouslySetInnerHTML={{ __html: usefulInfo.content }}
      />
    </>
  );
};

export default UsefulInfo;
