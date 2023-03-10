<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <!--Vite Necessary-->
        @vite('resources/css/app.css') 
    </head>
    <body >
        <header class="text-blue-500 body-font">
            <!--Header color/Navbar-->
            <div class="mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center h-15 bg-gradient-to-r from-blue-900 to-blue-900">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <!--Logo where to put-->
                    <span class="text-gray-50 ml-3 text-xl">TAPM</span>
                    </a>

                    <!--Links for log-in/sign-up-->
                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="text-2xl text-gray-50 hover:text-blue-500">Log-in</a>
                    <a class="pl-5 pr-4 text-2xl text-yellow-500 hover:text-blue-500">Sign-up</a>
                    </nav>
                    <button class="inline-flex items-center bg-blue-900 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-500 rounded text-base mt-4 md:mt-0">Button
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!--Projects Displayed-->
        <div class="bg-cover bg-[url('/img/apc-building.png')]">     
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="h-screen pb-4 bg-top bg-auto bg-no-repeat bg-[url('/img/logo.png')]"></div>
                <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/601x361">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/603x363">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/602x362">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/605x365">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/606x366">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-amber-500 bg-yellow-400 opacity-0 hover:bg-amber-500 opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        </div>     
    </body>
</html>
