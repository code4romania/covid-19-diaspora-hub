import React from "react";
import PropTypes from "prop-types";
import { Hero } from "@code4ro/taskforce-fe-components";
import NavigationTabs from "./../../shared/NavigationTabs";
import UsefulInstruments from "./../../shared/UsefulInstruments";

const Sidebar = ({ children }) => (
  <div className="container">
    <Hero
      title="Bine ai venit"
      useFallbackIcon
      subtitle="Suntem la dispoziția ta cu cele mai relevante informații pentru tine"
    />
    <NavigationTabs />
    <div className="columns homepage-columns">
      <aside className="column is-4 homepage-sidebar">
        <UsefulInstruments />
      </aside>
      <div className="column">{children}</div>
    </div>
  </div>
);

Sidebar.propTypes = {
  children: PropTypes.node.isRequired
};

export default Sidebar;
