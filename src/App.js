import React from "react";
import { Route, Switch } from "react-router-dom";

import "@code4ro/taskforce-fe-components/dist/index.css";
import "./App.scss";

import { ROUTES } from "./routes";

const App = () => {
  const appRoutes = Object.values(ROUTES);

  return (
    <Switch>
      {appRoutes.map(({ path, component, extraProps }) => (
        <Route path={path} component={component} key={path} {...extraProps} />
      ))}
    </Switch>
  );
};

export default App;
