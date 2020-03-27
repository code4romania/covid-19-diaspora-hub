# Diaspora Hub

[![GitHub contributors](https://img.shields.io/github/contributors/code4romania/diaspora-hub.svg?style=for-the-badge)](https://github.com/code4romania/diaspora-hub/graphs/contributors) [![GitHub last commit](https://img.shields.io/github/last-commit/code4romania/diaspora-hub.svg?style=for-the-badge)](https://github.com/code4romania/diaspora-hub/commits/master) [![License: MPL 2.0](https://img.shields.io/badge/license-MPL%202.0-brightgreen.svg?style=for-the-badge)](https://opensource.org/licenses/MPL-2.0)

Objective: Collecting data about the state that Romanian citizens living abroad are in, along with daily evaluation, offering information and support.

How: Any citizen living abroad can create an account in the platform, where, though a simple questionnaire, they can configure their needs and receive guidance towards specific aid. This set of data is centralized and sent to the consular authorities. The users can monitor their own health with a simple questionnaire that they fill out regularly, for their own self, and for their families.

[See the project live](https://diasporahub.ro) and [the preview environment](https://diaspora-hub.now.sh) with the work in progress.

[Contributing](#contributing) | [Built with](#built-with) | [Repos and projects](#repos-and-projects) | [Development](#development) | [Deployment](#deployment) | [Feedback](#feedback) | [License](#license) | [About Code4Ro](#about-code4ro)

## Contributing

This project is built by amazing volunteers and you can be one of them! Here's a list of ways in [which you can contribute to this project](.github/CONTRIBUTING.md).

Also, this is [the workflow we follow](.github/WORKFLOW.md). 

## Built With

### Programming languages
 - Javascript

### Frontend frameworks
 - [React (16.13.*)](https://reactjs.org/)
 - [Bulma (0.8.*)](https://bulma.io/)

### Package managers
 - Frontend - [NPM](https://docs.npmjs.com/)

## Repos and projects

- Uses reusable components from: https://www.npmjs.com/package/@code4ro/taskforce-fe-components

## Development

#### System Requirements
 - Node.js 10 or later

- Fork this repo
- Clone your fork
- Open the directory where you have cloned the repo

#### Install node dependencies

```sh
$ npm install
```

#### Run the app in the development mode

```sh
$ npm start
```

Open [http://localhost:3000](http://localhost:3000) to view it in the browser.
The page will reload if you make edits.<br />
You will also see any lint errors in the console.

#### Build the app

```sh
$ npm run build
```

Builds the app for production to the `build` folder.<br />
It correctly bundles React in production mode and optimizes the build for the best performance.

The build is minified and the filenames include the hashes.<br />
Your app is ready to be deployed!


## Deployment

- automatically deployed using https://zeit.co/ from PRs for testing; preview environment: https://diaspora-hub.now.sh/
- uses github actions for deploying in prod

## Feedback

* Request a new feature on GitHub.
* Vote for popular feature requests.
* File a bug in GitHub Issues.
* Email us with other feedback contact@code4.ro

## License

This project is licensed under the MPL 2.0 License - see the [LICENSE](LICENSE) file for details

## About Code4Ro

Started in 2016, Code for Romania is a civic tech NGO, official member of the Code for All network. We have a community of over 500 volunteers (developers, ux/ui, communications, data scientists, graphic designers, devops, it security and more) who work pro-bono for developing digital solutions to solve social problems. #techforsocialgood. If you want to learn more details about our projects [visit our site](https://www.code4.ro/en/) or if you want to talk to one of our staff members, please e-mail us at contact@code4.ro.

Last, but not least, we rely on donations to ensure the infrastructure, logistics and management of our community that is widely spread across 11 timezones, coding for social change to make Romania and the world a better place. If you want to support us, [you can do it here](https://code4.ro/en/donate/).
