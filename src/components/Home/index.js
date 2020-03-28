import React, { useState, useEffect } from "react";
import { useParams, useHistory } from "react-router-dom";
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
import pages from "../../data/static-pages";
import Tabs from "../shared/Tabs";

const Home = () => {
  const instrumentsData = remapInstrumentsData(UsefulApps);
  const [selectedPage, setSelectedPage] = useState(null);
  const { pageSlug } = useParams();
  const history = useHistory();

  useEffect(() => {
    // Find the page
    const page = pages.find(doc => doc.slug === (pageSlug || "/"));

    if (page) {
      setSelectedPage(page);
    } else {
      // Fallback to the first page if there is no slug
      const [firstPage] = page;
      history.push((firstPage && firstPage.slug) || "/");
    }
  }, [pageSlug, history]);

  const navigate = slug => {
    // Fix SecurityError of pushState on History
    // Edge case for the `/` slug
    history.push(`/${slug !== "/" ? slug : ""}`);
  };

  return (
    <>
      <div className="container">
        <Hero
          title={"Bine ai venit"}
          useFallbackIcon={true}
          subtitle={
            "Suntem la dispoziția ta cu cele mai relevante informații pentru tine"
          }
        />
        <Tabs selectedPage={selectedPage} navigate={navigate} />
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
