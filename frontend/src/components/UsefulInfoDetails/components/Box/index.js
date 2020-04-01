import React from "react";
import PropTypes from "prop-types";

const Box = ({ type, children }) => (
  <div className={`box box__${type} mb`}>{children}</div>
);

Box.propTypes = {
  children: PropTypes.node.isRequired,
  type: PropTypes.oneOf("warning", "info")
};

Box.defaultProps = { type: "info" };

export default Box;
