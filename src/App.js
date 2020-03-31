import React, { useEffect, lazy, Suspense } from "react";

import {
  BrowserRouter as Router,
  Link,
  Route,
  Switch,
  useHistory
} from "react-router-dom";
import { logPageView } from "./analyticsTracker";

import {
  Header,
  DevelopedBy,
  IncubatedBy
} from "@code4ro/taskforce-fe-components";

import LogoSvg from "./images/logo.svg";
import "./App.scss";

import Sidebar from "./components/layout/Sidebar";
import Footer from "./components/Footer";
const UsefulContacts = lazy(() => import("./components/UsefulContacts"));
const About = lazy(() => import("./components/About"));
const UsefulInfo = lazy(() => import("./components/UsefulInfo"));
const UsefulInfoDetails = lazy(() => import("./components/UsefulInfoDetails"));

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

const AppWrapper = () => (
  <Router>
    <App />
  </Router>
);

const App = () => {
  const history = useHistory();
  useEffect(() => {
    logPageView(history);
  }, [history]);

  return (
    <>
      <Header Logo={Logo()} MenuItems={MenuItems} />
      <DevelopedBy />
      <main>
        <Suspense fallback={<div style={{ height: "800px" }}></div>}>
          <Switch>
            <Route exact path="/">
              <Sidebar>
                <p>hello</p>
              </Sidebar>
            </Route>
            <Route exact path="/informatii-utile">
              <Sidebar>
                <UsefulInfo />
              </Sidebar>
            </Route>
            <Route exact path="/contacte-utile">
              <Sidebar>
                <UsefulContacts />
              </Sidebar>
            </Route>
            <Route path="/despre">
              <About />
            </Route>
            <Route
              exact
              path="/informatii-utile/:id"
              render={props => (
                <Sidebar>
                  <UsefulInfoDetails {...props} />
                </Sidebar>
              )}
            />
          </Switch>
        </Suspense>
      </main>
      <IncubatedBy />
      <Footer />
    </>
  );
};

export default AppWrapper;
