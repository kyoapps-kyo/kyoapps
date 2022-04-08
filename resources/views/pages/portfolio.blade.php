<x-app-layout>
    <x-slot:aside>
        <div class="px-4 sm:px-6 lg:px-8 mt-2">
            <div class="flex justify-end">
                <div class="w-60">
                    <h1 class="text-base-content text-2xl border-l-2 border-primary w-fit pl-2 font-semibold">
                        Portfolio
                    </h1>
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
        <div class="max-w-7xl pt-2 pb-6 sm:px-6 lg:px-8 h-full">
            <div class="card lg:card-side bg-base-100 shadow-xl h-full">
                <figure class="h-full"><img class=" object-fill h-full w-auto" src="https://api.lorem.space/image/album" alt="Album"></figure>
                <div class="card-body">
                    <h2 class="card-title">My last project!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">WATCH</button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
