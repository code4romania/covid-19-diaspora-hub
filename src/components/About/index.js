import React from "react";
import {
  Hero,
  Instruments,
  SocialsShare,
  MailchimpSubscribe
} from "@code4ro/taskforce-fe-components";
import logo from "../../images/logo.svg";
import bandaSponsori from "../../images/banda_sponsori.png";
import UsefulApps from "../../data/useful-apps";
import "./About.scss";
import {
  renderInstrumentItem,
  remapInstrumentsData
} from "../../utils/instruments.utils";
import { mailchimpURL } from "../../config/mailchimp";

const About = () => {
  const instrumentsData = remapInstrumentsData(UsefulApps);

  return (
    <>
      <div className="container about-page">
        <section>
          <Hero
            title="Despre proiect"
            useFallbackIcon={true}
            subtitle="description"
          />
          <div>
            <SocialsShare currentPage={"https://diasporahub.ro/despre"} />
          </div>
        </section>
        <section className="about-section-logo">
          <img src={logo} alt="" width="450" />
        </section>
        <section className="has-border-bottom has-horizontal-paddding">
          <p>
            text
            <a
              href="https://www.facebook.com/comunicarenonprofit/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Brigăzii de Comunicare Nonprofit
            </a>
            , avizat de&nbsp;
            <a
              href="http://www.dsu.mai.gov.ro/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Departamentul pentru Situații de Urgență
            </a>
            , text2
          </p>
        </section>
        <section className="has-border-bottom has-horizontal-paddding">
          <p>
            Platforma diasporahub.ro este construită de Code for Romania Task
            Force în parteneriat cu&nbsp;
            <a
              href="https://www.gov.ro/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Guvernul României
            </a>
            , prin&nbsp;
            <a
              href="https://www.aadr.ro/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Autoritatea pentru Digitalizarea României
            </a>
            , și&nbsp;
            <a
              href="http://www.dsu.mai.gov.ro/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Departamentul pentru Situații de Urgență
            </a>
          </p>
        </section>
        <section className="has-border-bottom has-horizontal-paddding">
          <MailchimpSubscribe url={mailchimpURL} />
        </section>
      </div>
      <div className="sponsors">
        <p>
          <strong>
            Programul Code for Romania Task Force este susținut de:
          </strong>
        </p>
        <br />
        <img src={bandaSponsori} alt="" width="550" height="98" />
      </div>
      <div className="container about-page">
        <aside className="about-section-useful-instruments">
          <Hero title={"Instrumente utile"} useFallbackIcon={true} />

          <Instruments layout="grid">
            {instrumentsData.info.map(usefulApp =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.news.map(usefulApp =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.offer_help.map(usefulApp =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.data.map(usefulApp =>
              renderInstrumentItem(usefulApp)
            )}
          </Instruments>
        </aside>
      </div>
    </>
  );
};

export default About;
