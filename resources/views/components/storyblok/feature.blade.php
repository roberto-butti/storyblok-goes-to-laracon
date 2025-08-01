<div
    {!! $editableAttributes !!}
    class=""
    id="feature-{{ Arr::get($component,'_uid') }}">

    <h2 class="">{{ Arr::get($component, "name") }}</h2>
    <p class="text-xl">
        {{ Arr::get($component, "description") }}
    </p>
</div>
