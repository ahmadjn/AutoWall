<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect dns-prefetch" crossorigin href="https://fonts.googleapis.com" />
    <link rel="preconnect dns-prefetch" crossorigin href="https://fonts.gstatic.com" />
    <link rel="preconnect dns-prefetch" crossorigin href="//cdn.statically.io" />
    <link rel="preconnect dns-prefetch" crossorigin href="//img-global.cpcdn.com" />
    <link rel="preconnect dns-prefetch" crossorigin href="https://cdnjs.cloudflare.com" />
    <link rel="preconnect dns-prefetch" crossorigin href="//s10.histats.com" />
    <link rel="preconnect" href="https://googleads.g.doubleclick.net/">
    <link rel="preconnect" href="https://www.googletagservices.com/">
    <link rel="dns-prefetch" href="//adservice.google.com">
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
    <link rel="dns-prefetch" href="//tpc.googlesyndication.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link href="//ajax.googleapis.com" rel="preconnect" crossorigin>
    <link rel="dns-prefetch" href="//apis.google.com">
    <link href="apis.google.com" rel="preconnect" crossorigin>
    <link rel="dns-prefetch" href="//ad.doubleclick.net">
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
    <link rel="dns-prefetch" href="//stats.g.doubleclick.net">
    <link rel="dns-prefetch" href="//cm.g.doubleclick.net">
    @yield('head')
    <link rel="stylesheet" href="{{ SITE_URL }}/assets/css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="{{ current_url() }}" />
    <link rel="shortcut icon" href="{{ SITE_URL }}/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ SITE_URL }}/assets/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ SITE_URL }}/assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ SITE_URL }}/assets/images/favicon-16x16.png" />
    <meta name="theme-color" content="#02875f" />
    <meta name="msapplication-navbutton-color" content="#02875f" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#02875f" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!--ads/auto.txt-->
    <script type="application/ld+json">
        {
            "@type": "WebSite",
            "@id": "{{ SITE_URL }}/#website",
            "url": "{{ SITE_URL }}/",
            "name": "{{ SITE_NAME }}",
            "description": "{{ SITE_NAME }}",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": "{{ SITE_URL }}/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }],
            "inLanguage": "en-US"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ SITE_NAME }}",
            "url": "{{ SITE_URL }}",
            "logo": "{{ SITE_URL }}/assets/images/logo.jpg"
        }
    </script>
</head>

<body class="antialiased bg-gray-100">
    <!--nav-home-start-->
    <header class="text-gray-600 bg-white body-font">
        <div class="container flex justify-between mx-auto">
            <a href="{{ SITE_URL }}"
                class="flex items-center p-2 ml-5 font-medium text-gray-900 title-font md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white fill-emerald-600"
                    viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M18 13v7H4V6h5.02c.05-.71.22-1.38.48-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5l-2-2zm-1.5 5h-11l2.75-3.53 1.96 2.36 2.75-3.54L16.5 18zm2.8-9.11c.44-.7.7-1.51.7-2.39C20 4.01 17.99 2 15.5 2S11 4.01 11 6.5s2.01 4.5 4.49 4.5c.88 0 1.7-.26 2.39-.7L21 13.42 22.42 12 19.3 8.89zM15.5 9C14.12 9 13 7.88 13 6.5S14.12 4 15.5 4 18 5.12 18 6.5 16.88 9 15.5 9z" />
                </svg>
                <span class="ml-1 text-xl font-bold md:text-3xl text-emerald-600">HD Wallpapers</span>
            </a>
            <div class="p-2 mr-5">
                <div class="relative inline-block group z-10">
                    <button class="inline-flex items-center px-4 py-2 font-semibold text-white rounded bg-emerald-600">
                        <span class="mr-1"><svg xmlns="http://www.w3.org/2000/svg" class="inline-flex w-6"
                                viewBox="0 0 24 24" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M20 4v12H8V4h12m0-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 9.67l1.69 2.26 2.48-3.1L19 15H9zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z" />
                            </svg>Categories</span>
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <div
                        class="absolute hidden h-64 pt-1 overflow-y-scroll text-gray-700 bg-white border-2 border-white rounded-md shadow-md group-hover:block">
                        <a class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/superheroes-wallpapers">Superheroes</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/games-wallpapers">Games</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/artist-wallpapers">Artist</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/celebrities-wallpapers">Celebrities</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/cars-wallpapers">Cars</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/movies-wallpapers">Movies</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/nature-wallpapers">Nature</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/tv-shows-wallpapers">Tv Shows</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/girls-wallpapers">Girls</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/abstract-wallpapers">Abstract</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/anime-wallpapers">Anime</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/music-wallpapers">Music</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/photography-wallpapers">Photography</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/animals-wallpapers">Animals</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/computer-wallpapers">Computer</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/indian-celebrities-wallpapers">Indian Celebrities</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/digital-universe-wallpapers">Digital Universe</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/bikes-wallpapers">Bikes</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/world-wallpapers">World</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/sports-wallpapers">Sports</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/others-wallpapers">Others</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/birds-wallpapers">Birds</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/flowers-wallpapers">Flowers</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/fantasy-girls-wallpapers">Fantasy Girls</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/love-wallpapers">Love</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/typography-wallpapers">Typography</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/cartoons-wallpapers">Cartoons</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/logo-wallpapers">Logo</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/celebrations-wallpapers">Celebrations</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/creative-wallpapers">Creative</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/3d-wallpapers">3D</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/cute-wallpapers">Cute</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/planes-wallpapers">Planes</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/graphics-wallpapers">Graphics</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/food-wallpapers">Food</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/inspiration-wallpapers">Inspiration</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/funny-wallpapers">Funny</a><a
                            class="p-2 mx-1 text-sm text-center text-white border rounded bg-emerald-600 hover:bg-emerald-800 group-hover:block"
                            href="{{ SITE_URL }}/category/lifestyle-wallpapers">Lifestyle</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--nav-home-end-->

    @yield('content')

    <!--footer-start-->
    <footer class="mt-20 text-gray-600 body-font">
        <div class="bg-gray-100">
            <div class="container flex flex-col items-center px-5 py-6 mx-auto sm:flex-row">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-white fill-emerald-600"
                        viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M18 13v7H4V6h5.02c.05-.71.22-1.38.48-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5l-2-2zm-1.5 5h-11l2.75-3.53 1.96 2.36 2.75-3.54L16.5 18zm2.8-9.11c.44-.7.7-1.51.7-2.39C20 4.01 17.99 2 15.5 2S11 4.01 11 6.5s2.01 4.5 4.49 4.5c.88 0 1.7-.26 2.39-.7L21 13.42 22.42 12 19.3 8.89zM15.5 9C14.12 9 13 7.88 13 6.5S14.12 4 15.5 4 18 5.12 18 6.5 16.88 9 15.5 9z" />
                    </svg>
                    <span class="ml-1 text-lg font-bold text-emerald-600">HD Wallpapers</span>
                </a>
                <p class="mt-4 text-sm text-gray-500 sm:ml-6 sm:mt-0">
                    © 2022 HD Wallpapers
                </p>
                <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5"
                                ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <!--footer-end-->

    <script>
        for (var imgEl = document.getElementsByTagName("img"), i = 0; i < imgEl.length; i++) imgEl[i].getAttribute("src") &&
            (imgEl[i].setAttribute("data-src", imgEl[i].getAttribute("src")), imgEl[i].removeAttribute("src"), imgEl[i]
                .className += " lazyload");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"
        integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
