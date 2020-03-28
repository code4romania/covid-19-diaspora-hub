import React, { useEffect, Suspense, lazy } from "react";
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

import Home from "./components/Home";
const FooterWrapper = lazy(() => import("./components/Footer"));
const About = lazy(() => import("./components/About"));

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
  const history = useHistory();
  useEffect(() => {
    logPageView(history);
  }, [history]);

  return (
    <>
      <Header Logo={Logo()} MenuItems={MenuItems} />
      <DevelopedBy />
      <Suspense fallback={<div></div>}>
        <main>
          <Switch>
            <Route path="/despre">
              <About />
            </Route>
            <Route exact path="/">
              <Home />
            </Route>
          </Switch>
        </main>
        <IncubatedBy />
        <FooterWrapper />
      </Suspense>
    </>
  );
};

export default AppWrapper;
