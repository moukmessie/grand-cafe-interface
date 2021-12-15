<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body class="text-gray-600 font-sans">

        <div class="grid md:grid-cols-3"> <!-- content wrapper -->
            <div class="md:col-span-1 md:flex md:justify-end">
                <nav class="text-right">
                    <div class="flex justify-between items-center">
                        <h1 class="font-bold uppercase p-6 border-gray-100">
                            <a class="hover:text-gray-700" href="/" >Grand Café</a>
                        </h1>
                        <div class="px-4 cursor-pointer md:hidden" id="burger">

                        </div>


                    </div>
                    <ul class="text-sm mt-6 hidden md:block" id="menu">
                        <li class="text-gray-700 font-bold ">
                            <a href="#" class="px-4 flex justify-end border-r-4 border-primary">
                                <span>Home</span>
                                <svg class="w-5 ml-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="#" class="px-4 flex justify-end border-r-4 border-white">
                                <span>About</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="#" class="px-4 flex justify-end">
                                <span>Contact</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 ml-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div><!-- end nav -->
            <main class="px-16 py-6 bg-gray-100 md:col-span-2">
                <div class="flex justify-center md:justify-end">
                    <a href="#" class=" btn p-2 text-sm text-primary border-primary md:border-2 hover:bg-primary  hover:text-white">Se connecter</a>
                    <a href="#" class="btn p-2 text-sm text-primary ml-3 border-primary md:border-2 hover:bg-primary hover:text-white">S'inscrire</a>
                </div>

                <!--div class="flex items-center">
                    <div class="bg-gray-500 h-4 w-6"></div>
                    <div class="bg-red-500 h-8 w-6"></div>
                    <div class="bg-green-500 h-12 w-6"></div>
                </div-->

                <header>
                    <h2 class="text-gray-700 text-6xl font-semibold">Recettes</h2>
                    <h3 class="text-2xl font-semibold">Café</h3>
                </header>

                <div>
                    <h4 class="font-semibold mt-12 pb-2 border-b border-gray-200">Dernière recettes</h4>

                    <div class="mt-8 grid lg:grid-cols-3 gap-10">
                        <!-- cards go here -->
                        <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{asset("images/café-croissant.jpg")}}" alt="">
                            <div class="m-4">
                                <span class="font-bold">5 Lorem ipsum dolor </span>
                                <span class="block text-gray-500 text-sm">recette de Messie</span>
                            </div>
                            <div class="bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>25 min</span>
                            </div>
                        </div>

                        <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{asset("images/café-croissant.jpg")}}" alt="">
                            <div class="m-4">
                                <span class="font-bold">5 Lorem ipsum dolor </span>
                                <span class="block text-gray-500 text-sm">recette de Messie</span>
                            </div>
                            <div class="bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>25 min</span>
                            </div>
                        </div>

                        <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                            <img class="w-full h-32 sm:h-48 object-cover" src="{{asset("images/choco.jpg")}}" alt="">
                            <div class="m-4">
                                <span class="font-bold">5 Lorem ipsum dolor </span>
                                <span class="block text-gray-500 text-sm">recette de Messie</span>
                            </div>
                            <div class="bg-secondary-100 text-secondary-200 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                                <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>25 min</span>
                            </div>
                        </div>
                    </div>

                    <h4 class="font-semibold mt-12 pb-2">Plus Populaire</h4>
                    <div class="mt-8">
                        <!-- cards go here -->
                    </div>

                    <div class="flex justify-center">
                        <div class=" btn p-2 bg-secondary-100 text-secondary-200  hover:shadow-inner">Voir plus</div>
                    </div>
                </div>

            </main>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
