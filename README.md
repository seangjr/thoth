## Project structure

Thoth uses the following stack of development tools and frameworks:

-   [Express.js](https://expressjs.com/) is a minimal approach for designing routes and RESTful APIs. It improves code cleanliness and ease to perform CRUD.
-   [PHP](https://php.net/) is used for templating and rendering data from the server.
-   [Tailwind CSS](https://tailwindcss.com/docs/installation/) is used as our CSS Framework in creating beautiful UI which users will love.

Folder structure:

```
src/
    components/
            layout/
                *.php
        *.html
        *.php
    pages/
        index.php
        page1.php
        page2.php
    public/
        css/
            *.css
        img/
            *.png,jpg,jpeg,gif,avif,webp
    server/
        controller/
        models/
        routes/
        server.js
```

## Project configuration

Before developing Thoth, you need to run the following commands:
`yarn install` or
`npm install`

I would highly recommend installing yarn for improved speeds of downloading packages.

```
npm i -g yarn
```

After the dependencies are installed, please create a `.env` file at the root directory. Enter the following details to your `.env` file as per the values pinned in the private discord channel.

## Project development

To start developing Thoth, you need to run these commands:

`yarn start` or `npm run start` to start the development server. After that, you need to run `yarn build` or `npm build` to watch for CSS file updates, as we are using Tailwind CSS.
