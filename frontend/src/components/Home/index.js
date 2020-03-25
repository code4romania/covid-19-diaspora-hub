import React from "react";

import { Hero } from "@code4ro/taskforce-fe-components";
import PageWrapper from "../PageWrapper";

const Home = () => {
  return (
    <PageWrapper>
      <Hero
        title="Ce pași ai de urmat"
        subtitle="Pentru a te putea ajuta iata ce ai la dispozitie in contul tau:"
        useFallbackIcon={true}
      />
      Home placeholder
    </PageWrapper>
  );
};

export default Home;
