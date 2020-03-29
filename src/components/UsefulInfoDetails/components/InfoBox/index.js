import React from "react";
import PropTypes from "prop-types";

const InfoBox = ({ children }) => {
  return <div className="box box__info mb">{children}</div>;
};

InfoBox.propTypes = {
  children: PropTypes.node.isRequired
};

export default InfoBox;
