# Laravel + Storyblok Integration Demo

This repository is a hands-on (and opinionated) demonstration of integrating **Storyblok**, a headless CMS, into a modern **Laravel** application.

Built for **Laracon US 2025** in Denver, this project is aimed at Laravel developers who are exploring headless CMS workflows and want to evaluate Storyblok in a real-world context. It focuses on clean architecture, flexible content modeling, and bridging the gap between structured content and Laravel’s powerful server-side rendering capabilities.

## What this project covers

- Efficient integration with the Storyblok Content Delivery API using the Storyblok Content Delivery API Client
- Dynamic rendering of Storyblok content via Blade/**Livewire** components
- Support for the Storyblok Visual Editor for a reactive preview
- Practical content modeling patterns for Laravel projects
- Scalable structure for larger, component-driven applications

If you’re already comfortable with Laravel and are curious about how Storyblok can fit into your stack, this repo provides a clear, opinionated starting point.

## Files
- `config/storyblok.php` the config file for handling the access token
- `routes/web.php` where is define the catchall route via `Route::get('{slug}',`. To keep it simple as much as possible, the API call is implemented in this file (you should delegate this to a Controller). Then is rendered the blade file: `story.blade.php`
- `resources/views/story.blade.php` the blade that render the story via `<livewire:storyblok-content` and loads the layout
- `resources/views/components/layout.blade.php`: the layout file with the initialization of the Storyblok Bridge.
- `app/Livewire/StoryblokContent.php` Livewire component for the content /story
- `app/Livewire/StoryblokBaseComponent.php` : has the responsability of rendering the proper blade component according to the name of the component, and provides functionalities and method for generating the Storyblok editable attributes.
- `app/Livewire/StoryblokComponent.php`: general purpose Livewire component for handling components.
- `resources/views/components/storyblok` the directory with the Storyblok components (Content types and nestable components)
