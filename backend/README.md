# Diaspora Hub - backend

## Built With

-   Laravel 7
-   [Laravel Nova](https://nova.laravel.com/) (requires license)

### Requirements

-   PHP 7.4+
-   Apache or Nginx
-   MySQL

## Development

### To bootstrap the project (run this only once), run the following commands in your shell:

First, create a `auth.json` file in the project root with the login credentials to your Laravel Nova account. Its contents should look like this:

```json
{
    "http-basic": {
        "nova.laravel.com": {
            "username": "email@example.com",
            "password": "YOUR_API_KEY"
        }
    }
}
```

Install composer dependencies

```bash
$ docker run --rm -v ${PWD}:/app -w /app composer:latest composer install --ignore-platform-reqs --no-scripts --no-interaction --prefer-dist --optimize-autoloader
```

Copy environment variables and start the application

```bash
$ cp .env.example .env
$ docker-compose up
```

Run database migrations

```bash
$ docker exec -it diaspora-hub php artisan migrate
```

Generate app secret key, and personal access client keys

```bash
$ docker exec -it diaspora-hub php artisan key:generate
```

### Every other time

```bash
$ docker-compose up
```

For artisan commands:

```bash
$ docker exec -it diaspora-hub php artisan
```

## Deployment

## Feedback

-   Request a new feature on GitHub.
-   Vote for popular feature requests.
-   File a bug in GitHub Issues.
-   Email us with other feedback contact@code4.ro

## License

This project is licensed under the MPL 2.0 License - see the [LICENSE](LICENSE) file for details

## About Code4Ro

Started in 2016, Code for Romania is a civic tech NGO, official member of the Code for All network. We have a community of over 500 volunteers (developers, ux/ui, communications, data scientists, graphic designers, devops, it security and more) who work pro-bono for developing digital solutions to solve social problems. #techforsocialgood. If you want to learn more details about our projects [visit our site](https://www.code4.ro/en/) or if you want to talk to one of our staff members, please e-mail us at contact@code4.ro.

Last, but not least, we rely on donations to ensure the infrastructure, logistics and management of our community that is widely spread across 11 timezones, coding for social change to make Romania and the world a better place. If you want to support us, [you can do it here](https://code4.ro/en/donate/).
