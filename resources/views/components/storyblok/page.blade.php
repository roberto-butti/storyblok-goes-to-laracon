@php

$body = Arr::get($content, "body", []);

@endphp

<div {!! $editableAttributes !!}
    id="page-{{ Arr::get($content,'_uid') }}"
>

    @foreach($body as $key => $column)
        <livewire:storyblok-component  :component="$column" :key="Arr::get($column,'_uid')">
    @endforeach
</div>
