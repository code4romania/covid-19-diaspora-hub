import Home from "./components/Home";

export const ROUTES = {
  home: {
    path: "/",
    extraProps: { exact: true },
    component: Home
  },
  login: {
    path: "/login",
    component: () => "Placeholder login"
  },
  signin: {
    path: "/signin",
    component: () => "Placeholder signin"
  },
  despre: {
    path: "/despre",
    component: () => "Placeholder about"
  },
  account: {
    path: "/account",
    component: () => "Placeholder account"
  }
};
