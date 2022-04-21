<x-app-layout>
    <x-slot name="aside">
        <div class="px-4 sm:px-6 lg:px-8 mt-20">
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
    <div x-data="{ h: $refs.foo.offsetHeight + 'px', w: $refs.foo.offsetWidth + 'px' }"
        class="flex-grow h-full pl-10 pr-6 py-20 relative">
        <video x-ref="foo" class=" md:rounded-xl" playsinline autoplay muted loop>
            <source class=" -z-10" src="{{ asset('/assets/Home_bg.mp4') }}" type="video/mp4">
        </video>
        <div :style="`width: ${w}; height: ${h}`" class=" absolute top-20 left-10 z-50 text-white p-20">
            <div class=" w-full">
                <h1 class="text-7xl font-bold opacity-40 text-stroke">KYOAPPS</h1>
                <p class="w-full text-4xl mt-10 leading-relaxed opacity-60">
                    <span class="typing w-full font-bold text-stroke break-words"></span>
                </p>
            </div>
        </div>
    </div>
    <x-slot name="myScript">
        <script defer>
            let typing = new Typed('.typing', {
                    strings : [
                        'Application Engineer',
                        '以下展示了自1500世纪以来使用的标准Lorem Ipsum段落',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. '
                    ],
                    typeSpeed : 100,
                    BackSpeed : 600,
                    loop : true
                });
        </script>
    </x-slot>
</x-app-layout>
