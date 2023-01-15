<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'public/css/style.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script>
        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');


        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</head>

<body>
    <header class="fixed top-0 w-full z-50">
        <nav
            class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700 bg-white dark:bg-gray-900 dark:text-gray-50">
            <div class="flex flex-wrap justify-center items-center">
                <a class="md:p-4 py-2 block hover:text-blue-400" href="/">
                    <img class="logo" src="{{ asset('images/todo.png') }}" alt="ToDo App">
                </a>
                <a href="/" class="block hover:text-blue-400">ToDo App</a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                    <li>
                        <a class="md:p-4 py-2 block dark:text-gray-50 dark:hover:text-blue-400 text-gray-900 hover:text-blue-400"
                            href="#features">Features</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block dark:text-gray-50 dark:hover:text-blue-400 text-gray-900 hover:text-blue-400"
                            href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block dark:text-gray-50 dark:hover:text-blue-400 text-gray-900 hover:text-blue-400"
                            href="#team">Team</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block dark:text-gray-50 dark:hover:text-blue-400 text-gray-900 hover:text-blue-400"
                            href="#review">Reviews</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block dark:text-gray-50 dark:hover:text-blue-400 text-gray-900 hover:text-blue-400"
                            href="#contact">Contact</a>
                    </li>
                    <li>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-8 h-8" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-8 h-8" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>

                </ul>
            </div>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                    <li>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-8 h-8" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-8 h-8" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    @auth
                        <li>
                            <a class="md:p-4 py-2 block dark:text-gray-50 text-gray-900 dark:hover:text-blue-400 hover:text-blue-400"
                                href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li>
                            <a class="md:p-4 py-2 block dark:text-gray-50 text-gray-900 dark:hover:text-blue-400 hover:text-blue-400"
                                href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="md:p-4 py-2 block dark:text-gray-50 text-gray-900 dark:hover:text-blue-400 hover:text-blue-400"
                                href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    <section id="main" class="antialiased">
        <h1 class="text-3xl py-5">Welcome to To Do App</h1>
        <p>
            Organize your work and private life.
        </p>
        <p>
            Stay more focused, organized, and calm with Todoist.
            <br>
            The world's #1 task management and to-do list app.
        </p>
    </section>
    <section class="w-full">
        <div class="p-6 py-12 bg-red-700 text-gray-900 dark:bg-red-700 dark:text-gray-100">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <h2 class="text-center text-6xl tracking-tighter font-bold">Up to
                        <br class="sm:hidden">50% Off
                    </h2>
                    <div class="space-x-2 text-center py-2 lg:py-0">
                        <span>For the discount ! Use this code:</span>
                        <span class="font-bold text-lg">Vendetta</span>
                    </div>
                    <a href="#" rel="noreferrer noopener"
                        class="px-5 mt-4 lg:mt-0 py-3 rounded-md border block bg-gray-100 text-red-700 hover:bg-blue-400 hover:text-gray-900 hover:dark:bg-blue-400 dark:bg-gray-50 dark:text-gray-900 dark:border-gray-400">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-900 bg-gray-100 dark:bg-gray-900 dark:text-gray-100" id="features">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
            <div class="text-center mb-20">
                <h1
                    class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">
                    Simple and effective task management</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">More than 30 million people organize
                    billions of tasks for work, education, and private lives on Todoist.</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md gray-light">
                        <div
                            class="rounded bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 p-4 transform translate-x-6 -translate-y-6  ">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-grow ">
                                <h2 class=" text-xl title-font font-medium mb-3">Webdesign</h2>
                                <p class="leading-relaxed text-sm text-justify">Donner du goût ? de la couleur aux
                                    applications, je le fais afin de rendre vos sites attrayants ?. Avant de devenir
                                    webdesigner, depuis tout petit j'étais déjà familier à la couleur et du dessin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md gray-light">
                        <div
                            class="rounded bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 p-4 transform translate-x-6 -translate-y-6 ">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3">Intégration web</h2>
                                <p class="leading-relaxed text-sm text-justify">
                                    Donner du goût ? de la couleur aux applications, je le fais afin de rendre vos sites
                                    attrayants ?. Avant de devenir webdesigner, depuis tout petit j'étais déjà familier
                                    à la couleur et du dessin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
                    <div class="pattern-dots-md gray-light">
                        <div
                            class="rounded bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 p-4 transform translate-x-6 -translate-y-6 ">
                            <div
                                class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class=" text-xl title-font font-medium mb-3">Developpement Back-end</h2>
                                <p class="leading-relaxed text-sm text-justify">
                                    Grâce à Php et ces frameworks (Larave, Symfoni, Slim), je peux vous réaliser un site
                                    dynamique c'est-à-dire qui interagie avec votre base de données ?. Nous pouvons
                                    essayer.
                                </p>
                            </div>
                        </div>
                    </div>
    </section>
    <section class="py-20 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100" id="pricing">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto mb-16 text-center">
                <span class="font-bold tracking-wider uppercase dark:text-blue-400">Pricing</span>
                <h2 class="text-4xl font-bold lg:text-5xl">Choose your best plan</h2>
            </div>
            <div class="flex flex-wrap items-stretch -mx-4">
                <div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
                    <div class="flex flex-col p-6 space-y-6 rounded shadow sm:p-8 dark:bg-gray-900">
                        <div class="space-y-2">
                            <h4 class="text-2xl font-bold">Beginner</h4>
                            <span class="text-6xl font-bold">Free</span>
                        </div>
                        <p class="mt-3 leading-relaxed dark:text-gray-400">Etiam ac convallis enim, eget euismod dolor.
                        </p>
                        <ul class="flex-1 mb-6 dark:text-gray-400">
                            <li class="flex mb-2 space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Aenean quis</span>
                            </li>
                            <li class="flex mb-2 space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Morbi semper</span>
                            </li>
                            <li class="flex mb-2 space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Tristique enim nec</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="inline-block px-5 py-3 font-semibold tracking-wider text-center rounded bg-blue-400 dark:bg-blue-400 dark:text-gray-900">Get
                            Started</button>
                    </div>
                </div>
                <div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
                    <div class="flex flex-col p-6 space-y-6 rounded shadow sm:p-8 dark:bg-blue-400 dark:text-gray-900">
                        <div class="space-y-2">
                            <h4 class="text-2xl font-bold">Pro</h4>
                            <span class="text-6xl font-bold">$24
                                <span class="text-sm tracking-wide">/month</span>
                            </span>
                        </div>
                        <p class="leading-relaxed">Morbi cursus ut sapien sit amet consectetur.</p>
                        <ul class="flex-1 space-y-2">
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Everything in Free</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Phasellus tellus</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Praesent faucibus</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Aenean et lectus blandit</span>
                            </li>
                        </ul>
                        <a rel="noopener noreferrer" href="#"
                            class="inline-block w-full px-5 py-3 font-bold tracking-wider text-center rounded dark:bg-gray-800 dark:text-blue-400">Get
                            Started</a>
                    </div>
                </div>
                <div class="w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
                    <div class="p-6 space-y-6 rounded shadow sm:p-8 dark:bg-gray-900">
                        <div class="space-y-2">
                            <h4 class="text-2xl font-bold">Team</h4>
                            <span class="text-6xl font-bold">$72
                                <span class="text-sm tracking-wide">/month</span>
                            </span>
                        </div>
                        <p class="leading-relaxed dark:text-gray-400">Phasellus ultrices bibendum nibh in vehicula.</p>
                        <ul class="space-y-2 dark:text-gray-400">
                            <li class="flex items-start space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Everything in Pro</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Fusce sem ligula</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Curabitur dictum</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Duis odio eros</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="flex-shrink-0 w-6 h-6 dark:text-blue-400">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Vivamus ut lectus ex</span>
                            </li>
                        </ul>
                        <a rel="noopener noreferrer" href="#"
                            class="inline-block w-full px-5 py-3 font-semibold tracking-wider text-center rounded bg-blue-400 dark:bg-blue-400 dark:text-gray-900">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100" id="team">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto sm:p-10">
            <p class="p-2 text-sm font-medium tracking-wider text-center uppercase">Development team</p>
            <h1 class="text-4xl font-bold leading-none text-center sm:text-5xl">The talented people behind the scenes
            </h1>
            <div class="flex flex-row flex-wrap-reverse justify-center mt-8">
                <div
                    class="flex flex-col justify-center w-full px-8 mx-6 my-12 text-center rounded-md md:w-96 lg:w-80 xl:w-64 dark:bg-gray-100 dark:text-gray-800">
                    <img alt=""
                        class="self-center flex-shrink-0 w-24 h-24 -mt-12 bg-center bg-cover rounded-full dark:bg-gray-500"
                        src="https://source.unsplash.com/100x100/?portrait?0">
                    <div class="flex-1 my-4">
                        <p class="text-xl font-semibold leading-snug">Ömer Kargın</p>
                        <p>Full Stack Developer</p>
                    </div>
                    <div class="flex items-center justify-center p-3 space-x-3 border-t-2">
                        <a rel="noopener noreferrer" href="#" title="Email"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                </path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Twitter"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="LinkedIn"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5">
                                <path
                                    d="M8.268 28h-5.805v-18.694h5.805zM5.362 6.756c-1.856 0-3.362-1.538-3.362-3.394s1.505-3.362 3.362-3.362 3.362 1.505 3.362 3.362c0 1.856-1.506 3.394-3.362 3.394zM29.994 28h-5.792v-9.1c0-2.169-0.044-4.95-3.018-4.95-3.018 0-3.481 2.356-3.481 4.794v9.256h-5.799v-18.694h5.567v2.55h0.081c0.775-1.469 2.668-3.019 5.492-3.019 5.875 0 6.955 3.869 6.955 8.894v10.269z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="GitHub"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5">
                                <path
                                    d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="flex flex-col justify-center w-full px-8 mx-6 my-12 text-center rounded-md md:w-96 lg:w-80 xl:w-64 dark:bg-gray-100 dark:text-gray-800">
                    <img alt=""
                        class="self-center flex-shrink-0 w-24 h-24 -mt-12 bg-center bg-cover rounded-full dark:bg-gray-500"
                        src="https://source.unsplash.com/100x100/?portrait?1">
                    <div class="flex-1 my-4">
                        <p class="text-xl font-semibold leading-snug">Hatice Davarcı</p>
                        <p>Visual Designer</p>
                    </div>
                    <div class="flex items-center justify-center p-3 space-x-3 border-t-2">
                        <a rel="noopener noreferrer" href="#" title="Email"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                </path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Twitter"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="LinkedIn"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5">
                                <path
                                    d="M8.268 28h-5.805v-18.694h5.805zM5.362 6.756c-1.856 0-3.362-1.538-3.362-3.394s1.505-3.362 3.362-3.362 3.362 1.505 3.362 3.362c0 1.856-1.506 3.394-3.362 3.394zM29.994 28h-5.792v-9.1c0-2.169-0.044-4.95-3.018-4.95-3.018 0-3.481 2.356-3.481 4.794v9.256h-5.799v-18.694h5.567v2.55h0.081c0.775-1.469 2.668-3.019 5.492-3.019 5.875 0 6.955 3.869 6.955 8.894v10.269z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="GitHub"
                            class="dark:text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5">
                                <path
                                    d="M16 0.396c-8.839 0-16 7.167-16 16 0 7.073 4.584 13.068 10.937 15.183 0.803 0.151 1.093-0.344 1.093-0.772 0-0.38-0.009-1.385-0.015-2.719-4.453 0.964-5.391-2.151-5.391-2.151-0.729-1.844-1.781-2.339-1.781-2.339-1.448-0.989 0.115-0.968 0.115-0.968 1.604 0.109 2.448 1.645 2.448 1.645 1.427 2.448 3.744 1.74 4.661 1.328 0.14-1.031 0.557-1.74 1.011-2.135-3.552-0.401-7.287-1.776-7.287-7.907 0-1.751 0.62-3.177 1.645-4.297-0.177-0.401-0.719-2.031 0.141-4.235 0 0 1.339-0.427 4.4 1.641 1.281-0.355 2.641-0.532 4-0.541 1.36 0.009 2.719 0.187 4 0.541 3.043-2.068 4.381-1.641 4.381-1.641 0.859 2.204 0.317 3.833 0.161 4.235 1.015 1.12 1.635 2.547 1.635 4.297 0 6.145-3.74 7.5-7.296 7.891 0.556 0.479 1.077 1.464 1.077 2.959 0 2.14-0.020 3.864-0.020 4.385 0 0.416 0.28 0.916 1.104 0.755 6.4-2.093 10.979-8.093 10.979-15.156 0-8.833-7.161-16-16-16z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full flex flex-wrap dark:bg-gray-900 bg-gray-100 justify-center" id="review">
        <div class="flex flex-col max-w-xl p-8 shadow-sm rounded-xl lg:p-12 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex flex-col items-center w-full">
                <form action="{{ route('rating') }}" method="POST">
                    @csrf
                    @method('POST')
                    <h2 class="text-3xl font-semibold text-center">Your opinion matters!</h2>
                    <div class="flex flex-col items-center py-6 space-y-3">
                        <span class="text-center">How was your experience?</span>
                        <div class="flex space-x-3">
                            <button type="button" class="rate1" name="btn1" value="1"
                                title="Rate 1 stars" aria-label="Rate 1 stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-10 h-10 dark:text-gray-600">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="rate2" title="Rate 2 stars" aria-label="Rate 2 stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-10 h-10 dark:text-gray-600">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="rate3" title="Rate 3 stars" aria-label="Rate 3 stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-10 h-10 dark:text-gray-600">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="rate4" title="Rate 4 stars" aria-label="Rate 4 stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-10 h-10 dark:text-gray-600">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="rate5" title="Rate 5 stars" aria-label="Rate 5 stars">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-10 h-10 dark:text-gray-600">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <input type="hidden" name="stars" value="1" id="result">
                        <textarea rows="3" name="text" placeholder="Message..."
                            class="p-4 rounded-md resize-none dark:text-gray-100 dark:bg-gray-900"></textarea>
                        <button type="submit"
                            class="py-4 my-8 font-semibold rounded-md dark:text-gray-900 text-gray-900 bg-blue-400 dark:bg-blue-400">Leave
                            feedback</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col max-w-xl p-8 shadow-sm rounded-xl lg:p-12 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex flex-col w-full">
                <h2 class="text-3xl font-semibold text-center">Customer reviews</h2>
                <div class="flex flex-wrap items-center mt-2 mb-1 space-x-2">
                    <div class="flex">
                        <button type="button" title="Rate 1 stars" aria-label="Rate 1 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 dark:text-yellow-500">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 2 stars" aria-label="Rate 2 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 dark:text-yellow-500">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 3 stars" aria-label="Rate 3 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 dark:text-yellow-500">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 4 stars" aria-label="Rate 4 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 dark:text-gray-600">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 5 stars" aria-label="Rate 5 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 dark:text-gray-600">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <span class="dark:text-gray-400">3 out of 5</span>
                </div>
                <p class="text-sm dark:text-gray-400">861 global ratings</p>
                <div class="flex flex-col mt-4">
                    <div class="flex items-center space-x-1">
                        <span class="flex-shrink-0 w-12 text-sm">5 star</span>
                        <div class="flex-1 h-4 overflow-hidden rounded-sm dark:bg-gray-700">
                            <div class="dark:bg-orange-300 h-4 w-5/6"></div>
                        </div>
                        <span class="flex-shrink-0 w-12 text-sm text-right">83%</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <span class="flex-shrink-0 w-12 text-sm">4 star</span>
                        <div class="flex-1 h-4 overflow-hidden rounded-sm dark:bg-gray-700">
                            <div class="dark:bg-orange-300 h-4 w-4/6"></div>
                        </div>
                        <span class="flex-shrink-0 w-12 text-sm text-right">67%</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <span class="flex-shrink-0 w-12 text-sm">3 star</span>
                        <div class="flex-1 h-4 overflow-hidden rounded-sm dark:bg-gray-700">
                            <div class="dark:bg-orange-300 h-4 w-3/6"></div>
                        </div>
                        <span class="flex-shrink-0 w-12 text-sm text-right">50%</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <span class="flex-shrink-0 w-12 text-sm">2 star</span>
                        <div class="flex-1 h-4 overflow-hidden rounded-sm dark:bg-gray-700">
                            <div class="dark:bg-orange-300 h-4 w-2/6"></div>
                        </div>
                        <span class="flex-shrink-0 w-12 text-sm text-right">33%</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <span class="flex-shrink-0 w-12 text-sm">1 star</span>
                        <div class="flex-1 h-4 overflow-hidden rounded-sm dark:bg-gray-700">
                            <div class="dark:bg-orange-300 h-4 w-1/6"></div>
                        </div>
                        <span class="flex-shrink-0 w-12 text-sm text-right">17%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col max-w-xl p-8 shadow-sm rounded-xl lg:p-12 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex justify-between p-4">
                <div class="flex space-x-4">
                    <div>
                        <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                            class="object-cover w-12 h-12 rounded-full dark:bg-gray-500">
                    </div>
                    <div>
                        <h4 class="font-bold">Leroy Jenkins</h4>
                        <span class="text-xs dark:text-gray-400">2 days ago</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2 dark:text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                        <path
                            d="M494,198.671a40.536,40.536,0,0,0-32.174-27.592L345.917,152.242,292.185,47.828a40.7,40.7,0,0,0-72.37,0L166.083,152.242,50.176,171.079a40.7,40.7,0,0,0-22.364,68.827l82.7,83.368-17.9,116.055a40.672,40.672,0,0,0,58.548,42.538L256,428.977l104.843,52.89a40.69,40.69,0,0,0,58.548-42.538l-17.9-116.055,82.7-83.368A40.538,40.538,0,0,0,494,198.671Zm-32.53,18.7L367.4,312.2l20.364,132.01a8.671,8.671,0,0,1-12.509,9.088L256,393.136,136.744,453.3a8.671,8.671,0,0,1-12.509-9.088L144.6,312.2,50.531,217.37a8.7,8.7,0,0,1,4.778-14.706L187.15,181.238,248.269,62.471a8.694,8.694,0,0,1,15.462,0L324.85,181.238l131.841,21.426A8.7,8.7,0,0,1,461.469,217.37Z">
                        </path>
                    </svg>
                    <span class="text-xl font-bold">4.5</span>
                </div>
            </div>
            <div class="p-4 space-y-2 text-sm dark:text-gray-400">
                <p>Vivamus sit amet turpis leo. Praesent varius eleifend elit, eu dictum lectus consequat vitae. Etiam
                    ut dolor id justo fringilla finibus.</p>
                <p>Donec eget ultricies diam, eu molestie arcu. Etiam nec lacus eu mauris cursus venenatis. Maecenas
                    gravida urna vitae accumsan feugiat. Vestibulum commodo, ante sit urna purus rutrum sem.</p>
            </div>
        </div>
    </section>
    <section class="p-6 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
        <div class="container p-4 mx-auto text-center">
            <h2 class="text-4xl font-bold">Trusted by the industry leaders</h2>
        </div>
        <div class="container flex flex-wrap justify-center mx-auto dark:text-gray-400">
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M0.063 24.026c0.094-0.156 0.245-0.167 0.464-0.031 4.844 2.818 10.125 4.224 15.823 4.224 3.802 0 7.557-0.708 11.266-2.125l0.417-0.188c0.188-0.083 0.313-0.135 0.391-0.172 0.302-0.12 0.521-0.063 0.703 0.172 0.161 0.229 0.12 0.448-0.161 0.641-0.339 0.25-0.802 0.547-1.339 0.87-1.661 0.99-3.521 1.755-5.583 2.302-2.036 0.542-4.057 0.813-6.021 0.813-3.021 0-5.88-0.526-8.578-1.583-2.693-1.057-5.094-2.547-7.24-4.464-0.135-0.099-0.203-0.203-0.203-0.297 0-0.063 0.026-0.12 0.068-0.172zM8.813 15.734c0-1.339 0.328-2.484 0.99-3.432s1.563-1.667 2.724-2.156c1.057-0.448 2.339-0.766 3.88-0.958 0.521-0.063 1.38-0.141 2.563-0.234v-0.49c0-1.245-0.141-2.078-0.401-2.5-0.406-0.578-1.042-0.87-1.922-0.87h-0.24c-0.641 0.063-1.198 0.26-1.661 0.615-0.469 0.359-0.771 0.839-0.901 1.464-0.083 0.396-0.276 0.62-0.583 0.677l-3.359-0.422c-0.328-0.078-0.495-0.24-0.495-0.516 0-0.063 0.010-0.12 0.031-0.203 0.328-1.719 1.141-3 2.427-3.839 1.297-0.823 2.797-1.302 4.516-1.401h0.724c2.198 0 3.943 0.578 5.182 1.719 0.182 0.203 0.359 0.401 0.542 0.641 0.156 0.219 0.297 0.422 0.375 0.599 0.099 0.182 0.203 0.443 0.26 0.76 0.078 0.339 0.141 0.563 0.182 0.682 0.036 0.141 0.083 0.401 0.099 0.818s0.026 0.661 0.026 0.74v7.042c0 0.5 0.083 0.958 0.219 1.38 0.141 0.417 0.281 0.719 0.422 0.896l0.682 0.901c0.12 0.182 0.177 0.339 0.177 0.479 0 0.161-0.078 0.302-0.24 0.417-1.599 1.401-2.479 2.161-2.615 2.281-0.219 0.182-0.5 0.203-0.839 0.063-0.26-0.224-0.5-0.443-0.703-0.661l-0.411-0.464c-0.083-0.099-0.224-0.281-0.427-0.563l-0.396-0.578c-1.083 1.182-2.141 1.922-3.203 2.219-0.656 0.203-1.458 0.302-2.438 0.302-1.479 0-2.719-0.453-3.682-1.375-0.958-0.922-1.438-2.224-1.438-3.922l-0.068-0.099zM13.818 15.151c0 0.755 0.188 1.359 0.568 1.818 0.38 0.453 0.901 0.682 1.536 0.682 0.063 0 0.146-0.005 0.26-0.026 0.12-0.021 0.182-0.031 0.224-0.031 0.818-0.214 1.438-0.734 1.896-1.568 0.224-0.375 0.38-0.776 0.484-1.214 0.12-0.427 0.156-0.786 0.177-1.068 0.021-0.26 0.021-0.719 0.021-1.339v-0.719c-1.12 0-1.979 0.078-2.563 0.24-1.698 0.479-2.557 1.557-2.557 3.24l-0.047-0.026zM26.031 24.521c0.042-0.078 0.104-0.146 0.177-0.224 0.484-0.328 0.953-0.547 1.401-0.667 0.734-0.177 1.453-0.297 2.151-0.323 0.188-0.016 0.37 0 0.547 0.042 0.865 0.078 1.396 0.224 1.563 0.438 0.083 0.12 0.12 0.307 0.12 0.521v0.203c0 0.677-0.188 1.479-0.557 2.396-0.37 0.922-0.885 1.667-1.536 2.24-0.099 0.083-0.188 0.12-0.266 0.12-0.042 0-0.078 0-0.12-0.016-0.12-0.057-0.141-0.156-0.083-0.318 0.719-1.682 1.073-2.859 1.073-3.521 0-0.198-0.042-0.359-0.115-0.458-0.193-0.219-0.734-0.344-1.635-0.344-0.323 0-0.708 0.021-1.156 0.063-0.484 0.063-0.938 0.12-1.333 0.182-0.12 0-0.198-0.021-0.24-0.063-0.042-0.036-0.052-0.063-0.031-0.099 0-0.026 0.010-0.042 0.031-0.089v-0.078z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M9.438 31.401c-0.63-0.422-1.193-0.938-1.656-1.536-0.516-0.615-0.984-1.266-1.422-1.938-1.021-1.495-1.818-3.125-2.375-4.849-0.667-2-0.99-3.917-0.99-5.792 0-2.094 0.453-3.922 1.339-5.458 0.651-1.198 1.625-2.203 2.797-2.906 1.135-0.708 2.453-1.094 3.786-1.12 0.469 0 0.974 0.068 1.51 0.198 0.385 0.109 0.854 0.281 1.427 0.495 0.729 0.281 1.13 0.453 1.266 0.495 0.427 0.156 0.786 0.224 1.068 0.224 0.214 0 0.516-0.068 0.859-0.172 0.193-0.068 0.557-0.188 1.078-0.411 0.516-0.188 0.922-0.349 1.245-0.469 0.495-0.146 0.974-0.281 1.401-0.349 0.521-0.078 1.036-0.104 1.531-0.063 0.948 0.063 1.813 0.266 2.589 0.557 1.359 0.547 2.458 1.401 3.276 2.615-0.349 0.214-0.667 0.458-0.969 0.734-0.651 0.573-1.198 1.25-1.641 2.005-0.573 1.026-0.865 2.188-0.859 3.359 0.021 1.443 0.391 2.714 1.12 3.813 0.521 0.802 1.208 1.484 2.047 2.047 0.417 0.281 0.776 0.474 1.12 0.604-0.161 0.5-0.333 0.984-0.536 1.464-0.464 1.078-1.016 2.109-1.667 3.083-0.578 0.839-1.031 1.464-1.375 1.88-0.536 0.635-1.052 1.12-1.573 1.458-0.573 0.38-1.25 0.583-1.938 0.583-0.469 0.021-0.932-0.042-1.38-0.167-0.385-0.13-0.766-0.271-1.141-0.432-0.391-0.177-0.792-0.333-1.203-0.453-0.51-0.135-1.031-0.198-1.552-0.198-0.536 0-1.057 0.068-1.547 0.193-0.417 0.12-0.818 0.26-1.214 0.432-0.557 0.234-0.927 0.391-1.141 0.458-0.427 0.125-0.87 0.203-1.318 0.229-0.693 0-1.339-0.198-1.979-0.599zM18.578 6.786c-0.906 0.453-1.771 0.646-2.63 0.583-0.135-0.865 0-1.75 0.359-2.719 0.318-0.828 0.745-1.573 1.333-2.24 0.609-0.693 1.344-1.266 2.172-1.677 0.88-0.453 1.719-0.698 2.521-0.734 0.104 0.906 0 1.797-0.333 2.76-0.307 0.854-0.76 1.641-1.333 2.344-0.583 0.693-1.302 1.266-2.115 1.682z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M6.427 23.031c-0.911 0-1.739-0.744-1.739-1.651s0.744-1.656 1.739-1.656c1 0 1.751 0.745 1.751 1.656 0 0.907-0.833 1.651-1.745 1.651zM27.776 14.016c-0.183-1.323-1-2.401-2.079-3.224l-0.421-0.333-0.339 0.411c-0.656 0.745-0.921 2.068-0.839 3.057 0.079 0.751 0.317 1.495 0.74 2.073-0.344 0.177-0.76 0.333-1.084 0.505-0.76 0.249-1.5 0.333-2.239 0.333h-21.385l-0.084 0.489c-0.156 1.579 0.084 3.229 0.751 4.724l0.328 0.579v0.077c2 3.313 5.557 4.803 9.437 4.803 7.459 0 13.573-3.224 16.473-10.177 1.901 0.083 3.819-0.412 4.719-2.235l0.24-0.411-0.396-0.251c-1.083-0.661-2.563-0.749-3.801-0.416l-0.027 0.005zM17.099 12.693h-3.239v3.228h3.239zM17.099 8.636h-3.239v3.228h3.239zM17.099 4.495h-3.239v3.229h3.239zM21.057 12.693h-3.219v3.228h3.229v-3.228zM9.063 12.693h-3.219v3.228h3.229v-3.228zM13.099 12.693h-3.197v3.228h3.219v-3.228zM5.063 12.693h-3.199v3.228h3.24v-3.228zM13.099 8.636h-3.197v3.228h3.219v-3.224zM9.041 8.636h-3.192v3.228h3.219v-3.224l-0.021-0.004z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M31.907 3.921c-9.552-3.395-19.933-3.676-29.652-0.801-1.629 0.391-2.609 2.052-2.161 3.667 0.532 2.135 1.308 4.588 2.24 6.812 0.016 0.052 0.041 0.027 0.041-0.025-0.135-1.043 0.667-2.36 2.24-2.839 7.557-2.407 15.692-2.297 23.188 0.307 1.145 0.396 2.427-0.229 2.796-1.416 0.932-3 1.308-5.037 1.401-5.547 0.016-0.095-0.068-0.131-0.093-0.157zM8.864 10.521c-1.145 0.239-2.728 0.615-3.916 1.009-2.375 0.819-2.265 3.709-1 4.631 0.093-0.536 0.667-1.265 1.307-1.511 2.371-0.932 4.917-1.489 7.491-1.719-1.308-0.531-2.584-1.292-3.865-2.411zM27.771 16.307c-6.891-3.239-14.801-3.552-21.932-0.869-1.131 0.427-1.839 1.803-1.131 3.109 1.235 2.235 2.641 4.375 4.199 6.401-0.224-0.776 0.172-2.213 1.692-2.683 4.204-1.292 8.615-0.744 11.547 0.443 0.828 0.333 2 0.131 2.657-0.853 1.119-1.724 2.14-3.516 3.052-5.36 0.041-0.083 0-0.145-0.084-0.188zM20.959 26.667c-1.229-0.62-2.355-1.432-3.333-2.401-0.453-0.453-1.12-1.104-1.823-1.88-1.605 0-3.163 0.161-4.829 0.693-1.547 0.484-1.692 2.271-1.015 3.203 1.145 1.427 1.948 2.197 3.229 3.521 1.411 1.385 3.667 1.395 5.093 0.025 1-1 1.615-1.667 2.745-2.948 0.067-0.068 0.041-0.187-0.068-0.213z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M29.3 17.425l2.665-2.995h-3.12l-1.085 1.24-1.125-1.24h-5.935v-0.8h2.805v-2.405h-7.56v3.775h-0.025c-0.48-0.55-1.075-0.74-1.77-0.74-1.42 0-2.49 0.97-2.865 2.245-0.9-2.97-4.87-2.88-6.095-0.7v-1.21h-2.74v-1.31h3v-2.055h-5.45v9.22h2.45v-3.875h2.445c-0.075 0.285-0.115 0.59-0.115 0.91 0 3.655 5.13 4.57 6.51 1.185h-2.1c-0.735 1.045-2.29 0.445-2.29-0.73h4.275c0.185 1.525 1.37 2.845 3.005 2.845 0.705 0 1.35-0.345 1.745-0.93h0.025v0.595h10.61l1.105-1.25 1.115 1.25h3.22zM6.965 16.595c0.305-1.315 2.085-1.28 2.325 0zM14.635 19.040c-1.73 0-1.7-3.14 0-3.14 1.63 0 1.725 3.14 0 3.14zM23.025 19.995h-4.72v-8.325h4.75v1.51h-2.805v1.695h2.775v1.405h-2.805v2.235h2.805zM20.73 18.005v-1.22h2.805v-2.2l2.535 2.85-2.535 2.85v-2.28zM27.66 18.52l-1.305 1.475h-1.905l2.28-2.56-2.28-2.56h1.985l1.33 1.465 1.28-1.465h1.925l-2.27 2.55 2.3 2.57h-2.025z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M9.427 14.401v5.167h-1.646v-6.495h3.396c1.443 0 1.932 1.021 1.932 1.943v4.552h-1.641v-4.542c0-0.391-0.198-0.625-0.682-0.625zM20.615 14.323c-0.568 0-1 0.286-1.182 0.682-0.104 0.219-0.156 0.458-0.156 0.703h2.531c-0.031-0.703-0.354-1.385-1.193-1.385zM19.276 16.828c0 0.839 0.521 1.464 1.458 1.464 0.724 0 1.083-0.203 1.505-0.625l1.016 0.974c-0.646 0.641-1.333 1.031-2.536 1.031-1.573 0-3.078-0.859-3.078-3.359 0-2.141 1.313-3.349 3.042-3.349 1.755 0 2.766 1.417 2.766 3.271v0.589h-4.172zM16.25 19.557c-1.339 0-1.906-0.932-1.906-1.854v-6.401h1.641v1.771h1.234v1.328h-1.234v3.198c0 0.38 0.177 0.589 0.568 0.589h0.667v1.37zM6.318 12.177h-1.656v-1.578h1.656zM6.323 19.635c-1.24-0.12-1.661-0.87-1.661-1.74v-4.823h1.656v6.568zM26.063 19.495c-1.24-0.12-1.656-0.87-1.656-1.734v-7.38h1.656v9.12zM31.859 11.448c-1.5-7.328-15.724-7.792-24.885-2.214v0.62c9.151-4.708 22.141-4.677 23.323 2.063 0.391 2.234-0.865 4.557-3.109 5.896v1.75c2.703-0.99 5.474-4.198 4.672-8.115zM15.198 24.26c-6.323 0.583-12.917-0.339-13.839-5.276-0.448-2.438 0.667-5.021 2.13-6.625v-0.854c-2.646 2.323-4.083 5.266-3.255 8.74 1.057 4.458 6.714 6.984 15.344 6.146 3.417-0.333 7.891-1.432 10.995-3.141v-2.422c-2.818 1.682-7.49 3.073-11.375 3.432zM27.979 10.865c0-0.078-0.052-0.104-0.156-0.104h-0.104v0.229h0.104c0.104 0 0.156-0.031 0.156-0.109zM28.141 11.432h-0.125c-0.010 0-0.021-0.005-0.026-0.016l-0.167-0.286c-0.005-0.005-0.016-0.010-0.026-0.010h-0.073v0.281c0 0.016-0.016 0.031-0.031 0.031h-0.109c-0.016 0-0.031-0.016-0.031-0.031v-0.714c0-0.036 0.021-0.057 0.052-0.063 0.068-0.005 0.135-0.005 0.203-0.005 0.203 0 0.328 0.057 0.328 0.25v0.010c0 0.12-0.063 0.182-0.151 0.214l0.172 0.292c0 0.005 0.005 0.016 0.005 0.021 0.005 0.010-0.005 0.026-0.021 0.026zM27.849 10.484c-0.302 0-0.547 0.245-0.547 0.547 0.005 0.302 0.25 0.547 0.552 0.547 0.297 0 0.542-0.245 0.542-0.542 0-0.302-0.245-0.552-0.547-0.552zM27.849 11.693c-0.365 0-0.661-0.292-0.661-0.656s0.297-0.661 0.661-0.661c0.359 0 0.661 0.297 0.661 0.661s-0.302 0.656-0.661 0.656z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M15.125 24.041c0.077 0.063 0.161 0.131 0.239 0.193-1.567 1.047-3.452 1.651-5.473 1.651-5.464 0-9.891-4.421-9.891-9.885 0-5.459 4.427-9.885 9.885-9.885 2.027 0 3.912 0.604 5.475 1.645-0.079 0.068-0.157 0.136-0.22 0.204-2.337 2.020-3.681 4.953-3.681 8.036s1.339 6.016 3.667 8.041zM22.115 6.115c-2.032 0-3.912 0.604-5.475 1.645 0.079 0.068 0.157 0.136 0.22 0.204 2.337 2.020 3.681 4.953 3.681 8.036 0 3.079-1.339 6.011-3.667 8.041-0.077 0.063-0.161 0.131-0.239 0.193 1.567 1.047 3.447 1.651 5.473 1.651 5.464 0 9.891-4.421 9.891-9.885 0-5.459-4.427-9.885-9.885-9.885zM16 8.235c-0.131 0.099-0.251 0.197-0.375 0.307-2.084 1.813-3.401 4.48-3.401 7.459s1.317 5.645 3.401 7.459c0.12 0.109 0.249 0.213 0.375 0.312 0.131-0.099 0.251-0.203 0.375-0.312 2.084-1.813 3.401-4.48 3.401-7.459s-1.317-5.645-3.401-7.459c-0.12-0.109-0.244-0.208-0.375-0.307z">
                    </path>
                </svg>
            </div>
            <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-14 h-14">
                    <path
                        d="M7.188 0.005l6.333 17.948v-0.010l0.5 1.411c2.786 7.88 4.281 12.104 4.286 12.109 0.005 0 0.427 0.026 0.938 0.057 1.542 0.063 3.453 0.24 4.901 0.411 0.333 0.042 0.62 0.052 0.641 0.042l-6.859-19.453-3.234-9.135c-0.609-1.734-1.13-3.208-1.156-3.266l-0.042-0.12h-6.302zM18.531 0.016l-0.016 7.073-0.010 7.078-0.583-1.646-0.75 15.745c0.74 2.089 1.135 3.203 1.141 3.208s0.427 0.036 0.932 0.057c1.547 0.068 3.453 0.24 4.906 0.417 0.333 0.036 0.625 0.052 0.641 0.036 0.021-0.010 0.026-7.224 0.026-16.010l-0.010-15.958zM7.188 0.005v15.984c0 8.792 0.010 15.995 0.021 16.005s0.552-0.042 1.208-0.115c0.651-0.083 1.557-0.177 2.010-0.214 0.693-0.068 2.76-0.203 3-0.203 0.068 0 0.073-0.359 0.083-6.771l0.010-6.776 0.505 1.417 0.177 0.5 0.76-15.734-0.255-0.729-1.214-3.365z">
                    </path>
                </svg>
            </div>
        </div>
    </section>
    <section class="w-full p-6 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100" id="contact">
        <div
            class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex flex-col justify-between">
                <div class="space-y-2">
                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
                    <div class="dark:text-gray-400">Vivamus in nisl metus? Phasellus.</div>
                </div>
                <img src="{{ asset('images/doodle.svg') }}" alt="" class="p-6 h-52 md:h-64">
            </div>
            <form action="{{ route('contact') }}" method="post">
                @csrf
                @method('POST')
                <div>
                    <label for="name" class="text-sm font-bold">Full name</label>
                    <input id="name" name="name" type="text" placeholder=""
                        class="w-full p-3 rounded dark:bg-gray-800">
                </div>
                <div>
                    <label for="email" class="text-sm font-bold">Email</label>
                    <input id="email" name="email" type="email" class="w-full p-3 rounded dark:bg-gray-800">
                </div>
                <div>
                    <label for="message" class="text-sm font-bold">Message</label>
                    <textarea id="message" name="message" rows="3" class="w-full p-3 rounded dark:bg-gray-800"></textarea>
                </div>
                <button type="submit"
                    class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded bg-blue-400 dark:bg-blue-400 dark:text-gray-900">Send
                    Message</button>
            </form>
        </div>
    </section>

    <footer class="px-4 divide-y bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
        <div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
            <div class="lg:w-1/3 flex">
                <img class="logo2" src="{{ asset('images/todo.png') }}" alt="ToDo App">
                <a rel="noopener noreferrer" href="#"
                    class="flex justify-center space-x-3 lg:justify-start text-2xl dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400">
                    To Do App
                </a>
            </div>
            <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4">
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Product</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Features</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Integrations</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Pricing</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Company</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Privacy</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Terms of Service</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="uppercase dark:text-gray-50">Developers</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Public API</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Documentation</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer"
                                class="dark:text-gray-100 text-gray-900 hover:text-blue-400 hover:dark:text-blue-400"
                                href="#">Guides</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <div class="uppercase dark:text-gray-50">Social media</div>
                    <div class="flex justify-start space-x-3">
                        <a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 text-sm text-center hover:text-blue-400 hover:dark:text-blue-400 dark:text-gray-400">©
            {{ date('Y') }} Vendetta Co. All rights
            reserved.
        </div>
    </footer>



    @vite(['resources/js/app.js', 'public/js/script.js', 'public/js/theme.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
</body>

</html>
