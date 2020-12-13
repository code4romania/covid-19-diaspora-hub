import React from "react";
import {
  Hero,
  BannerImage,
  Instruments,
  SocialsShare,
  MailchimpSubscribe,
} from "@code4ro/taskforce-fe-components";
import bandaSponsori from "../../images/banda_sponsori.png";
import aadrLogo from "../../images/aadr_logo.png";
import govLogo from "../../images/gov_logo.png";
import dprpLogo from "../../images/dprp_logo.png";
import maeLogo from "../../images/mae_logo.png";
import UsefulApps from "../../data/useful-apps";
import "./About.scss";
import {
  renderInstrumentItem,
  remapInstrumentsData,
} from "../../utils/instruments.utils";
import { mailchimpURL } from "../../config/mailchimp";
import rovaccinareImage from "../../images/rovaccinare.jpg";

const About = () => {
  const instrumentsData = remapInstrumentsData(UsefulApps);

  return (
    <>
      <div className="container about-page">
        <section>
          <Hero title="Despre proiect" useFallbackIcon={true} />
          <SocialsShare currentPage="https://diasporahub.ro/despre" />
        </section>
        <section>
          <div className="columns">
            <div className="column">
              <p>
                Platforma Diaspora Hub vine în sprijinul cetățenilor români din
                afara României și a asociațiilor și grupurilor de sprijin de
                peste hotare în situații de urgență precum cea cu care ne
                confruntăm în aceste luni. Cu ajutorul unui chestionar simplu de
                câteva întrebări, orice român care are nevoie de ajutor sau de
                informații va fi ghidat ușor către grupurile care îi pot oferi
                sprijin, fie că vorbim despre livrarea unor cumpărături, sprijin
                cu câteva traduceri, informații utile în această perioadă etc.
              </p>
            </div>
            <div className="column">
              {" "}
              <p>
                Diaspora Hub este un proiect realizat în colaborare cu
                Ministerul Afacerilor de Externe și Departamentul pentru Românii
                de Pretutindeni alături de care, prin aceste funcționalități ne
                propunem să distribuim cât mai uniform și eficient cererile de
                ajutor către cei care în aceste zile depun eforturi să sprijine
                pe toată lumea și să facilităm transferul de informații utile
                cât mai simplu și pe înțelesul tuturor către românii din
                diaspora.
              </p>
            </div>
          </div>
          <p>
            Acest proiect este dezvoltat în cadrul programului Code for Romania
            Task Force pro-bono, cu sprijinul Ministerului Afacerilor Externe și
            al Departamentului pentru Românii de Pretutindeni.
          </p>
          <div className="sponsors">
            <img src={govLogo} height="100" alt="gov" />
            <img src={aadrLogo} height="100" alt="aadr" />
            <img src={maeLogo} height="100" alt="mae" />
            <img src={dprpLogo} height="100" alt="dprp" />
          </div>
          <hr />
          <br />
          <div className="sponsors">
            <h2 className="title is-5">
              <strong>
                Programul Code for Romania Task Force este susținut de:
              </strong>
            </h2>
            <img src={bandaSponsori} alt="" width="550" height="98" />
          </div>
        </section>

        <section className="has-border-bottom has-vertical-paddding">
          <MailchimpSubscribe url={mailchimpURL} />
        </section>
      </div>
      <div className="container about-page">
        <aside className="about-section-useful-instruments">
          <Hero title="Instrumente utile" useFallbackIcon={true} />

          <Instruments layout="grid">
            <BannerImage
              link="https://vaccinare-covid.gov.ro/"
              image={{
                src: rovaccinareImage,
                alt: "#ROVACCINARE",
                title: "#ROVACCINARE",
              }}
            />
            {instrumentsData.info.map((usefulApp) =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.news.map((usefulApp) =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.offer_help.map((usefulApp) =>
              renderInstrumentItem(usefulApp)
            )}
            {instrumentsData.data.map((usefulApp) =>
              renderInstrumentItem(usefulApp)
            )}
          </Instruments>
        </aside>
      </div>
    </>
  );
};

export default About;
