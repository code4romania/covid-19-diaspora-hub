import React from "react";
import PropTypes from "prop-types";
import AlgoliaPlaces from "algolia-places-react";
import { ListHeader } from "@code4ro/taskforce-fe-components";
import { algoliaConfig } from "../../config/algolia";
export const AlgoliaSearch = ({ question, onAnswer, currentResponse }) => {
  const onChange = ({ suggestion }) => {
    const answer = {
      questionId: question.questionId,
      value: { countryCode: suggestion.countryCode, ...suggestion.latlng },
    };
    onAnswer(answer);
  };
  return (
    <>
      <ListHeader title={question.questionText} />
      <AlgoliaPlaces
        placeholder="Completeaza orasul sau adresa ta aici"
        options={algoliaConfig}
        onChange={(searchResult) => onChange(searchResult)}
        // onLimit={() => setErrorMessage("Ne pare rau, a aparut o problema.")}
        // onError={() => setErrorMessage("Ne pare rau, a aparut o problema.")}
      />
    </>
  );
};

AlgoliaSearch.propTypes = {
  question: PropTypes.shape({
    questionId: PropTypes.number.isRequired,
    questionText: PropTypes.string.isRequired,
  }),
  onAnswer: PropTypes.func,
  currentResponse: PropTypes.number,
};
