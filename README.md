# PHP Console Starter App

A PHP console start app built using the [Symfony Console](https://symfony.com/doc/current/components/console.html) component.

## Requirements
This project is made to work only needing docker:
- [Docker](https://docs.docker.com/desktop/)

Optionally, it can be run locally without using docker:
- [PHP 8.4](https://php.new/install/linux/8.4) from [php.new](https://php.new/)
  - or from your repositories or other sources
- [Composer](https://getcomposer.org/download/)

## Installation
- clone this or [download the zip](https://github.com/javcorreia/php-simple-console/archive/refs/heads/main.zip)
  ```shell
  git clone https://github.com/javcorreia/php-simple-console.git
  ```
- copy the file `.env.example` to `.env`
  ```shell
  cp .env.example .env
  ```
  - change your `.env` according to your needs
## Running with docker
- install vendor
  ```shell
  bin/composer install
  ```
- execute the stack
  ```shell
  docker compose up -d
  ```
- to watch the logs for symfony's VarDumper server
  ```shell
  docker compose -f app-php-console-1
  ```
- run the console 
  ```shell
  bin/composer console
  ```
- run `app:hello` command
  ```shell
  bin/composer console app:hello
  ```
- help for `app:hello` command
  ```shell
  bin/composer console app:hello -- -h
  ```
  (when using composer to execute other php scripts, we need to put a `--` prefix before any arguments or options of the command being executed)

## Run locally (without docker)
- install vendor
  ```shell
  composer install
  ```
- run the console
  ```shell
  php console
  ```
- run `app:hello` command
  ```shell
  php console app:hello
  ```
- help for `app:hello` command
  ```shell
  php console app:hello -h
  ```

## Other available composer scripts
- PHP-CS-Fixer linter (checks and fixes `src` directory)
  ```shell
  # if using docker
  bin/composer linter-fix
  
  # otherwise
  composer linter-fix
  ```

## Creating new commands
To create new commands and all available features, see [Symfony Console documentation](https://symfony.com/doc/current/console.html#creating-a-command) for this component.  
All commands created in `src/Commands` and its subdirectories are auto registered on `console` execution.
