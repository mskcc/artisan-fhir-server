# Artisan FHIR Server
A FHIR server built with Laravel, meant to expose clinical research data.

### Features

- Complaince with FHIR [version  4.0.0](http://hl7.org/fhir/R4/index.html)
- OAuth (``client_credentials``) authentication flow
- Coverage of the following FHIR Resources:
    - [Observation](https://www.hl7.org/fhir/observation.html)

### Installation and Setup
This project uses [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/). It has 3 services: `app`, `db` (mariadb), and `nginx` (web server)


1. Install Docker for your platform.
2. Clone this repository.
3. Rename `.env.example` to `.env`. (This is your environment file, which contains key/value pairs used by the app. This will be different for all deployment environments such as production, etc.)

4. Run the following Docker commands to build your ``app`` image and run the containers in the backgound.
```
docker-compose build app
docker-compose up -d
```
5. To show information about the state of your active services, run:
```
docker-compose ps
```
6. To finish setting up the app, run the following command, which will install Composer dependencies and generate an app key:
```
docker-compose exec app composer install
```

and, if this the first time setting up, to migrate the database and set up an app key:

```
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

7. Access http://localhost:8000 in the browser to access the app.


### Running the Test Suite
Tests are run using PHPUnit. To run them, run the following command to execute the suite inside the app container:

```
docker-compose exec app php vendor/bin/phpunit
```