

<?php $__env->startSection('head'); ?>
    <title>Best Source For HD, 4K, 5K, 8K Wallpapers</title>
    <?php if($page <= 1): ?>
        <meta name="robots" content="index,follow" />
    <?php else: ?>
        <meta name="robots" content="noindex,follow" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="text-gray-600 bg-white body-font">
        <div class="container flex flex-col items-center justify-center px-5 py-10 mx-auto">
            <div class="w-full text-center lg:w-2/3">
                <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                    Best Source For HD, 4K, 5K, 8K Wallpapers
                </h1>
                <h2 class="mb-2 leading-relaxed">
                    Download HD Wallpapers, Android/iPhone Wallpapers, Desktop Wallpapers, Widescreen Wallpapers In High
                    Quality
                </h2>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container flex gap-2 px-2 py-6 mx-auto">
            <div class="w-full md:w-4/5">
                <div class="grid grid-cols-1 gap-2 px-2 py-1 md:grid-cols-2 lg:grid-cols-3">
                    <?php $__currentLoopData = $data['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(SITE_URL); ?>/wallpaper<?php echo e($item['href']); ?>"
                            class="relative h-full overflow-hidden bg-red-400 border-4 border-white rounded cursor-pointer group">
                            <div
                                class="absolute inset-x-0 z-50 flex items-end text-white transition duration-300 ease-in-out rounded opacity-0 cursor-pointer group-hover:opacity-100 from-black/80 to-transparent bg-gradient-to-t -bottom-2 pt-30">
                                <div>
                                    <div
                                        class="p-4 space-y-3 text-lg transition duration-300 ease-in-out translate-y-4 transform-gpu group-hover:opacity-100 group-hover:translate-y-0">
                                        <div class="font-semibold"><?php echo e($item['title']); ?></div>
                                    </div>
                                </div>
                            </div>
                            <img alt="<?php echo e($item['title']); ?>"
                                class="object-cover w-full transition duration-300 ease-in-out group-hover:-rotate-6 group-hover:scale-125"
                                src="<?php echo e($item['src']); ?>" loading="lazy" />
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="flex justify-between p-2 m-2">
                    <?php if($page <= 1): ?>
                        <a class="items-end px-4 py-2 text-sm font-semibold text-center text-white border-2 border-white rounded-md shadow bg-emerald-600 hover:bg-emerald-800"
                            href="<?php echo e(SITE_URL); ?>/page/2">Next Page</a>
                    <?php else: ?>
                        <a class="items-start px-4 py-2 text-sm font-semibold text-center text-white border-2 border-white rounded-md shadow bg-emerald-600 hover:bg-emerald-800"
                            href="<?php echo e(SITE_URL); ?>/page/<?php echo e($page - 1); ?>">Previous Page</a>
                        <a class="items-end px-4 py-2 text-sm font-semibold text-center text-white border-2 border-white rounded-md shadow bg-emerald-600 hover:bg-emerald-800"
                            href="<?php echo e(SITE_URL); ?>/page/<?php echo e($page + 1); ?>">Next Page</a>
                    <?php endif; ?>

                </div>
            </div>
            <div class="hidden md:inline-block md:w-1/5">
                <div class="grid grid-cols-1 gap-1 py-2 bg-white rounded shadow-md">
                    <h3 class="px-2 text-lg font-semibold text-center">Categories</h3>
                    <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="flex items-center justify-between px-2 py-1 mx-1 text-sm text-white border rounded text- center bg-emerald-600 hover:bg-emerald-800"
                            href="<?php echo e($cat['link']); ?>"><?php echo e($cat['title']); ?><span
                                class="px-1 text-xs text-white rounded-full bg-red-accent-200"><?php echo e($cat['number']); ?></span></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\AutoWall\views/theme/default/home.blade.php ENDPATH**/ ?>