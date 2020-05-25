import React from "react";
import PropTypes from "prop-types";
import { Hero, InstrumentsItem } from "@code4ro/taskforce-fe-components";
import NavigationTabs from "./../../shared/NavigationTabs";
import UsefulInstruments from "./../../shared/UsefulInstruments";

const Sidebar = ({ children }) => (
  <div className="container">
    <Hero
      title="Bine ai venit"
      useFallbackIcon
      subtitle="Platforma Diaspora Hub vine în sprijinul cetățenilor români din afara României și a asociațiilor și grupurilor de sprijin de peste hotare în situații de urgență precum cea cu care ne confruntăm în aceste luni."
    />
    <NavigationTabs />
    <div className="columns homepage-columns">
      <aside className="column is-4 homepage-sidebar">
        <InstrumentsItem
          color="blue"
          title="Reprezinți o organizație din diaspora si poți să ajuți comunitatea din orașul în care te afli?"
          content="Înscrie-te in platforma și contribuie cu sprijin pentru cei care au mare nevoie de tine în perioada aceasta"
          ctaText="Completează formularul de înscriere"
          ctaLink="https://docs.google.com/forms/d/e/1FAIpQLSdcaBJGO4c5yKbYUwebcDtbL8mmAQKnDMjOWkqAJqm28JJi0g/viewform"
        />
        <UsefulInstruments />
      </aside>
      <div className="column">{children}</div>
    </div>
  </div>
);

Sidebar.propTypes = {
  children: PropTypes.node.isRequired,
};

export default Sidebar;
