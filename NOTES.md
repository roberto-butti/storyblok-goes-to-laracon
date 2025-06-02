# Notes

## Set up an empty, minimal Laravel project

Initialize and empty project (replace `storyblok-goes-to-laracon` with your project directory):

```shell
laravel new storyblok-goes-to-laracon --phpunit --database=sqlite -n
cd storyblok-goes-to-laracon
bun install && bun run build
```
## Using Valet for setting up HTTPS

In the project directory, run `valet secure`

> In my case, I have Laravel Valet that serves all the directories from `~/Sites/`. So in this case I can access the project via browser at the URL: https://storyblok-goes-to-laracon.test/

## Creating a Storyblok Space

In this short article https://dev.to/robertobutti/how-to-set-up-a-storyblok-space-with-the-community-plan-for-local-development-1i37, you can read about how:

- Creating a new Storyblok space
- Pick the Access Token from the new Space

> The access token will be useful later for setting up the integration

## Setting Environment Variables

In the `config/storyblok.php` :

```php
return [
    'apiKey' => env('STORYBLOK_API_KEY', ''),
    'draft' => env('STORYBLOK_DRAFT', false),
];
```

You can set the values in the `.env` file. For some examples, see the `.env.example` file.

So, you can get the config via: `config("storyblok.apiKey)`

## Installing Storyblok Content API Client

```shell
composer require storyblok/php-content-api-client
```
