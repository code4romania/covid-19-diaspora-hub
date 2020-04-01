# Diaspora Hub - frontend

### Package managers

- [NPM](https://docs.npmjs.com/)

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
