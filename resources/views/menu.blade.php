<x-guest-layout>

    <body class="font-['Poppins']">
        <!-- Start of Navbar -->
        <div class="w-full fixed top-0 left-0 right-0 z-50">
            <nav class="w-full px-5 lg:px-10 lg:max-w-[1200px] py-5 mx-auto flex items-center justify-between">
                <h1 class="text-xl font-bold">Tomali Cafe & Resto</h1>
                <ul class="flex items-center gap-3">

                    <a href={{url("/")}}>
                        <li class="px-3 py-1 rounded-full text-black border-gray-300 font-bold">
                            Home
                        </li>
                    </a>
                    <a href={{url("menu")}}>
                        <li class="px-3 py-1 rounded-full text-black border-gray-300 font-bold">
                            Menus
                        </li>
                    </a>
                    @if(Route::has("login"))
                    @auth
                    <a href={{url("orders")}}>
                        <li class="px-3 py-1 rounded-full border-2 border-gray-300 font-bold">
                            Orders
                        </li>
                    </a>
                    <li class="px-3 py-1 rounded-full border-2 bg-yellow-300 font-bold">
                        Reports
                    </li>
                    <x-app-layout></x-app-layout>

                    @else
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                    </li>
                    @endauth
                    @endif
                </ul>
            </nav>
        </div>
        <!-- End of Navbar -->

        <!-- Start of Hero -->
        <div class="h-screen flex items-center text-center bg-hero-pattern bg-cover bg-center">
            <div class="w-full h-full flex justify-center items-center backdrop-brightness-75">
                <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] mx-auto">
                    <h2 class="text-white text-8xl font-bold text-left">
                        Menu <br />
                        Overview .
                    </h2>
                </div>
            </div>
        </div>
        <!-- End of Hero -->

        <!-- Start of Feature -->
        <div class="flex items-center text-center bg-gray-200">
            <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] mx-auto">
                <div class="grid grid-cols-3 grid-rows-3 gap-12 py-16">
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                    <div class="flex items-center gap-7">
                        <img src="/icons/fork.svg"
                            class="w-[36px] h-[36px] bg-white rounded-full p-2 border-[1px] border-black" />
                        Tomali Menu
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Feature -->

        <!-- Start of Menu -->
        <section class="w-full">
            <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] mx-auto py-20">
                <div class="flex gap-20">
                    <div class="flex flex-col basis-6/12 gap-10">
                        <h2 class="font-bold text-3xl mb-12">Menu selection</h2>
                        <div class="flex flex-col">
                            <img src="./assets/1.jpg" class="w-full rounded-3xl h-[240px] object-cover object-center" />
                            <div class="mt-5 flex items-center justify-between">
                                <div class="flex flex-col gap-2">
                                    <p class="font-bold text-xl">Bolognese (spaghetti/fettuccine)</p>
                                    <span>#makanan</span>
                                </div>
                                <a href={{url("menu", 1)}}
                                    class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <img src="./assets/2.jpg" class="w-full rounded-3xl h-[240px] object-cover object-center" />
                            <div class="mt-5 flex items-center justify-between">
                                <div class="flex flex-col gap-2">
                                    <p class="font-bold text-xl">aglio olio (spaghetti/fettuccine)</p>
                                    <span>#makanan</span>
                                </div>
                                <a href={{url("menu", 2)}}
                                    class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                                    Details
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col basis-6/12 gap-5">
                        <div class="flex flex-col">
                            <img src="./assets/3.jpg" class="w-full rounded-3xl h-[240px] object-cover object-center" />
                            <div class="mt-5 flex items-center justify-between">
                                <div class="flex flex-col gap-2">
                                    <p class="font-bold text-xl capitalize">beef teriyaki</p>
                                    <span>#menu</span>
                                </div>
                                <a href={{url("menu", 3)}}
                                    class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <img src="./assets/4.jpg" class="w-full rounded-3xl h-[240px] object-cover object-center" />
                            <div class="mt-5 flex items-center justify-between">
                                <div class="flex flex-col gap-2">
                                    <p class="font-bold text-xl">chicken teriyaki</p>
                                    <span>#menu</span>
                                </div>
                                <a href={{url("menu", 4)}}
                                    class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                                    Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Menu -->

        <!-- Start of Reach Out -->
        <section class="w-full">
            <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] mx-auto"></div </section>
            <!-- End of Reach Out -->

            <!-- Start of Footer  -->
            <section class="w-full">
                <div class="w-full px-5 py-8 lg:px-10 lg:max-w-[1200px] py-3 mx-auto flex flex-col gap-5 mt-10">
                    <div class="flex justify-between items-center">
                        <p>
                            Stay updated with our latest offers and promotions by subscribing to
                            our newsletter.
                        </p>
                        <div class="flex items-center gap-3">
                            <input type="email" placeholder="Enter your email"
                                class="border-[1px] px-3 py-1 border-black rounded-full" />
                            <button class="px-2 py-2 rounded-full border-2 text-sm text-white bg-green-700">
                                Subscribe
                            </button>
                        </div>
                    </div>

                    <div class="flex justify-between items-start mt-16">
                        <div class="flex flex-col gap-3">
                            <h3 class="font-semibold text-3xl">Tomali Cafe & Resto</h3>
                        </div>
                        <div class="flex gap-16">
                            <ul class="flex flex-col gap-3">
                                <li class="font-semibold">Support Center</li>
                                <li>FAQ</li>
                                <li>Contact Us</li>
                                <li>How to Order</li>
                            </ul>
                            <ul class="flex flex-col gap-3">
                                <li class="font-semibold">More Options</li>
                                <li>Privacy Policy</li>
                                <li>Site Map</li>
                                <li>Subscription Plans</li>
                            </ul>
                            <ul class="flex flex-col gap-3">
                                <li class="font-semibold">Get in Touch</li>
                                <li class="underline">info@tomaliresto.com</li>
                                <li>+123 456 7890</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Footer  -->
    </body>
</x-guest-layout>