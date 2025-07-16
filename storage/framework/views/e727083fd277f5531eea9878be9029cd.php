<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Edit Book')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12 max-w-4xl mx-auto px-4">
        <?php if($errors->any()): ?>
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-5">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div>
                <label class="block font-medium">Title:</label>
                <input type="text" name="title" value="<?php echo e(old('title', $book->title)); ?>" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Author:</label>
                <input type="text" name="author" value="<?php echo e(old('author', $book->author)); ?>" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Published Year:</label>
                <input type="number" name="published_year" value="<?php echo e(old('published_year', $book->published_year)); ?>" class="border rounded w-full px-3 py-2">
            </div>

            <div>
                <label class="block font-medium">Description:</label>
                <textarea name="description" class="border rounded w-full px-3 py-2"><?php echo e(old('description', $book->description)); ?></textarea>
            </div>

            <div>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">💾 Update Book</button>
            </div>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dashboard\books\resources\views/books/edit.blade.php ENDPATH**/ ?>