<x-app-layout>
    <x-slot:aside>
        <div class="px-4 sm:px-6 lg:px-8 mt-2">
            <div class="flex justify-end">
                <div class="w-60">
                    <h1 class="text-base-content text-2xl border-l-2 border-primary w-fit pl-2 font-semibold">
                        About Me
                    </h1>
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
