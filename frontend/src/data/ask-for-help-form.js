import { AlgoliaSearch } from "../components/HelpForm/AlgoliaSearch";

export const askForHelpForm = (categories) => ({
  title: "Cere ajutor de la comunitate",
  formId: 1,
  firstNodeId: 1,
  form: [
    {
      questionId: 1,
      questionText:
        "Completeaza formularul de mai jos pentru a te putea indruma mai usor.",
      type: "CUSTOM",
      children: AlgoliaSearch,
    },
    {
      questionId: 2,
      questionText: "Care este situația ta actuală?",
      type: "SINGLE_CHOICE",
      options: [
        {
          label: "Sunt singur",
          value: 1,
        },
        {
          label: "Împreună cu familia",
          value: 2,
        },
        {
          label: "Împreună cu persoane care au nevoie de asistență specială",
          value: 3,
        },
      ],
    },
    {
      questionId: 3,
      questionText: "În care dintre următoarele situații te afli?",
      type: "SINGLE_CHOICE",
      options: [
        {
          label: "Sunt în auto-izolare",
          value: 1,
        },
        {
          label: "Sunt în carantină impusă",
          value: 2,
        },
        {
          label: "Am fost diagnosticat și sunt internat",
          value: 3,
        },
        {
          label: "Niciuna dintre cele de mai sus",
          value: 4,
        },
      ],
    },
    {
      questionId: 4,
      questionText: "De ce tip de ajutor ai nevoie?",
      type: "SINGLE_CHOICE",
      options: [
        {
          label: "distributie de alimente",
          value: 1,
        },
        {
          label: "distributie de medicamente",
          value: 2,
        },
        {
          label: "sprijin financiar",
          value: 3,
        },
        {
          label: "sprijin în găsirea de cazare temporară",
          value: 4,
        },
        {
          label: "servicii de transport",
          value: 5,
        },
        {
          label: "servicii de traducere și interpretare",
          value: 6,
        },
        {
          label: "consiliere psihologică la distanță",
          value: 7,
        },
      ],
    },
    {
      questionId: 5,
      questionText: "De ce tip de ajutor ai nevoie?",
      type: "MULTIPLE_CHOICE",
      options: categories,
    },
    {
      questionId: 6,
      questionText: "Final",
      type: "FINAL",
      options: [
        {
          label: "distributie de alimente",
          value: 1,
        },
      ],
    },
  ],
});
