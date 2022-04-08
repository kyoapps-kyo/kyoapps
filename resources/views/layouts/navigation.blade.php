<nav>
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 text-base-content">
        <div class="flex justify-between h-20 my-10">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('videos')" :active="request()->routeIs('videos')">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M19 15V5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2zM8 14V6l6 4z" />
                        </svg>
                        <p class="ml-2">video</p>
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M10 9a3 3 0 1 0 0-6a3 3 0 0 0 0 6Zm-7 9a7 7 0 1 1 14 0H3Z" clip-rule="evenodd" />
                        </svg>
                        <p class="ml-2">about</p>
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M10 4h10a1 1 0 0 1 0 2H10a1 1 0 1 1 0-2Zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2Zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2ZM5 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4Z" />
                        </svg>
                        <p class="ml-2">services</p>
                    </x-nav-link>
                    <x-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                            <path fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M29 17v11H3V17M2 8h28v8s-6 4-14 4s-14-4-14-4V8Zm14 14v-4m4-10s0-4-4-4s-4 4-4 4" />
                        </svg>
                        <p class="ml-2">portfolio</p>
                    </x-nav-link>
                    <a href="#contact-modal"
                        class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11 14H9a9 9 0 0 1 9-9v2c-3.87 0-7 3.13-7 7zm7-3V9c-2.76 0-5 2.24-5 5h2c0-1.66 1.34-3 3-3zM7 4c0-1.11-.89-2-2-2s-2 .89-2 2s.89 2 2 2s2-.89 2-2zm4.45.5h-2A2.99 2.99 0 0 1 6.5 7H2v4h6V8.74a4.97 4.97 0 0 0 3.45-4.24zM19 17c1.11 0 2-.89 2-2s-.89-2-2-2s-2 .89-2 2s.89 2 2 2zm-1.5 1a2.99 2.99 0 0 1-2.95-2.5h-2A4.97 4.97 0 0 0 16 19.74V22h6v-4h-4.5z" />
                        </svg>
                        <p class="ml-2">contact</p>
                    </a>

                    <div class="modal" style="margin-left: 0;" id="contact-modal">
                        <div class="modal-box relative">
                            <form action="">
                                <h3 class="font-bold text-2xl">CONTACT</h3>
                                <div class="form-control my-4 w-full space-y-4">
                                    <label class="input-group">
                                        <span class="w-28 flex justify-center">Name</span>
                                        <input type="text" placeholder="name" class="input input-bordered w-60">
                                    </label>
                                    <label class="input-group">
                                        <span class="w-28 flex justify-center">Email</span>
                                        <input type="text" placeholder="info@site.com"
                                            class="input input-bordered w-60">
                                    </label>
                                    <label class="label">
                                        <span class="label-text">CONTENT</span>
                                    </label>
                                    <label class="input-group">
                                        <textarea class="textarea textarea-primary w-96 " placeholder="Bio"></textarea>
                                    </label>
                                </div>
                                <div class="modal-action">
                                    <a href="#" class="btn">Submit or Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" flex items-center space-x-4">
                <button class="btn btn-secondary">Free Trial</button>

                <div>
                    <select class="select select-primary select-ghost w-full max-w-xs">
                        <option disabled selected>lang</option>
                        <option>EN</option>
                        <option>JP</option>
                        <option>CN</option>
                    </select>
                </div>
                <div>
                    <label class="swap swap-rotate">
                        <!-- this hidden checkbox controls the state -->
                        <input class=" hidden" type="checkbox" />
                        <!-- moon icon -->
                        <svg class="swap-on fill-current w-10 h-10 text-base-content" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                        </svg>

                        <!-- sun icon -->
                        <svg class="swap-off fill-current w-10 h-10 text-warning" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                        </svg>

                    </label>
                </div>
            </div>
        </div>
    </div>
</nav>
