import React from "react";
import {
  Hero,
  Instruments,
  MailchimpSubscribe
} from "@code4ro/taskforce-fe-components";
import UsefulApps from "../../data/useful-apps";
import {
  renderInstrumentItem,
  remapInstrumentsData
} from "../../utils/instruments.utils";
import "./styles.scss";
import { mailchimpURL } from "../../config/mailchimp";

const Home = () => {
  const instrumentsData = remapInstrumentsData(UsefulApps);

  return (
    <>
      <div className="container">
        <Hero title={"Title"} useFallbackIcon={true} subtitle={"Subtitle"} />
      </div>

      <div className="container">
        <div className="columns homepage-columns">
          <aside className="column is-4 homepage-sidebar">
            <div className="instruments-wrapper">
              <Hero title={"Instrumente utile"} useFallbackIcon={true} />
              <Instruments layout="column">
                {Object.keys(instrumentsData).map(category => {
                  return instrumentsData[category].map(usefulApp =>
                    renderInstrumentItem(usefulApp)
                  );
                })}
              </Instruments>
            </div>
            <div className="newsletter">
              <MailchimpSubscribe url={mailchimpURL} compact={true} />
            </div>
          </aside>
          <div className="column is-8">
            <p>hello</p>
          </div>
        </div>
      </div>
    </>
  );
};

export default Home;
