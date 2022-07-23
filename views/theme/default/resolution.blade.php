@extends($layout)

@section('head')
    <title>{{ $data['title'] }} Wallpapers, {{ $data['category'] }} Wallpapers, Images, Backgrounds, Photos and Pictures
        Free Download  - {{ strtoupper(str_replace('https://', '', SITE_URL)) }}</title>
@endsection

@section('content')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "{{ SITE_NAME }}",
                    "item": "{{ SITE_URL }}"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "{{ $data['category'] }}",
                    "item": "{{ SITE_URL }}{{ $data['category_link'] }}"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "{{ $data['title'] }}",
                    "item": "{{ current_url() }}"
                }
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "name": "{{ $data['title'] }}",
            "contentUrl": "{{ $data['img_ori'] }}",
            "url": "{{ current_url() }}",
            "thumbnailUrl": "{{ $data['img_thumb'] }}",
            "acquireLicensePage": "{{ current_url() }}#license_page",
            "license": "{{ current_url() }}#license",
            "fileFormat": "jpg",
            "sourceOrganization": "{{ SITE_URL }}"
        }
    </script>
    @php
    $downloadurl = str_replace(['https://cdn.statically.io/img/images.hdqwalls.com/f=auto/wallpapers/', '.jpg'], '', $data['img_ori']);
    @endphp
    <!--artikel-start-->
    <section class="text-gray-600 body-font">
        <div class="container gap-4 px-2 py-6 mx-auto md:flex">
            <div class="hidden md:inline-block md:w-1/6">
                <div class="grid grid-cols-1 gap-1 py-2 bg-white rounded shadow-md">
                    <h3 class="px-2 text-lg font-semibold text-center">Categories</h3>
                    @foreach ($data['categories'] as $cat)
                        <a class="flex items-center justify-between px-2 py-1 mx-1 text-sm text-white border rounded text- center bg-emerald-600 hover:bg-emerald-800"
                            href="{{ SITE_URL }}{{ $cat['link'] }}">{{ $cat['title'] }}<span
                                class="px-1 text-xs text-white rounded-full bg-red-accent-200">{{ $cat['number'] }}</span></a>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:w-3/5">
                <div class="flex flex-col w-full p-2 mb-20 bg-white rounded shadow-md">
                    <div class="items-center justify-center hidden gap-4 md:flex">
                        <a href="{{ SITE_URL }}"
                            class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            Home
                        </a>
                        /
                        <a href="{{ SITE_URL }}{{ $data['category_link'] }}"
                            class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            {{ $data['category'] }}
                        </a>
                        /
                        <p class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            {{ $data['title'] }}
                        </p>
                    </div>

                    <h1 class="mb-4 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">
                        {{ $data['title'] }}
                    </h1>
                    <article class="w-full">
                        <img class="w-full mb-5 drop-shadow-md" src="{{ $data['img_thumb'] }}"
                            alt="{{ $data['title'] }} Wallpaper" loading="lazy" />
                        <p>
                        <h3 class="inline">Tags : </h3>
                        @foreach ($data['tags'] as $tag)
                            <a class="inline mb-1 mr-1 text-sm italic underline"
                                href="{{ $tag['link'] }}">{{ $tag['title'] }}</a>
                        @endforeach
                        </p>
                        <div class="flex flex-col items-center justify-center gap-4 p-4 text-white border m-1 mt-4">
                            <h2 class="text-center font-semibold text-lg text-black">Download {{ $data['title'] }}
                                Wallpaper:</h2>
                            <a class="px-4 py-2 font-semibold border-2 border-white shadow rounded-xl bg-emerald-600 hover:bg-emerald-800"
                                href="{{ $data['imgdownload'] }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" class="w-6 inline" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zm-8 2V5h2v6h1.17L12 13.17 9.83 11H11zm-6 7h14v2H5z" />
                                </svg>{{ $data['imgdownload_title'] }}</a>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-4 p-4 text-white border m-1 mt-4">
                            <h2 class="text-center font-semibold text-lg text-black">Download {{ $data['title'] }}
                                Wallpaper Original Size:</h2>
                            <a class="px-4 py-2 font-semibold border-2 border-white shadow rounded-xl bg-emerald-600 hover:bg-emerald-800"
                                href="{{ $data['img_ori'] }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" class="w-6 inline" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zm-8 2V5h2v6h1.17L12 13.17 9.83 11H11zm-6 7h14v2H5z" />
                                </svg>{{ $data['img_title'] }}</a>
                        </div>
                        <div class="p-2">
                            <h2 class="p-2 mb-1 text-lg font-semibold border-b-2">Download In Different Resolutions</h2>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Popular Desktop Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1336x768/{{ $data['link'] }}">1336x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1920x1080/{{ $data['link'] }}">1920x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/3840x2160/{{ $data['link'] }}">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x800/{{ $data['link'] }}">1280x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1440x900/{{ $data['link'] }}">1440x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x1024/{{ $data['link'] }}">1280x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1600x900/{{ $data['link'] }}">1600x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1024x768/{{ $data['link'] }}">1024x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1680x1050/{{ $data['link'] }}">1680x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1920x1200/{{ $data['link'] }}">1920x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1360x768/{{ $data['link'] }}">1360x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x720/{{ $data['link'] }}">1280x720</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Popular Mobile
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/240x320/{{ $data['link'] }}">240x320</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/320x480/{{ $data['link'] }}">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/320x568/{{ $data['link'] }}">320x568</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/480x800/{{ $data['link'] }}">480x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/480x854/{{ $data['link'] }}">480x854</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/540x960/{{ $data['link'] }}">540x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/640x960/{{ $data['link'] }}">640x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/640x1136/{{ $data['link'] }}">640x1136</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/720x1280/{{ $data['link'] }}">720x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/750x1334/{{ $data['link'] }}">750x1334</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1080x1920/{{ $data['link'] }}">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1440x2560/{{ $data['link'] }}">1440x2560</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2160x3840/{{ $data['link'] }}">2160x3840</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Ultra 4K 8K
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/3840x2160/{{ $data['link'] }}">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/3840x2400/{{ $data['link'] }}">3840x2400</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">HD Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x720/{{ $data['link'] }}">1280x720</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1366x768/{{ $data['link'] }}">1366x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1600x900/{{ $data['link'] }}">1600x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1600x1200/{{ $data['link'] }}">1600x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1400x1050/{{ $data['link'] }}">1400x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1152x864/{{ $data['link'] }}">1152x864</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1024x768/{{ $data['link'] }}">1024x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x1024/{{ $data['link'] }}">1280x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1920x1080/{{ $data['link'] }}">1920x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2048x1152/{{ $data['link'] }}">2048x1152</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2560x1440/{{ $data['link'] }}">2560x1440</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/3840x2160/{{ $data['link'] }}">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/3840x2400/{{ $data['link'] }}">3840x2400</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Wide Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x800/{{ $data['link'] }}">1280x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1400x900/{{ $data['link'] }}">1400x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1680x1050/{{ $data['link'] }}">1680x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1920x1200/{{ $data['link'] }}">1920x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2560x1024/{{ $data['link'] }}">2560x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2560x1080/{{ $data['link'] }}">2560x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2560x1600/{{ $data['link'] }}">2560x1600</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2560x1700/{{ $data['link'] }}">2560x1700</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2880x1800/{{ $data['link'] }}">2880x1800</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Apple
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/320x480/{{ $data['link'] }}">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/640x960/{{ $data['link'] }}">640x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/640x1136/{{ $data['link'] }}">640x1136</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/750x1334/{{ $data['link'] }}">750x1334</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1080x1920/{{ $data['link'] }}">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1125x2436/{{ $data['link'] }}">1125x2436</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1242x2688/{{ $data['link'] }}">1242x2688</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1280x2120/{{ $data['link'] }}">1280x2120</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2048x2048/{{ $data['link'] }}">2048x2048</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2932x2932/{{ $data['link'] }}">2932x2932</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Android
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/240x320/{{ $data['link'] }}">240x320</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/240x400/{{ $data['link'] }}">240x400</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/320x240/{{ $data['link'] }}">320x240</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/320x480/{{ $data['link'] }}">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/360x640/{{ $data['link'] }}">360x640</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/480x800/{{ $data['link'] }}">480x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/480x854/{{ $data['link'] }}">480x854</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/540x960/{{ $data['link'] }}">540x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/720x1280/{{ $data['link'] }}">720x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/800x1280/{{ $data['link'] }}">800x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1080x1920/{{ $data['link'] }}">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1080x2160/{{ $data['link'] }}">1080x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1080x2280/{{ $data['link'] }}">1080x2280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1440x2560/{{ $data['link'] }}">1440x2560</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/1440x2960/{{ $data['link'] }}">1440x2960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="{{ SITE_URL }}/download/wallpaper/2160x3840/{{ $data['link'] }}">2160x3840</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <p class="italic">All images remain property of their original owners. If you found any image
                                copyrighted to
                                yours, Please contact us, so we can remove it or mention its authors name.</p>
                        </div>
                </div>
                </article>
            </div>
            <div class="w-full md:w-1/4">
                <div class="grid grid-cols-1 gap-2 px-1 py-2 bg-white rounded shadow-md">
                    <h3 class="py-2 font-semibold text-center">Related Wallpapers</h3>
                    @foreach ($data['relateds'] as $related)
                        <a class="overflow-hidden border-2 rounded"
                            href="{{ SITE_URL }}/download{{ $related['link'] }}">
                            <img class="object-cover w-full duration-300 ease-in-out transform hover:scale-125 hover:-rotate-6"
                                src="{{ $related['img'] }}" alt="{{ $related['title'] }}" loading="lazy">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--artikel-end-->
@endsection
