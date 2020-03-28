import React from "react";

import { BrowserRouter as Router, Link, Route, Switch } from "react-router-dom";

import {
  Header,
  DevelopedBy,
  IncubatedBy,
  Hero
} from "@code4ro/taskforce-fe-components";

import LogoSvg from "./images/logo.svg";
import "./App.scss";

import NavigationTabs from "./components/shared/NavigationTabs";
import UsefulInstruments from "./components/shared/UsefulInstruments";
import UsefulContacts from "./components/UsefulContacts";
import UsefulInfo from "./components/UsefulInfo";
import About from "./components/About";
import Footer from "./components/Footer";

const Logo = () => (
  <Link to="/">
    <img width="178" height="32" alt="DiasporaHub" src={LogoSvg} />
  </Link>
);

const MenuItems = [
  <a
    href="https://stirioficiale.ro"
    target="_blank"
    rel="noopener noreferrer"
    key={"stiri"}
  >
    Știri oficiale
  </a>,
  <Link to="/despre" key={"des"}>
    Despre
  </Link>
];

const AppWrapper = () => {
  return (
    <Router>
      <App />
    </Router>
  );
};

const App = () => {
  return (
    <>
      <Header Logo={Logo()} MenuItems={MenuItems} />
      <DevelopedBy />
      <div className="container">
        <Hero
          title="Bine ai venit"
          useFallbackIcon
          subtitle="Suntem la dispoziția ta cu cele mai relevante informații pentru tine"
        />
        <NavigationTabs />
      </div>
      <div className="container">
        <div className="columns homepage-columns">
          <aside className="column is-4 homepage-sidebar">
            <UsefulInstruments />
          </aside>
          <div className="column is-8">
            <main>
              <Switch>
                <Route path="/despre">
                  <About />
                </Route>
                <Route exact path="/">
                  <UsefulInfo />
                </Route>
                <Route exact path="/contacte-utile">
                  <UsefulContacts />
                </Route>
              </Switch>
            </main>
          </div>
        </div>
      </div>
      <IncubatedBy />
      <Footer />
    </>
  );
};

export default AppWrapper;
