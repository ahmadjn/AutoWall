

<?php $__env->startSection('head'); ?>
    <title><?php echo e($data['title']); ?> Wallpapers, <?php echo e($data['category']); ?> Wallpapers, Images, Backgrounds, Photos and Pictures
        Free Download</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "<?php echo e(SITE_NAME); ?>",
                    "item": "<?php echo e(SITE_URL); ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "<?php echo e($data['category']); ?>",
                    "item": "<?php echo e(SITE_URL); ?><?php echo e($data['category_link']); ?>"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "<?php echo e($data['title']); ?>",
                    "item": "<?php echo e(current_url()); ?>"
                }
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "name": "<?php echo e($data['title']); ?>",
            "contentUrl": "<?php echo e($data['img_ori']); ?>",
            "url": "<?php echo e(current_url()); ?>",
            "thumbnailUrl": "<?php echo e($data['img_thumb']); ?>",
            "acquireLicensePage": "<?php echo e(current_url()); ?>#license_page",
            "license": "<?php echo e(current_url()); ?>#license",
            "fileFormat": "jpg",
            "sourceOrganization": "<?php echo e(SITE_URL); ?>"
        }
    </script>
    <?php
    $downloadurl = str_replace(['https://cdn.statically.io/img/images.hdqwalls.com/f=auto/wallpapers/', '.jpg'], '', $data['img_ori']);
    ?>
    <!--artikel-start-->
    <section class="text-gray-600 body-font">
        <div class="container gap-4 px-2 py-6 mx-auto md:flex">
            <div class="hidden md:inline-block md:w-1/6">
                <div class="grid grid-cols-1 gap-1 py-2 bg-white rounded shadow-md">
                    <h3 class="px-2 text-lg font-semibold text-center">Categories</h3>
                    <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="flex items-center justify-between px-2 py-1 mx-1 text-sm text-white border rounded text- center bg-emerald-600 hover:bg-emerald-800"
                            href="<?php echo e(SITE_URL); ?><?php echo e($cat['link']); ?>"><?php echo e($cat['title']); ?><span
                                class="px-1 text-xs text-white rounded-full bg-red-accent-200"><?php echo e($cat['number']); ?></span></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="w-full md:w-3/5">
                <div class="flex flex-col w-full p-2 mb-20 bg-white rounded shadow-md">
                    <div class="items-center justify-center hidden gap-4 md:flex">
                        <a href="<?php echo e(SITE_URL); ?>"
                            class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            Home
                        </a>
                        /
                        <a href="<?php echo e(SITE_URL); ?><?php echo e($data['category_link']); ?>"
                            class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            <?php echo e($data['category']); ?>

                        </a>
                        /
                        <p class="text-xs tracking-widest text-center text-emerald-500 title-font">
                            <?php echo e($data['title']); ?>

                        </p>
                    </div>

                    <h1 class="mb-4 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">
                        <?php echo e($data['title']); ?>

                    </h1>
                    <article class="w-full">
                        <img class="w-full mb-5 drop-shadow-md" src="<?php echo e($data['img_thumb']); ?>"
                            alt="<?php echo e($data['title']); ?> Wallpaper" loading="lazy" />
                        <p>
                        <h3 class="inline">Tags : </h3>
                        <?php $__currentLoopData = $data['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="inline mb-1 mr-1 text-sm italic underline"
                                href="<?php echo e($tag['link']); ?>"><?php echo e($tag['title']); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>
                        <div class="flex flex-col items-center justify-center gap-4 p-4 text-white border m-1 mt-4">
                            <h2 class="text-center font-semibold text-lg text-black">Download <?php echo e($data['title']); ?>

                                Wallpaper For Your
                                Current Device :</h2>
                            <span id="download_image"></span>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-4 p-4 text-white border m-1 mt-4">
                            <h2 class="text-center font-semibold text-lg text-black">Download <?php echo e($data['title']); ?>

                                Wallpaper Original Size :</h2>
                            <a class="px-4 py-2 font-semibold border-2 border-white shadow rounded-xl bg-emerald-600 hover:bg-emerald-800"
                                href="<?php echo e($data['img_ori']); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" class="w-6 inline" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M19 9h-4V3H9v6H5l7 7 7-7zm-8 2V5h2v6h1.17L12 13.17 9.83 11H11zm-6 7h14v2H5z" />
                                </svg><?php echo e($data['img_title']); ?></a>
                        </div>
                        <div class="p-2">
                            <h2 class="p-2 mb-1 text-lg font-semibold border-b-2">Download In Different Resolutions</h2>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Popular Desktop Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1336x768/<?php echo e($data['link']); ?>">1336x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1920x1080/<?php echo e($data['link']); ?>">1920x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/3840x2160/<?php echo e($data['link']); ?>">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x800/<?php echo e($data['link']); ?>">1280x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1440x900/<?php echo e($data['link']); ?>">1440x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x1024/<?php echo e($data['link']); ?>">1280x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1600x900/<?php echo e($data['link']); ?>">1600x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1024x768/<?php echo e($data['link']); ?>">1024x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1680x1050/<?php echo e($data['link']); ?>">1680x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1920x1200/<?php echo e($data['link']); ?>">1920x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1360x768/<?php echo e($data['link']); ?>">1360x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x720/<?php echo e($data['link']); ?>">1280x720</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Popular Mobile
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/240x320/<?php echo e($data['link']); ?>">240x320</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/320x480/<?php echo e($data['link']); ?>">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/320x568/<?php echo e($data['link']); ?>">320x568</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/480x800/<?php echo e($data['link']); ?>">480x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/480x854/<?php echo e($data['link']); ?>">480x854</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/540x960/<?php echo e($data['link']); ?>">540x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/640x960/<?php echo e($data['link']); ?>">640x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/640x1136/<?php echo e($data['link']); ?>">640x1136</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/720x1280/<?php echo e($data['link']); ?>">720x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/750x1334/<?php echo e($data['link']); ?>">750x1334</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1080x1920/<?php echo e($data['link']); ?>">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1440x2560/<?php echo e($data['link']); ?>">1440x2560</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2160x3840/<?php echo e($data['link']); ?>">2160x3840</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Ultra 4K 8K
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/3840x2160/<?php echo e($data['link']); ?>">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/3840x2400/<?php echo e($data['link']); ?>">3840x2400</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">HD Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x720/<?php echo e($data['link']); ?>">1280x720</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1366x768/<?php echo e($data['link']); ?>">1366x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1600x900/<?php echo e($data['link']); ?>">1600x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1600x1200/<?php echo e($data['link']); ?>">1600x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1400x1050/<?php echo e($data['link']); ?>">1400x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1152x864/<?php echo e($data['link']); ?>">1152x864</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1024x768/<?php echo e($data['link']); ?>">1024x768</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x1024/<?php echo e($data['link']); ?>">1280x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1920x1080/<?php echo e($data['link']); ?>">1920x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2048x1152/<?php echo e($data['link']); ?>">2048x1152</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2560x1440/<?php echo e($data['link']); ?>">2560x1440</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/3840x2160/<?php echo e($data['link']); ?>">3840x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/3840x2400/<?php echo e($data['link']); ?>">3840x2400</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Wide Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x800/<?php echo e($data['link']); ?>">1280x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1400x900/<?php echo e($data['link']); ?>">1400x900</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1680x1050/<?php echo e($data['link']); ?>">1680x1050</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1920x1200/<?php echo e($data['link']); ?>">1920x1200</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2560x1024/<?php echo e($data['link']); ?>">2560x1024</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2560x1080/<?php echo e($data['link']); ?>">2560x1080</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2560x1600/<?php echo e($data['link']); ?>">2560x1600</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2560x1700/<?php echo e($data['link']); ?>">2560x1700</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2880x1800/<?php echo e($data['link']); ?>">2880x1800</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Apple
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/320x480/<?php echo e($data['link']); ?>">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/640x960/<?php echo e($data['link']); ?>">640x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/640x1136/<?php echo e($data['link']); ?>">640x1136</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/750x1334/<?php echo e($data['link']); ?>">750x1334</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1080x1920/<?php echo e($data['link']); ?>">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1125x2436/<?php echo e($data['link']); ?>">1125x2436</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1242x2688/<?php echo e($data['link']); ?>">1242x2688</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1280x2120/<?php echo e($data['link']); ?>">1280x2120</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2048x2048/<?php echo e($data['link']); ?>">2048x2048</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2932x2932/<?php echo e($data['link']); ?>">2932x2932</a>
                                </div>
                            </div>
                            <div class="w-full p-2 m-1 border">
                                <h3 class="mt-1 mb-2 font-medium">Android
                                    Resolutions</h3>
                                <div class="flex flex-wrap gap-2">
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/240x320/<?php echo e($data['link']); ?>">240x320</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/240x400/<?php echo e($data['link']); ?>">240x400</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/320x240/<?php echo e($data['link']); ?>">320x240</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/320x480/<?php echo e($data['link']); ?>">320x480</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/360x640/<?php echo e($data['link']); ?>">360x640</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/480x800/<?php echo e($data['link']); ?>">480x800</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/480x854/<?php echo e($data['link']); ?>">480x854</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/540x960/<?php echo e($data['link']); ?>">540x960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/720x1280/<?php echo e($data['link']); ?>">720x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/800x1280/<?php echo e($data['link']); ?>">800x1280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1080x1920/<?php echo e($data['link']); ?>">1080x1920</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1080x2160/<?php echo e($data['link']); ?>">1080x2160</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1080x2280/<?php echo e($data['link']); ?>">1080x2280</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1440x2560/<?php echo e($data['link']); ?>">1440x2560</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/1440x2960/<?php echo e($data['link']); ?>">1440x2960</a>
                                    <a class="px-2 py-1 text-sm text-white rounded bg-emerald-600 hover:bg-emerald-800"
                                        href="<?php echo e(SITE_URL); ?>/download/wallpaper/2160x3840/<?php echo e($data['link']); ?>">2160x3840</a>
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
                    <?php $__currentLoopData = $data['relateds']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="overflow-hidden border-2 rounded" href="<?php echo e(SITE_URL); ?><?php echo e($related['link']); ?>">
                            <img class="object-cover w-full duration-300 ease-in-out transform hover:scale-125 hover:-rotate-6"
                                src="<?php echo e($related['img']); ?>" alt="<?php echo e($related['title']); ?>" loading="lazy">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--artikel-end-->
    <script>
        var wallpaper_url = "<?php echo $downloadurl; ?>";
        var d_res = screen.width + "x" + screen.height;
        var d_download_link = "https://cdn.statically.io/img/images.hdqwalls.com/f=auto/download/" + wallpaper_url + "-" +
            d_res +
            ".jpg";
        var d_download_btn = document.getElementById("download_image");
        d_download_btn.innerHTML = "<a target='_blank' href='" + d_download_link +
            "' rel='nofollow' class='px-4 py-2 font-semibold border-2 border-white shadow rounded-xl bg-emerald-600 hover:bg-emerald-800' style='border-radius:10px;' ><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' class='w-6 inline' viewBox='0 0 24 24' fill='#FFFFFF'><g><rect fill='none' height='24' width='24'/></g><g><path d='M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z'/></g></svg>Download Wallpaper In (" +
            d_res + ")</a>";
        var pixels = window.devicePixelRatio && window.devicePixelRatio > 1 ? window.devicePixelRatio : 1;

        function getresolution() {
            var resolution_array = ["240x320", "320x480", "320x568", "480x800", "480x854", "540x960", "640x960", "640x1136",
                "720x1280", "750x1334", "1080x1920", "1440x2560", "2160x3840", "1336x768", "1920x1080", "1280x800",
                "1440x900", "1280x1024", "1600x900", "1024x768", "1680x1050", "1920x1200", "1360x768", "1280x720",
                "1366x768", "1600x1200", "1400x1050", "1152x864", "2048x1152", "2560x1440", "3840x2160", "3840x2400",
                "1400x900", "2560x1024", "2560x1080", "2560x1600", "2880x1800", "1280x2120", "2048x2048", "2932x2932",
                "240x400", "320x240", "360x640", "800x1280"
            ];
            var res = screen.width + "x" + screen.height;
            var check_res = $.inArray(res, resolution_array);
            if (check_res != -1) {
                return res;
            } else {
                var pixels = window.devicePixelRatio && window.devicePixelRatio > 1 ? window.devicePixelRatio : 1;
                var res = Math.ceil(screen.width * pixels) + 'x' + Math.ceil(screen.height * pixels);
                var check_res = $.inArray(res, resolution_array);
                if (check_res != -1) {
                    return res;
                } else {
                    return -1;
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AutoWall\views/theme/default/single.blade.php ENDPATH**/ ?>