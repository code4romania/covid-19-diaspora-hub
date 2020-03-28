import React from "react";
import { Hero, SearchResultListItem } from "@code4ro/taskforce-fe-components";
import "./styles.scss";

const UsefulInfo = () => {
  const contentList = [
    {
      id: 0,
      title:
        "Apel de la Guvernul României. Ce trebuie să facă cetățenii când primesc mesaje pe Facebook și WhatsApp despre coronavirus",
      date: "12 martie 2020 12:45",
      readMoreText: "Citeste mai mult",
      overview:
        "Guvernul României face apel la cetățenii români, prin intermediul unui clip video postat pe rețelele de socializare, să se informeze despre coronavirus doar din su....."
    },
    {
      id: 1,
      title:
        "Apel de la Guvernul României. Ce trebuie să facă cetățenii când primesc mesaje pe Facebook și WhatsApp despre coronavirus",
      date: "12 martie 2020 12:45",
      readMoreText: "Citeste mai mult",
      overview:
        "Guvernul României face apel la cetățenii români, prin intermediul unui clip video postat pe rețelele de socializare, să se informeze despre coronavirus doar din su....."
    }
  ];

  return (
    <section className="column is-8">
      <Hero title={"Informații utile pentru românii din diaspora"} />
      <div className="list-items-grid">
        {contentList.map(({ id, title, date, overview }) => (
          <SearchResultListItem
            date={date}
            key={`useful_info_${id}`}
            title={title}
            readMoreText={"Citeste mai mult"}
            readMoreLink="/"
          >
            <p>{overview} </p>
          </SearchResultListItem>
        ))}
      </div>
    </section>
  );
};

export default UsefulInfo;
