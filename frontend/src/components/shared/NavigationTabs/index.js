import React from "react";
import { withRouter } from "react-router-dom";
import PropTypes from "prop-types";

import { List, ListItem } from "@code4ro/taskforce-fe-components";

import pages from "../../../data/static-pages";

const NavigationTabs = ({ history, location: { pathname } }) => (
  <div className="steps-bar">
    <List columns={3}>
      {pages.map(({ title, slug }, index) => (
        <ListItem
          title={title}
          key={index}
          onClick={() => history.push(slug)}
          active={slug === pathname}
        />
      ))}
    </List>
  </div>
);

NavigationTabs.propTypes = {
  history: PropTypes.shape({
    push: PropTypes.func,
  }),
  location: PropTypes.shape({
    pathname: PropTypes.string,
  }),
};

export default withRouter(NavigationTabs);
