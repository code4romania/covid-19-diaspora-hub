import React from "react";
import PropTypes from "prop-types";

const Plain = ({ value, isInBox }) => {
  const classNames = isInBox ? "plain" : "plain mb";
  return (
    <div className={classNames}>
      <p>{value}</p>
    </div>
  );
};

Plain.propTypes = {
  value: PropTypes.string.isRequired,
  isInBox: PropTypes.bool
};

export default Plain;
