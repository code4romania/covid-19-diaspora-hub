import React from "react";
import PropTypes from "prop-types";
import "./styles.scss";

const List = ({ values, title, subtitle, isInBox }) => {
  const classNames = isInBox ? "list-wrapper" : "list-wrapper mb";
  const items = values.map((value, index) => <li key={index}>{value}</li>);
  return (
    <div className={classNames}>
      {title && <h1 className="title is-size-4 mb">{title}</h1>}
      {subtitle && <h1 className="title is-size-6 mb">{subtitle}</h1>}
      <ul className="pl--lg">{items}</ul>
    </div>
  );
};

List.propTypes = {
  values: PropTypes.array.isRequired,
  title: PropTypes.string,
  subtitle: PropTypes.string,
  isInBox: PropTypes.bool
};

export default List;
