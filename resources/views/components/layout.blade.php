<html data-theme="cmyk">
<head>
    <title>{{ $title ?? 'Storyblok Example' }}</title>
    @livewireStyles

@vite(['resources/css/app.css', 'resources/js/app.js'])
<meta name="csrf_token" value="{{ csrf_token() }}" />

<script src="//app.storyblok.com/f/storyblok-v2-latest.js" type="text/javascript">
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const {
            StoryblokBridge
            , location
        } = window
        const storyblokInstance = new StoryblokBridge(
            {
                preventClicks: true
            }
        )
        storyblokInstance.on(['published', 'change'], () => {
            // reload page if save or publish is clicked
            console.log("event saving");
            window.location.reload()

        });
        storyblokInstance.on('input', (event) => {
            // Access currently changed but not yet saved content via:
            let component = Livewire.first()
            console.log(component.$wire.component)

            let components = Livewire.all()
            console.log(components[0].$wire.content)
            components[0].$wire.set("content", event.story.content);





            console.log(event.story.content)
        })






    }, false);

</script>


</head>
<body>




    {{ $slot }}

@livewireScripts

</body>
</html>
