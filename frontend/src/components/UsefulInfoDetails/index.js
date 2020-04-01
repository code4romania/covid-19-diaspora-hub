import React from "react";
import PropTypes from "prop-types";
import { Hero, SocialsShare } from "@code4ro/taskforce-fe-components";
import usefulInfoList from "../../data/useful-info";
import SectionTypes from "./section-types";
import Plain from "./components/Plain";
import List from "./components/List";
import Box from "./components/Box";
import "./styles.scss";

const renderSection = section => {
  switch (section.type) {
    case SectionTypes.INFO_BOX:
      section.value.isInBox = true;
      return <Box>{renderSection(section.value)}</Box>;
    case SectionTypes.WARNING_BOX:
      section.value.isInBox = true;
      return <Box type="warning">{renderSection(section.value)}</Box>;
    case SectionTypes.PLAIN:
      return <Plain value={section.value} isInBox={section.isInBox} />;
    case SectionTypes.LIST:
      return (
        <List
          values={section.values}
          title={section.title}
          subtitle={section.subtitle}
          isInBox={section.isInBox}
        />
      );
    default:
      return null;
  }
};

const UsefulInfoDetails = props => {
  const { id } = props.match.params;
  const item = usefulInfoList.find(item => item.id === id);
  return (
    <>
      <Hero title="Informații utile pentru românii din diaspora" />
      <SocialsShare currentPage="https://diasporahub.ro" />
      <div className="mb">{item.overview}</div>

      {item.sections.map((section, index) => (
        <div key={`${section.type}-${index}`}>{renderSection(section)}</div>
      ))}
    </>
  );
};

UsefulInfoDetails.propTypes = {
  match: PropTypes.object
};

export default UsefulInfoDetails;
