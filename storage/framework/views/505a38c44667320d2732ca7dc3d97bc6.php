<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div class="grid sm:grid-cols-2 gap-y-5 gap-x-10">
    <div class="w-full overflow-hidden rounded-xl bg-gray-100" style="aspect-ratio: 1.91 / 1; max-height: 400px;">
        <img class="w-full h-full object-cover" src="<?php echo e(asset($post->featurePhoto)); ?>" alt="<?php echo e($post->photo_alt_text); ?>">
    </div>
    <div class="flex flex-col justify-center space-y-10 py-4 sm:pl-10">
        <div>
            <div class="mb-5">
                <a href="<?php echo e(route('filamentblog.post.show', ['post' => $post->slug])); ?>" class="mb-4 block text-xl md:text-4xl font-semibold hover:text-blue-600">
                    <?php echo e($post->title); ?>

                </a>
                <div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <a href="<?php echo e(route('filamentblog.category.post', ['category' => $category->slug])); ?>">
                        <span class="bg-primary-200 text-primary-800 mr-2 inline-flex rounded-full px-2 py-1 text-xs font-semibold"><?php echo e($category->name); ?>

                        </span>
                    </a>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
            </div>
            <p class="mb-4">
                <?php echo Str::limit($post->sub_title); ?>

            </p>
        </div>
        <div class="flex items-center gap-4">
            <img class="h-14 w-14 overflow-hidden rounded-full bg-zinc-300 object-cover md:object-fill text-[0]" src="<?php echo e($post->user->avatar); ?>" alt="<?php echo e($post->user->name()); ?>">
            <div>
                <span title="<?php echo e($post->user->name()); ?>" class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold"><?php echo e($post->user->name()); ?></span>
                <span class="block whitespace-nowrap text-sm font-medium font-semibold text-zinc-600">
                    <?php echo e($post->formattedPublishedDate()); ?></span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\filament\resources\views/vendor/filament-blog/components/feature-card.blade.php ENDPATH**/ ?>