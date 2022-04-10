<x-app-layout>
    <x-slot:aside>
        <div class="px-4 sm:px-6 lg:px-8 mt-2">
            <div class="flex justify-end">
                <div class="w-60 flex justify-center">
                    <h1 class="text-base-content text-2xl border-l-2 border-primary w-fit pl-2 font-semibold">
                        About Me
                    </h1>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="w-60 mt-10 flex justify-center">
                    <a href="https://laravel.com/" target="_black">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="48" height="48" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 264"><path fill="#FF2D20" d="M255.856 59.62c.095.351.144.713.144 1.077v56.568c0 1.478-.79 2.843-2.073 3.578L206.45 148.18v54.18a4.135 4.135 0 0 1-2.062 3.579l-99.108 57.053c-.227.128-.474.21-.722.299c-.093.03-.18.087-.278.113a4.15 4.15 0 0 1-2.114 0c-.114-.03-.217-.093-.325-.134c-.227-.083-.464-.155-.68-.278L2.073 205.938A4.128 4.128 0 0 1 0 202.36V32.656c0-.372.052-.733.144-1.083c.031-.119.103-.227.145-.346c.077-.216.15-.438.263-.639c.077-.134.19-.242.283-.366c.119-.165.227-.335.366-.48c.119-.118.274-.206.408-.309c.15-.124.283-.258.453-.356h.005L51.613.551a4.135 4.135 0 0 1 4.125 0l49.546 28.526h.01c.165.104.305.232.454.351c.134.103.284.196.402.31c.145.149.248.32.371.484c.088.124.207.232.279.366c.118.206.185.423.268.64c.041.118.113.226.144.35c.095.351.144.714.145 1.078V138.65l41.286-23.773V60.692c0-.36.052-.727.145-1.072c.036-.124.103-.232.144-.35c.083-.217.155-.44.268-.64c.077-.134.19-.242.279-.366c.123-.165.226-.335.37-.48c.12-.118.269-.206.403-.309c.155-.124.289-.258.454-.356h.005l49.551-28.526a4.13 4.13 0 0 1 4.125 0l49.546 28.526c.175.103.309.232.464.35c.128.104.278.197.397.31c.144.15.247.32.37.485c.094.124.207.232.28.366c.118.2.185.423.267.64c.047.118.114.226.145.35Zm-8.115 55.258v-47.04l-17.339 9.981l-23.953 13.792v47.04l41.297-23.773h-.005Zm-49.546 85.095V152.9l-23.562 13.457l-67.281 38.4v47.514l90.843-52.3ZM8.259 39.796v160.177l90.833 52.294v-47.505L51.64 177.906l-.015-.01l-.02-.01c-.16-.093-.295-.227-.444-.34c-.13-.104-.279-.186-.392-.3l-.01-.015c-.134-.129-.227-.289-.34-.433c-.104-.14-.227-.258-.31-.402l-.005-.016c-.093-.154-.15-.34-.217-.515c-.067-.155-.154-.3-.196-.464v-.005c-.051-.196-.061-.403-.082-.604c-.02-.154-.062-.309-.062-.464V63.57L25.598 49.772l-17.339-9.97v-.006ZM53.681 8.893L12.399 32.656l41.272 23.762L94.947 32.65L53.671 8.893h.01Zm21.468 148.298l23.948-13.786V39.796L81.76 49.778L57.805 63.569v103.608l17.344-9.986ZM202.324 36.935l-41.276 23.762l41.276 23.763l41.271-23.768l-41.27-23.757Zm-4.13 54.676l-23.953-13.792l-17.338-9.981v47.04l23.948 13.787l17.344 9.986v-47.04Zm-94.977 106.006l60.543-34.564l30.264-17.272l-41.246-23.747l-47.489 27.34l-43.282 24.918l41.21 23.325Z"/></svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="w-60 mt-10 flex justify-center">
                    <a href="https://www.mysql.com/" target="_black">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="48" height="48" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#5d87a1" fill-rule="evenodd" d="M8.785 6.865a3.055 3.055 0 0 0-.785.1V7h.038a6.461 6.461 0 0 0 .612.785c.154.306.288.611.441.917l.038-.039a1.074 1.074 0 0 0 .4-.957a4.314 4.314 0 0 1-.23-.4c-.115-.191-.364-.287-.517-.44"/><path fill="#00758f" fill-rule="evenodd" d="M27.78 23.553a8.849 8.849 0 0 0-3.712.536c-.287.115-.745.115-.785.478c.154.153.172.4.307.613a4.467 4.467 0 0 0 .995 1.167c.4.306.8.611 1.225.879c.745.461 1.588.728 2.314 1.187c.422.268.842.612 1.264.9c.21.153.343.4.611.5v-.058a3.844 3.844 0 0 0-.291-.613c-.191-.19-.383-.363-.575-.554a9.118 9.118 0 0 0-1.99-1.932c-.613-.422-1.953-1-2.2-1.7l-.039-.039a7.69 7.69 0 0 0 1.321-.308c.65-.172 1.243-.133 1.912-.3c.307-.077.862-.268.862-.268v-.3c-.342-.34-.587-.795-.947-1.116a25.338 25.338 0 0 0-3.122-2.328c-.587-.379-1.344-.623-1.969-.946c-.226-.114-.6-.17-.737-.36a7.594 7.594 0 0 1-.776-1.457a46.84 46.84 0 0 1-1.551-3.293a20.236 20.236 0 0 0-.965-2.157A19.078 19.078 0 0 0 11.609 5a9.07 9.07 0 0 0-2.421-.776c-.474-.02-.946-.057-1.419-.075a7.55 7.55 0 0 1-.869-.664C5.818 2.8 3.038 1.328 2.242 3.277C1.732 4.508 3 5.718 3.435 6.343A8.866 8.866 0 0 1 4.4 7.762c.133.322.171.663.3 1a22.556 22.556 0 0 0 .987 2.538a8.946 8.946 0 0 0 .7 1.172c.153.209.417.3.474.645a5.421 5.421 0 0 0-.436 1.419a8.336 8.336 0 0 0 .549 6.358c.3.473 1.022 1.514 1.987 1.116c.851-.34.662-1.419.908-2.364c.056-.229.019-.379.132-.53v.184s.483 1.061.723 1.6a10.813 10.813 0 0 0 2.4 2.59A3.514 3.514 0 0 1 14 24.657V25h.427a1.054 1.054 0 0 0-.427-.788a9.4 9.4 0 0 1-.959-1.16a24.992 24.992 0 0 1-2.064-3.519c-.3-.6-.553-1.258-.793-1.857c-.11-.231-.11-.58-.295-.7a7.266 7.266 0 0 0-.884 1.313a11.419 11.419 0 0 0-.517 2.921c-.073.02-.037 0-.073.038c-.589-.155-.792-.792-1.014-1.332a8.756 8.756 0 0 1-.166-5.164c.128-.405.683-1.681.461-2.068c-.111-.369-.48-.58-.682-.871a7.767 7.767 0 0 1-.663-1.237C5.912 9.5 5.69 8.3 5.212 7.216a10.4 10.4 0 0 0-.921-1.489A9.586 9.586 0 0 1 3.276 4.22c-.092-.213-.221-.561-.074-.793a.3.3 0 0 1 .259-.252c.238-.212.921.058 1.16.174a9.2 9.2 0 0 1 1.824.967c.258.194.866.685.866.685h.18c.612.133 1.3.037 1.876.21a12.247 12.247 0 0 1 2.755 1.32a16.981 16.981 0 0 1 5.969 6.545c.23.439.327.842.537 1.3c.4.94.9 1.9 1.3 2.814a12.578 12.578 0 0 0 1.36 2.564c.286.4 1.435.612 1.952.822a13.7 13.7 0 0 1 1.32.535c.651.4 1.3.861 1.913 1.3c.305.23 1.262.708 1.32 1.091"/></svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="w-60 mt-10 flex justify-center">
                    <a href="https://vuejs.org/index.html" target="_black">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="48" height="48" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 221"><path fill="#41B883" d="M204.8 0H256L128 220.8L0 0h97.92L128 51.2L157.44 0h47.36Z"/><path fill="#41B883" d="m0 0l128 220.8L256 0h-51.2L128 132.48L50.56 0H0Z"/><path fill="#35495E" d="M50.56 0L128 133.12L204.8 0h-47.36L128 51.2L97.92 0H50.56Z"/></svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="w-60 mt-10 flex justify-center">
                    <a href="https://flutter.dev/" target="_black">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="48" height="48" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 317"><defs><linearGradient id="svgIDa" x1="3.952%" x2="75.897%" y1="26.993%" y2="52.919%"><stop offset="0%"/><stop offset="100%" stop-opacity="0"/></linearGradient></defs><path fill="#47C5FB" d="M157.666.001L.001 157.666l48.8 48.8L255.268.001zm-1.099 145.396l-84.418 84.418l48.984 49.716l48.71-48.71l85.425-85.424z"/><path fill="#00569E" d="m121.133 279.531l37.082 37.082h97.052l-85.425-85.792z"/><path fill="#00B5F8" d="m71.6 230.364l48.801-48.801l49.441 49.258l-48.709 48.71z"/><path fill="url(#svgIDa)" fill-opacity=".8" d="m121.133 279.531l40.56-13.459l4.029-31.131z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        </x-slot>
        <div class="max-w-7xl pt-2 pb-6 sm:px-6 lg:px-8 h-full">
            <h2 class="pl-10 text-base-content text-2xl font-semibold">I'm Kyo and Web Application Engineer</h2>
            <p class="pl-10 my-10 text-base-content text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <div class=" pl-10 grid grid-cols-7 gap-8">
                <div class="col-span-2 flex flex-col space-y-3">
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">City : </span> Kyoto</p>
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">Website : </span> kyoapps.com</p>
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">Degree : </span>CS</p>
                </div>
                <div class="col-span-2 flex flex-col space-y-3">
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">Email : </span> kyo@kyoapps.com</p>
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">Interest : </span> Street shot</p>
                    <p class="pb-2 text-lg text-base-content border-b-2 border-neutral"><span class=" font-medium">Language : </span> Chinese ・ Japanese</p>
                </div>
                <div class="col-span-3 flex flex-col space-y-3">
                    <p class="pb-2 text-lg text-base-content font-semibold">Laravel</p>
                    <progress class="w-full progress progress-primary" value="95" max="100"></progress>
                    <p class="pb-2 text-lg text-base-content font-semibold">Vue</p>
                    <progress class="w-full progress progress-primary" value="80" max="100"></progress>
                    <p class="pb-2 text-lg text-base-content font-semibold">Database</p>
                    <progress class="w-full progress progress-primary" value="95" max="100"></progress>
                    <p class="pb-2 text-lg text-base-content font-semibold">Flutter</p>
                    <progress class="w-full progress progress-primary" value="70" max="100"></progress>
                </div>
            </div>
        </div>
</x-app-layout>
