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
            <?php echo e(__('My Books')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container mx-auto px-4 py-6">
        <?php if(session('success')): ?>
            <div style="color: green;"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <a href="<?php echo e(route('books.create')); ?>" class="text-blue-500 underline mb-4 inline-block">➕ Add Book</a>

        <?php if($books->count()): ?>
            <table cellpadding="8" cellspacing="0" class="mt-4 w-full border">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border border-gray-300">Title</th>
                        <th class="px-4 py-2 border border-gray-300">Author</th>
                        <th class="px-4 py-2 border border-gray-300">Published</th>
                        <th class="px-4 py-2 border border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-t text-left">
                            <td class="px-4 py-2 border border-gray-300"><?php echo e($book->title); ?></td>
                            <td class="px-4 py-2 border border-gray-300"><?php echo e($book->author); ?></td>
                            <td class="px-4 py-2 border border-gray-300"><?php echo e($book->published_year); ?></td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="text-indigo-600">✏️ Edit</a>
                                <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 ml-2">🗑 Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <div class="mt-4">
                <?php echo e($books->links()); ?>

            </div>
        <?php else: ?>
            <p>No books yet.</p>
        <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\dashboard\books\resources\views/books/index.blade.php ENDPATH**/ ?>