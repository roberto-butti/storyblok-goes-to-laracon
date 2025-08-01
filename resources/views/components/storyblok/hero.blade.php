<div
   {!! $editableAttributes !!}
    id="hero-{{ Arr::get($component,'_uid') }}" class="bg-base-100 relative overflow-hidden">
  <div class="absolute top-0 left-0 hidden h-full w-full lg:block">
    <div
      class="from-primary/20 to-primary/5 absolute top-32 -left-20 h-96 w-96 rounded-full bg-gradient-to-br blur-3xl"
    ></div>
    <div
      class="from-secondary/20 to-secondary/5 absolute right-10 bottom-20 h-72 w-72 rounded-full bg-gradient-to-br blur-3xl"
    ></div>
  </div>

  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="flex flex-col items-center gap-16 lg:flex-row">
      <div class="relative z-10 lg:w-1/2">
        <div class="mb-6 flex items-center gap-3">
          <div class="bg-base-content/40 h-px w-8"></div>
          <span
            class="font-urbanist text-base-content/80 text-sm font-medium tracking-widest uppercase"
          >
              {{ Arr::get($component,"caption") }}
          </span>
        </div>

        <h1
          class="font-urbanist text-base-content mb-6 text-4xl font-bold md:text-5xl lg:text-[4.5rem]"
        >
            {{ Arr::get($component,"headline") }}
          <span class="text-primary block">{{ Arr::get($component,"headline2") }}</span>
        </h1>

        <p class="font-urbanist text-base-content/80 mb-8 max-w-xl text-lg">
            {{ Arr::get($component,"subheadline") }}
        </p>

        <div class="font-urbanist mb-12 flex flex-wrap gap-4">
            @foreach($component["buttons"] as $key => $button)
                <livewire:storyblok-component :component="$button" :key="$button['_uid']">
            @endforeach



        </div>

        <div
          class="border-base-content/10 font-urbanist grid max-w-md grid-cols-3 gap-8 border-t pt-8"
        >

        </div>
      </div>

      <div class="relative lg:w-1/2">
        <div class="relative overflow-hidden rounded-xl shadow-lg">
          <img
            src="{{ Arr::get($component,"image.filename") }}"
            alt="heroimage"
            class="h-[580px] w-full object-cover"
            width="1152"
            height="1152"
            loading="eager"
          />

          <div
            class="border-base-content/10 bg-base-100/95 absolute bottom-6 left-6 rounded-lg border px-4 py-3 backdrop-blur-xs"
          >
            <div class="flex items-center gap-3">
              <div
                class="bg-primary/10 flex h-8 w-8 items-center justify-center rounded-full"
              >
                <svg
                  class="text-primary h-4 w-4"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M5 13l4 4L19 7"
                  />
                </svg>
              </div>
              <div class="font-urbanist">
                <div class="text-base-content/60 text-xs">Loved by</div>
                <div class="text-sm font-medium">Laravel Artisans</div>
              </div>
            </div>
          </div>

          <div
            class="border-base-content/10 bg-base-100/95 absolute top-6 right-6 rounded-lg border px-4 py-3 backdrop-blur-xs"
          >
            <div class="font-urbanist text-center">
              <div class="text-primary text-lg font-bold">Joyful tools</div>
              <div class="text-base-content/60 text-xs">Laravel + Storyblok</div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
