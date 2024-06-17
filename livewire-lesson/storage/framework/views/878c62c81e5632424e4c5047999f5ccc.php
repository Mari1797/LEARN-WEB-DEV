<div>

<form wire:submit="createNewUser" action="">
    <input wire:model="name" type="text" placeholder="name">
    <input wire:model="email" type="email" placeholder="email">
    <input wire:model="password" type="password" placeholder="password">
    <button>Create</button>
</form>

<hr>

<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e(user->name); ?></h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/Shared/LEARN WEB DEV/livewire-lesson/resources/views/livewire/clicker.blade.php ENDPATH**/ ?>