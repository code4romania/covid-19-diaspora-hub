import React from "react";
import PropTypes from "prop-types";

import Header from "./Header";
import Footer from "./Footer";

const PageWrapper = ({ children }) => {
  return (
    <>
      <Header />
      <div className="container">{children}</div>
      <Footer />
    </>
  );
};

PageWrapper.propTypes = {
  children: PropTypes.node.isRequired
};

export default PageWrapper;
