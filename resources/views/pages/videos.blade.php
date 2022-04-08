<x-app-layout>
    <x-slot:aside>
        <div class="px-4 sm:px-6 lg:px-8 mt-2">
            <div class="flex justify-end">
                <div class="form-control w-60">
                    <div class="input-group flex justify-center">
                        <input type="text" placeholder="Search…" class="input input-bordered">
                        <button class="btn btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-5">
                <ul class="menu bg-base-100 w-60 rounded-box truncate">
                    <li><a>Item 1</a></li>
                    <li class="bordered"><a>I have border</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <div class="flex justify-end mt-5">
                <div class="btn-group">
                    <button class="btn">«</button>
                    <button class="btn w-40">Page 22</button>
                    <button class="btn">»</button>
                </div>
            </div>
        </div>
        </x-slot>
        <div class="max-w-7xl px-4 pt-2 pb-6 sm:px-6 lg:px-8 h-full">
            <div class="hero h-full" style="background-image: url(https://api.lorem.space/image/fashion?);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-xl">
                        <h1 class="mb-1 text-5xl font-bold text-left">Hello, my name is <span class=" text-info Allura text-6xl">
                                &nbsp;Kyo</span></h1>
                        <h1 class="mb-5 text-4xl font-bold text-left">I am a <span class=" text-info typing"></span></h1>
                        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <button class="btn btn-neutral">Watch This Video</button>
                    </div>
                </div>
            </div>
        </div>
        <x-slot:myScript>
            <script defer>
                var typed = new Typed('.typing', {
                    strings : [
                        'Application Engineer',
                        'Web Designer',
                        'Web Developer'
                    ],
                    typeSpeed : 100,
                    BackSpeed : 600,
                    loop : true
                });
            </script>
            </x-slot>
</x-app-layout>
