<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' =>'Firefly Blog', 'logo' => null] ));

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

foreach (array_filter((['title' =>'Firefly Blog', 'logo' => null] ), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<header @click.outside="showSearchModal = false" x-data="{ showSearchModal: false }" class="sticky top-0 z-[94035] mb-4">
    <div class="py-4 bg-white border-b">
        <div class="container mx-auto">
            <div class="flex justify-between gap-x-4">
                <div class="flex items-center gap-x-10">
                    <a href="<?php echo e(config('filamentblog.route.home.url') ?? config('app.url')); ?>">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($logo): ?>
                        <img src="<?php echo e($logo); ?>" alt="<?php echo e($title); ?>" class="max-h-[60px]" />
                        <?php else: ?>
                        <strong class="text-2xl  text-primary-600">
                            <?php echo e($title ?: 'Firefly Blog'); ?>

                        </strong>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </a>
                    <div class="hidden gap-x-10 sm:flex">
                        <a href="<?php echo e(route('filamentblog.post.index')); ?>" class="font-semibold text-md hover:text-primary-600">
                            <span><?php echo e(__('filament-blog::blog-views.components.header.blogs')); ?></span>
                        </a>
                        <div class="relative group">
                            <button class="flex items-center justify-center font-semibold text-md hover:text-primary-600 gap-x-2">
                                <span><?php echo e(__('filament-blog::blog-views.components.header.categories')); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6" />
                                </svg>
                            </button>
                            <div class="absolute right-1 group-hover:pointer-events-auto top-[calc(100%)] origin-left pt-2 opacity-0 pointer-events-none transition will-change-transform lg:left-[50%] lg:right-auto lg:translate-x-[-50%] group-hover:opacity-100">
                                <?php if (isset($component)) { $__componentOriginal9d5d16fea7972b9b7a75ca248d84ac53 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d5d16fea7972b9b7a75ca248d84ac53 = $attributes; } ?>
<?php $component = Firefly\FilamentBlog\Components\HeaderCategory::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-header-category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Firefly\FilamentBlog\Components\HeaderCategory::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d5d16fea7972b9b7a75ca248d84ac53)): ?>
<?php $attributes = $__attributesOriginal9d5d16fea7972b9b7a75ca248d84ac53; ?>
<?php unset($__attributesOriginal9d5d16fea7972b9b7a75ca248d84ac53); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d5d16fea7972b9b7a75ca248d84ac53)): ?>
<?php $component = $__componentOriginal9d5d16fea7972b9b7a75ca248d84ac53; ?>
<?php unset($__componentOriginal9d5d16fea7972b9b7a75ca248d84ac53); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center ml-auto gap-x-10">
                    <form action="<?php echo e(route('filamentblog.post.search')); ?>" method="GET">
                        <div class="relative">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 -translate-y-1/2 pointer-events-none left-5 top-1/2 text-slate-500" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="11.5" cy="11.5" r="9.5" />
                                        <path stroke-linecap="round" d="M18.5 18.5L22 22" />
                                    </g>
                                </svg>
                                <input placeholder="<?php echo e(__('filament-blog::blog-views.components.header.search')); ?>" type="text" name="query" value="<?php echo e(request()->get('query')); ?>" class="w-full px-6 py-3 pl-12 text-sm font-medium text-gray-800 placeholder-gray-400 border rounded-full outline-none bg-white/10 placeholder:text-slate-500 focus:ring-0" />
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['query'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-xs text-red-500"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\filament\resources\views/vendor/filament-blog/components/header.blade.php ENDPATH**/ ?>