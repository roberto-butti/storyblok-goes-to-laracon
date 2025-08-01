<?php

use Illuminate\Support\Facades\Route;
use Storyblok\Api\StoriesApi;
use Storyblok\Api\StoryblokClient;
use Storyblok\Api\Domain\Value\Dto\Version;
use Storyblok\Api\Request\StoryRequest;
use Storyblok\Api\SpacesApi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/space', function () {
    $client = new StoryblokClient(
        baseUri: 'https://api.storyblok.com',
        token: config('storyblok.apiKey'),
        timeout: 10 // optional
    );
    $spacesApi = new SpacesApi($client);
    $response = $spacesApi->me();
    dd($response->space);
});


Route::get('{slug}', function ($slug) {


    $client = new StoryblokClient(
        baseUri: 'https://api.storyblok.com',
        token: config('storyblok.apiKey'),
        timeout: 10 // optional
    );
    $storiesApi = new StoriesApi($client,
        config('storyblok.draft') ? "draft" : "published");
    $response = $storiesApi->bySlug($slug, new StoryRequest(
        //language: 'it',
    ));

    //dd($response->story['content']['_uid']);

    return view('story', ['story' => $response->story]);
})->where('slug', '.*');
