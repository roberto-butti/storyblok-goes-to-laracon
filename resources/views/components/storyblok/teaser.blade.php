@php

$headline = Arr::get($component, "headline");
$subheadline = Arr::get($component, "subheadline");
$buttons = Arr::get($component, "buttons", []);


@endphp
<div {!! $editableAttributes !!} >
{{-- You can render HTML here ... --}}
<h2 class="">{{ $headline }}</h2>
{{-- Or you can delegate the rendering to a specific component, passing the parameters --}}
<x-ui.headline :headline="$headline" :subheadline="$subheadline" />
</div>
