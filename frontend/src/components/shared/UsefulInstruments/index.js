import React from "react";

import {
  Hero,
  BannerImage,
  Instruments,
} from "@code4ro/taskforce-fe-components";

import UsefulApps from "../../../data/useful-apps";
import {
  renderInstrumentItem,
  remapInstrumentsData,
} from "../../../utils/instruments.utils";

import "./styles.scss";
import rovaccinareImage from "../../../images/rovaccinare.jpg";

const UsefulInstruments = () => {
  const instrumentsData = remapInstrumentsData(UsefulApps);

  return (
    <>
      <div className="instruments-wrapper">
        <Hero title={"Instrumente utile"} useFallbackIcon={true} />
        <Instruments layout="column">
          <BannerImage
            link="https://vaccinare-covid.gov.ro/"
            image={{
              src: rovaccinareImage,
              alt: "#ROVACCINARE",
              title: "#ROVACCINARE",
            }}
          />
          {Object.keys(instrumentsData).map((category) => {
            return instrumentsData[category].map((usefulApp) =>
              renderInstrumentItem(usefulApp)
            );
          })}
        </Instruments>
      </div>
    </>
  );
};

export default UsefulInstruments;
