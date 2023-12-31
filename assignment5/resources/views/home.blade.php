@extends("layouts")
@section("content")


                <div class="bg-grey-50" id="about">
                    <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
                        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
                            <h2
                                class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                Who am I?
                            </h2>
                            <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                                I'm Christy Smith, a Web Designer & Photographer
                            </h4>
                            <p class="pt-6 font-body leading-relaxed text-grey-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </p>
                            <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                                <div class="flex items-center justify-center sm:justify-start">
                                    <p class="font-body text-lg font-semibold uppercase text-grey-20">
                                        Connect with me
                                    </p>
                                    <div class="hidden sm:block">
                                        <i class="bx bx-chevron-right text-2xl text-primary"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                    <a href="/">
                                        <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                                    </a>
                                    <a href="/" class="pl-4">
                                        <i class="bx bxl-twitter text-2xl text-primary hover:text-yellow"></i>
                                    </a>
                                    <a href="/" class="pl-4">
                                        <i class="bx bxl-dribbble text-2xl text-primary hover:text-yellow"></i>
                                    </a>
                                    <a href="/" class="pl-4">
                                        <i class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                                    </a>
                                    <a href="/" class="pl-4">
                                        <i class="bx bxl-instagram text-2xl text-primary hover:text-yellow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
                            <div>
                                <div class="flex items-end justify-between">
                                    <h4 class="font-body font-semibold uppercase text-black">
                                        HTML & CSS
                                    </h4>
                                    <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
                                </div>
                                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                    <div class="h-3 rounded-full bg-primary" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flex items-end justify-between">
                                    <h4 class="font-body font-semibold uppercase text-black">Python</h4>
                                    <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
                                </div>
                                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                    <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flex items-end justify-between">
                                    <h4 class="font-body font-semibold uppercase text-black">
                                        Javascript
                                    </h4>
                                    <h3 class="font-body text-3xl font-bold text-primary">98%</h3>
                                </div>
                                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                    <div class="h-3 rounded-full bg-primary" style="width: 98%"></div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flex items-end justify-between">
                                    <h4 class="font-body font-semibold uppercase text-black">Figma</h4>
                                    <h3 class="font-body text-3xl font-bold text-primary">91%</h3>
                                </div>
                                <div class="mt-2 h-3 w-full rounded-full bg-lila">
                                    <div class="h-3 rounded-full bg-primary" style="width: 91%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Services section --}}

                <div class="container py-16 md:py-20" id="services">
                    <h2
                        class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                        Here's what I'm good at
                    </h2>
                    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                        These are the services Ioffer
                    </h3>

                    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-development-white.svg" alt="development icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-development-black.svg" alt="development icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    WEB DEVELOPMENT
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-content-white.svg" alt="content marketing icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-content-black.svg" alt="content marketing icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    Technical Writing
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-mobile-white.svg" alt="Mobile Application icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-mobile-black.svg" alt="Mobile Application icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    Mobile Development
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-email-white.svg" alt="Email Marketing icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-email-black.svg" alt="Email Marketing icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    Email Development
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-design-white.svg" alt="Theme Design icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-design-black.svg" alt="Theme Design icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    Graphic Design
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div class="hidden group-hover:block">
                                    <img src="/assets/img/icon-graphics-white.svg" alt="Graphic Design icon" />
                                </div>
                                <div class="block group-hover:hidden">
                                    <img src="/assets/img/icon-graphics-black.svg" alt="Graphic Design icon" />
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                                    Web Design
                                </h3>
                                <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


        {{-- Clients --}}

                <div class="bg-grey-50" id="clients">
                    <div class="container py-16 md:py-20">
                        <div class="mx-auto w-full sm:w-3/4 lg:w-full">
                            <h2
                                class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                                My latest clients
                            </h2>
                            <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                                <span class="m-8 block">
                                    <img src="/assets/img/logo-coca-cola.svg" alt="client logo"
                                        class="mx-auto block h-12 w-auto" />
                                </span>
                                <span class="m-8 block">
                                    <img src="/assets/img/logo-apple.svg" alt="client logo"
                                        class="mx-auto block h-12 w-auto" />
                                </span>

                                <span class="m-8 block">
                                    <img src="/assets/img/logo-netflix.svg" alt="client logo"
                                        class="mx-auto block h-12 w-auto" />
                                </span>

                                <span class="m-8 block">
                                    <img src="/assets/img/logo-amazon.svg" alt="client logo"
                                        class="mx-auto block h-12 w-auto" />
                                </span>

                                <span class="m-8 block">
                                    <img src="/assets/img/logo-stripe.svg" alt="client logo"
                                        class="mx-auto block h-12 w-auto" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- counter section --}}

                <div class="bg-cover bg-top bg-no-repeat pb-16 md:py-16 lg:py-24"
                    style="background-image: url(/assets/img/experience-figure.png)" id="statistics">
                    <div class="container">
                        <div class="mx-auto w-5/6 bg-white py-16 shadow md:w-11/12 lg:py-20 xl:py-24 2xl:w-full">
                            <div class="grid grid-cols-2 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
                                <div
                                    class="flex flex-col items-center justify-center text-center md:flex-row md:text-left">
                                    <div>
                                        <img src="/assets/img/icon-project.svg" class="mx-auto h-12 w-auto md:h-20"
                                            alt="icon project" />
                                    </div>
                                    <div class="pt-5 md:pl-5 md:pt-0">
                                        <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                            12
                                        </h1>
                                        <h4
                                            class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                            Finished Projects
                                        </h4>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col items-center justify-center text-center md:flex-row md:text-left">
                                    <div>
                                        <img src="/assets/img/icon-award.svg" class="mx-auto h-12 w-auto md:h-20"
                                            alt="icon award" />
                                    </div>
                                    <div class="pt-5 md:pl-5 md:pt-0">
                                        <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                            3
                                        </h1>
                                        <h4
                                            class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                            Awards Won
                                        </h4>
                                    </div>
                                </div>

                                <div
                                    class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0">
                                    <div>
                                        <img src="/assets/img/icon-happy.svg" class="mx-auto h-12 w-auto md:h-20"
                                            alt="icon happy clients" />
                                    </div>
                                    <div class="pt-5 md:pl-5 md:pt-0">
                                        <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                            8
                                        </h1>
                                        <h4
                                            class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                            Happy Clients
                                        </h4>
                                    </div>
                                </div>

                                <div
                                    class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0">
                                    <div>
                                        <img src="/assets/img/icon-puzzle.svg" class="mx-auto h-12 w-auto md:h-20"
                                            alt="icon puzzle" />
                                    </div>
                                    <div class="pt-5 md:pl-5 md:pt-0">
                                        <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                            99
                                        </h1>
                                        <h4
                                            class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                            Bugs Fixed
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Posts section --}}

                <div class="bg-grey-50" id="blog">
                    <div class="container py-16 md:py-20">
                        <h2
                            class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                            I also like to write
                        </h2>
                        <h4
                            class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                            Check out my latest posts!
                        </h4>
                        <div
                            class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
                            <a href="/post" class="shadow">
                                <div style="background-image: url(/assets/img/post-01.png)"
                                    class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                    <span
                                        class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                    <span
                                        class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">Read
                                        More</span>
                                </div>
                                <div class="bg-white py-6 px-5 xl:py-8">
                                    <span class="block font-body text-lg font-semibold text-black">How to become a
                                        frontend developer</span>
                                    <span class="block pt-2 font-body text-grey-20">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                </div>
                            </a>
                            <a href="/post" class="shadow">
                                <div style="background-image: url(/assets/img/post-02.png)"
                                    class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                    <span
                                        class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                    <span
                                        class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">Read
                                        More</span>
                                </div>
                                <div class="bg-white py-6 px-5 xl:py-8">
                                    <span class="block font-body text-lg font-semibold text-black">My personal
                                        productivity system</span>
                                    <span class="block pt-2 font-body text-grey-20">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                </div>
                            </a>
                            <a href="/post" class="shadow">
                                <div style="background-image: url(/assets/img/post-03.png)"
                                    class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                                    <span
                                        class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                                    <span
                                        class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">Read
                                        More</span>
                                </div>
                                <div class="bg-white py-6 px-5 xl:py-8">
                                    <span class="block font-body text-lg font-semibold text-black">My year in review
                                        2020</span>
                                    <span class="block pt-2 font-body text-grey-20">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Contact section --}}


                <div class="container py-16 md:py-20" id="contact">
                    <h2
                        class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                        Here's a contact form
                    </h2>
                    <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                        Have Any Questions?
                    </h4>
                    <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
                        <p class="font-body text-grey-10">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit
                            condimentum turpis nisl sem, viverra habitasse urna ante lobortis
                            fermentum accumsan. Viverra habitasse urna ante lobortis fermentum
                            accumsan.
                        </p>
                    </div>
                    <form class="mx-auto w-full pt-10 sm:w-3/4">
                        <div class="flex flex-col md:flex-row">
                            <input
                                class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
                                placeholder="Name" type="text" id="name" />
                            <input
                                class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
                                placeholder="Email" type="text" id="email" />
                        </div>
                        <textarea class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8" placeholder="Message"
                            id="message" cols="30" rows="10"></textarea>
                        <button
                            class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                            Send
                            <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                        </button>
                    </form>
                    <div class="flex flex-col pt-16 lg:flex-row">
                        <div
                            class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
                            <div class="flex items-center">
                                <i class="bx bx-phone text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Phone
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                (+881) 111 222 333
                            </p>
                        </div>
                        <div
                            class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
                            <div class="flex items-center">
                                <i class="bx bx-envelope text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Email
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                name@mydomain.com
                            </p>
                        </div>
                        <div
                            class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
                            <div class="flex items-center">
                                <i class="bx bx-map text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Address
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                123 New York D Block 1100, 2011 USA
                            </p>
                        </div>
                    </div>
                </div>

@endsection()
