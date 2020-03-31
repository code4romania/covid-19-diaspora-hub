import React from "react";
import PropTypes from "prop-types";

const WarningBox = ({ children }) => {
  return <div className="box box__warning mb">{children}</div>;
};

WarningBox.propTypes = {
  children: PropTypes.node.isRequired
};

export default WarningBox;
