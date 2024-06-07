<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    {{--
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js')

</head>

<body class="font-['Poppins']">
    <!-- Start of Navbar -->
    <div class="w-full fixed top-0 left-0 right-0 z-50 bg-white">
        <nav class="w-full px-5 lg:px-10 lg:max-w-[1200px] py-5 bg-white mx-auto flex items-center justify-between">
            <h1 class="text-xl">Tomali Cafe & Resto</h1>
            <ul class="flex items-center gap-3">
                <a href={{url("/")}}>
                    <li class="px-3 py-1 rounded-full border-2 border-gray-300 font-bold">
                        Home
                    </li>
                </a>
                <a href={{url("menu")}}>
                    <li class="px-3 py-1 rounded-full border-2 border-gray-300 font-bold">
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
                <a href={{url("reports")}}>
                    <li class="px-3 py-1 rounded-full border-2 bg-yellow-300 font-bold">
                        Reports
                    </li>
                </a>
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
    <section class="w-full">
        <div class="w-full h-screen px-5 lg:px-10 lg:max-w-[1200px] py-3 mx-auto flex flex-col justify-evenly pt-16">
            <div class="flex items-center">
                <div class="basis-7/12 flex flex-col justify-center">
                    <h1 class="text-6xl mb-5">
                        Explore Tomali and <br />
                        Resto Menu's for <br />Delicious Choices
                    </h1>
                    <p>
                        Welcome to TomaliRestoOrder, you go-to platform for ordering from
                        Tomali and Resto. Discover a variety of menus, track transactions,
                        and analyze reports all in one place. Start exploring now!
                    </p>
                </div>
                <div class="basis-5/12 flex items-center justify-evenly">
                    <img src="./assets/logo.jpg" class="w-[200px] h-[200px] rounded-full bg-black" />
                    <div class="flex flex-col gap-3">
                        <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                            View All
                        </button>
                        <button class="px-3 py-2 w-[150px] bg-red-400 rounded-full font-bold border-2 text-xl">
                            Favorites
                        </button>
                        <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <hr class="h-px border-gray-300" />
            <div class="flex items-center justify-around">
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                    Filter
                </button>
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                    Sort
                </button>
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                    Search
                </button>
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                    Refresh
                </button>
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-xl">
                    Back
                </button>
            </div>
        </div>
    </section>
    <!-- End of Hero -->

    <!-- Section -->
    <div class="h-screen flex items-center text-center bg-hero-pattern bg-cover bg-center">
        <div class="w-full h-full flex justify-center items-center backdrop-brightness-75">
            <h2 class="text-white italic mx-auto text-5xl">
                Discover a Variety of Menu <br />
                Options to Suit Your Taste
            </h2>
        </div>
    </div>
    <!-- End of Section -->

    <!-- Start of Category -->
    <section class="w-full">
        <div class="w-full h-screen px-5 lg:px-10 lg:max-w-[1200px] py-3 mx-auto flex flex-col">
            <div class="flex items-center justify-between">
                <h3 class="text-3xl">Menu selection</h3>
                <button class="px-3 py-2 w-[150px] rounded-full border-2 text-sm">
                    View All
                </button>
            </div>
            <div class="grid grid-cols-2 grid-rows-3 mt-5 gap-5 gap-x-16">
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">1</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Appetizers</h4>
                </div>
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">2</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Main Course</h4>
                </div>
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">3</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Desserts</h4>
                </div>
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">4</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Beverages</h4>
                </div>
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">5</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Specials</h4>
                </div>
                <div class="flex items-center gap-10 py-5">
                    <h4 class="text-6xl">6</h4>
                    <hr class="h-px w-full border-gray-300" />
                    <h4 class="text-3xl">Combos</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Category -->

    <!-- Start of Menu -->
    <section class="w-full">
        <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] py-3 mx-auto flex flex-col">
            <div class="flex items-center justify-between">
                <h3 class="text-3xl">Our Most Loved Dishes</h3>
            </div>
            <div class="flex items-center gap-8 mt-5">
                <button class="px-5 py-2 rounded-full border-2 text-xl">All</button>
                <button class="px-5 py-2 rounded-full border-2 text-xl">
                    Appetizers
                </button>
                <button class="px-5 py-2 rounded-full border-2 text-xl">
                    Main Course
                </button>
                <button class="px-5 py-2 rounded-full border-2 text-xl">
                    Desserts
                </button>
                <button class="px-5 py-2 rounded-full border-2 text-xl">
                    Beverages
                </button>
            </div>
            <div class="grid grid-cols-3 mt-5 gap-5 gap-x-16">
                <div class="flex flex-col items-start">
                    <img src="./assets/aglio.jpg" class="w-full rounded-lg h-[240px] object-cover object-center" />
                    <div class="flex flex-col gap-2 my-3 text-center w-full">
                        <p class="font-semibold">Aglio Olio</p>
                        <p class="font-semibold text-gray-400">(Spaghetti/Fettuccine)</p>
                    </div>
                    <a href={{url("/menu/2")}} class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        Details
                    </a>
                </div>
                <div class="flex flex-col items-start">
                    <img src="./assets/aglio.jpg" class="w-full rounded-lg h-[240px] object-cover object-center" />
                    <div class="flex flex-col gap-2 my-3 text-center w-full">
                        <p class="font-semibold">Aglio Olio</p>
                        <p class="font-semibold text-gray-400">(Spaghetti/Fettuccine)</p>
                    </div>
                    <button class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        Details
                    </button>
                </div>
                <div class="flex flex-col items-start">
                    <img src="./assets/aglio.jpg" class="w-full rounded-lg h-[240px] object-cover object-center" />
                    <div class="flex flex-col gap-2 my-3 text-center w-full">
                        <p class="font-semibold">Aglio Olio</p>
                        <p class="font-semibold text-gray-400">(Spaghetti/Fettuccine)</p>
                    </div>
                    <button class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        Details
                    </button>
                </div>
                <div class="flex flex-col items-start">
                    <img src="./assets/aglio.jpg" class="w-full rounded-lg h-[240px] object-cover object-center" />
                    <div class="flex flex-col gap-2 my-3 text-center w-full">
                        <p class="font-semibold">Aglio Olio</p>
                        <p class="font-semibold text-gray-400">(Spaghetti/Fettuccine)</p>
                    </div>
                    <button class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        Details
                    </button>
                </div>
                <div class="flex flex-col items-start">
                    <img src="./assets/aglio.jpg" class="w-full rounded-lg h-[240px] object-cover object-center" />
                    <div class="flex flex-col gap-2 my-3 text-center w-full">
                        <p class="font-semibold">Aglio Olio</p>
                        <p class="font-semibold text-gray-400">(Spaghetti/Fettuccine)</p>
                    </div>
                    <button class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        Details
                    </button>
                </div>
                <div class="flex items-center justify-center">
                    <button class="px-5 py-2 rounded-full border-2 text-sm mt-3 font-semibold">
                        View All Orders
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Menu -->

    <!-- Start of History -->
    <section class="w-full">
        <div class="w-full px-5 lg:px-10 lg:max-w-[1200px] py-3 mx-auto flex flex-col gap-5 mt-10">
            <h4 class="text-2xl font-semibold">Order History</h4>
            <div class="flex items-center justify-evenly gap-5">
                <div class="flex w-1/3 flex-col rounded-2xl border-[1px] border-gray-300 p-5">
                    <div class="flex items-center gap-3">
                        <div class="w-[70px] h-[70px] bg-black rounded-full"></div>
                        <div class="flex flex-col items-start">
                            <p>Aa Usup Sumatera</p>
                            <p>Cashier Fitness</p>
                        </div>
                    </div>
                    <p class="mt-5">
                        “The food and ambience is so clean & nice. Highly recommended!!”
                    </p>
                </div>
                <div class="flex w-1/3 flex-col rounded-2xl border-[1px] border-gray-300 p-5">
                    <div class="flex items-center gap-3">
                        <div class="w-[70px] h-[70px] bg-black rounded-full"></div>
                        <div class="flex flex-col items-start">
                            <p>Aa Usup Sumatera</p>
                            <p>Cashier Fitness</p>
                        </div>
                    </div>
                    <p class="mt-5">
                        “The food and ambience is so clean & nice. Highly recommended!!”
                    </p>
                </div>
                <div class="flex w-1/3 flex-col rounded-2xl border-[1px] border-gray-300 p-5">
                    <div class="flex items-center gap-3">
                        <div class="w-[70px] h-[70px] bg-black rounded-full"></div>
                        <div class="flex flex-col items-start">
                            <p>Aa Usup Sumatera</p>
                            <p>Cashier Fitness</p>
                        </div>
                    </div>
                    <p class="mt-5">
                        “The food and ambience is so clean & nice. Highly recommended!!”
                    </p>
                </div>
            </div>
            <button class="px-3 py-2 mx-auto rounded-full border-2 text-xl mt-5">
                Explore All
            </button>
        </div>
    </section>
    <!-- End of History -->

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

</html>