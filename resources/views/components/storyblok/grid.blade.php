<section class="p-10" {!! $editableAttributes !!}
    id="grid-{{ Arr::get($component,'_uid') }}">
    <h2 class="text-3xl font-bold text-center mb-10">{{ Arr::get($component, "headline")}}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


    @foreach($component["columns"] as $key => $column)
        <livewire:storyblok-component :component="$column" :key="$column['_uid']">
    @endforeach

    </div>
</section>
