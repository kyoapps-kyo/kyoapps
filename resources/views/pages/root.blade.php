<x-app-layout>
    <x-slot:aside>
        </x-slot>
        <div x-data="{ h: $refs.foo.offsetHeight + 'px', w: $refs.foo.offsetWidth + 'px' }" class="flex-grow h-full pl-10 pr-6 py-20 relative">
            <video x-ref="foo" class=" xx md:rounded-xl" playsinline autoplay muted loop>
                <source class=" -z-10" src="{{ asset('/assets/Home_bg.mp4') }}" type="video/mp4">
            </video>
            <div x-bind:style="`width: ${w}; height: ${h}`" class=" absolute top-20 left-10 z-50 text-base-300 bg-black">
                <div class=" w-fit py-1 px-2 rounded-lg">
                    <h1 class="text-7xl px-4 py-1 font-bold opacity-40 text-stroke">KYOAPPS</h1>
                    <p class="typing text-3xl mt-20 pl-6 leading-relaxed"></p>
                </div>
            </div>
        </div>
        <x-slot:myScript>
            <script defer>
                console.log(document.getElementsByClassName('xx'));
            </script>
        </x-slot>
</x-app-layout>
