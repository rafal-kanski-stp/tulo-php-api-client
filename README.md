# Tulo PHP API  Client

[![Build Status](https://travis-ci.org/rafal-kanski-stp/tulo-php-api-client.svg?branch=master)](https://travis-ci.org/rafal-kanski-stp/tulo-php-api-client)

## Requirements

It requires `docker` and `docker-compose`. It works perfectly fine for `PHP>=7.2`.

## Installation

`composer require rafal-kanski-stp/tulo-php-api-client`

## Installation (for development)

In project directory run command:

```bash**
docker-compose -f infrastructure/docker/docker-compose.yml up -d
```

To install project you have to run this:

```bash
export CONTAINER_USER_ID=998 && \
export CONTAINER_USER_NAME=appuser && \
export CONTAINER_GROUP_ID=998 && \
export CONTAINER_GROUP_NAME=appusergroup && \
export GITHUB_OAUTH_TOKEN=xxx && \
docker-compose -f infrastructure/docker/docker-compose.yml exec php-cli-7.3 \
/bin/bash -c "composer install --no-interaction"
```

Or:

```bash
cp .env.dist .env
```

Set all variables and next:

```bash
docker-compose -f infrastructure/docker/docker-compose.yml exec php-cli-7.3 \
/bin/bash -c "composer install --no-interaction"
```

All exported values should be adjusted to your needs.

## Tests

This library supports major versions of PHP. For:

* `7.3` - when you build a container it has shared volume
* `7.2` - when you build a container it copies data from the project

See `.travis.yml` file to get more details how to run tests locally.
