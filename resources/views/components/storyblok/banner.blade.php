
<section
    {!! $editableAttributes !!}
    class="bg-white lg:grid lg:h-screen lg:place-content-center dark:bg-gray-900"
    id="banner-{{ Arr::get($component,'_uid') }}"
>
  <div
    class="mx-auto w-screen max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 md:grid md:grid-cols-2 md:items-center md:gap-4 lg:px-8 lg:py-32"
  >
    <div class="max-w-prose text-left">
      <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
        <strong class="text-indigo-600">{{ Arr::get($component,"headline") }} </strong>
      </h1>

      <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed dark:text-gray-200">
          {{ Arr::get($component,"text") }}
      </p>

      <div class="mt-4 flex gap-4 sm:mt-6">
          @foreach($component["buttons"] as $key => $button)
              <livewire:storyblok-component :component="$button" :key="$button['_uid']">
          @endforeach
        <a
          class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
          href="#"
        >
          Get Started
        </a>

        <a
          class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-white"
          href="#"
        >
          Learn More
        </a>
      </div>
    </div>
    <!-- HERE -->
  </div>
</section>
