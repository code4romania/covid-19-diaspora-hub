import React from "react";
import {
  Hero,
  SearchResultListItem,
  SocialsShare
} from "@code4ro/taskforce-fe-components";

import usefulInfoList from "../../data/useful-info";
import "./styles.scss";

const UsefulInfo = () => {
  return (
    <>
      <Hero title="Informații utile pentru românii din diaspora" />
      <SocialsShare />

      {usefulInfoList.map(({ id, title, date, overview }) => (
        <div key={`useful_info_${id}`} className="useful_info-wrapper">
          <SearchResultListItem
            date={date}
            title={title}
            readMoreText={"Citeste mai mult"}
            readMoreLink="/"
          >
            <p>{overview} </p>
          </SearchResultListItem>
        </div>
      ))}
    </>
  );
};

export default UsefulInfo;
