import React from "react";
import { Link } from "react-router-dom";
import {
  Footer,
  FooterLinkHeader,
  FooterLinks,
  FooterLinkItem,
} from "@code4ro/taskforce-fe-components";

const FooterWrapper = () => {
  return (
    <Footer>
      <FooterLinks>
        <FooterLinkHeader>Link-uri utile</FooterLinkHeader>
        <FooterLinkItem>
          <Link to="/despre">Despre proiect</Link>
        </FooterLinkItem>
        <FooterLinkItem>
          <a
            href="https://code4.ro/ro/"
            target="_blank"
            rel="noopener noreferrer"
          >
            Code for Romania
          </a>
        </FooterLinkItem>
        <FooterLinkItem>
          <Link to="/termeni-si-conditii">Termeni și condiții</Link>
        </FooterLinkItem>
        <FooterLinkItem>
          <Link to="/politica-de-confidentialitate">
            Politică de confidențialitate
          </Link>
        </FooterLinkItem>
      </FooterLinks>
    </Footer>
  );
};

export default FooterWrapper;
