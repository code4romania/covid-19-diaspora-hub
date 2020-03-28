import React from "react";
import pages from "../../../data/static-pages";
import PropTypes from "prop-types";

import { List, ListItem } from "@code4ro/taskforce-fe-components";

const Tabs = ({ selectedPage, navigate }) => {
  return (
    <>
      <List columns={3}>
        {pages.map(page => (
          <ListItem
            title={page.title}
            key={page.doc_id}
            active={selectedPage && selectedPage.doc_id === page.doc_id}
            onClick={() => navigate(page.slug)}
          />
        ))}
      </List>
    </>
  );
};

Tabs.propTypes = {
  selectedPage: PropTypes.object,
  navigate: PropTypes.func
};

export default Tabs;
