<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Homepage | Atom Template</title>

    <meta property="og:title" content="Homepage | Atom Template" />

    <meta property="og:locale" content="en_US" />

    <link rel="canonical" href="//" />

    <meta property="og:url" content="//" />

    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

    <meta name="theme-color" content="#5540af" />

    <meta property="og:site_name" content="Atom Template" />

    <meta property="og:image" content="//assets/img/social.jpg" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:site" content="@tailwindmade" />

    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />

    <link as="style"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="preload" />

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')

    <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>


<body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">

    <div id="main" class="relative">
        <div x-data="{
            triggerNavItem(id) {
                    $scroll(id)
                },
                triggerMobileNavItem(id) {
                    mobileMenu = false;
                    this.triggerNavItem(id)
                }
        }">
            <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
                <div class="container flex items-center justify-between">
                    <div>
                        <a href="/">
                            <img src="/assets/img/logo.svg" class="w-24 lg:w-48" alt="logo image" />
                        </a>
                    </div>
                    <div class="hidden lg:block">
                        <ul class="flex items-center">

                            <li class="group pl-6">

                                <a href="{{ route('home') }}"
                                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Home</span>

                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                            </li>

                            <li class="group pl-6">

                                <a href="{{ route('projects') }}"
                                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Projects</span>

                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                            </li>

                            <li class="group pl-6">

                                <a href="{{ route('experience') }}"
                                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Experiences</span>

                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                            </li>

                        </ul>
                    </div>
                    <div class="block lg:hidden">
                        <button @click="mobileMenu = true">
                            <i class="bx bx-menu text-4xl text-white"></i>
                        </button>
                    </div>
                </div>
            </div>



            <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
                :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
                    <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                        <img src="/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
                    </button>

                    <ul class="mt-8 flex flex-col">

                        <li class="py-2">

                            <a href="{{ route('home') }}"
                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Home</span>

                        </li>

                        <li class="py-2">

                            <a href="{{ route('projects') }}"
                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Projects</span>

                        </li>

                        <li class="py-2">

                            <a href="{{ route('experience') }}"
                                class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Experiences</span>

                        </li>



                    </ul>
                </div>
            </div>

            <div class="relative bg-cover bg-center bg-no-repeat py-8"
            style="background-image: url(/assets/img/bg-hero.jpg)">
            <div
                class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat">
            </div>

            <div class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48">
                <div class="flex flex-col items-center justify-center lg:flex-row">
                    <div class="rounded-full border-8 border-primary shadow-xl">
                        <img src="/assets/img/blog-author.jpg" class="h-48 rounded-full sm:h-56"
                            alt="author" />
                    </div>
                    <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                        <h1
                            class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                            Hello I'm Christy Smith!
                        </h1>
                        <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                            <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                                <p class="font-body text-lg uppercase text-white">Let's connect</p>
                                <div class="hidden sm:block">
                                    <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                                </div>
                            </div>
                            <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                <a href="/">
                                    <i
                                        class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                                </a>
                                <a href="/" class="pl-4">
                                    <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            @yield('content')





            <div class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96"
                style="background-image: url(/assets/img/map.png)"></div>

            <div class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
                style="background-image: url(/assets/img/bg-cta.jpg)">
                <div class="container relative z-30">
                    <h3
                        class="text-center font-header text-3xl uppercase leading-tight tracking-wide text-white sm:text-4xl lg:text-5xl">
                        Keep <span class="font-bold">up-to-date</span> <br />
                        with what I'm up to
                    </h3>
                    <form class="mt-6 flex flex-col justify-center sm:flex-row">
                        <input class="w-full rounded px-4 py-3 font-body text-black sm:w-2/5 sm:py-4 lg:w-1/3"
                            type="text" id="email" placeholder="Give me your Email" />
                        <button
                            class="mt-2 rounded bg-yellow px-8 py-3 font-body text-base font-bold uppercase text-primary transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg">
                            Join the club
                        </button>
                    </form>
                </div>
            </div>


            <div class="bg-primary">
                <div class="container flex flex-col justify-between py-6 sm:flex-row">
                    <p class="text-center font-body text-white md:text-left">
                        © Copyright 2022. All right reserved, ATOM.
                    </p>
                    <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
                        <a href="/">
                            <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                        </a>
                        <a href="/" class="pl-4">
                            <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <script src="/assets/js/main.js"></script>


</body>

</html>
