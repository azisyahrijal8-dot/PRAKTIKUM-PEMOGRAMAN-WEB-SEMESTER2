
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center">
  <div class="card mb-3" style="max-width: 540px; width:100%;">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
        <img src="<?php echo e(asset('storage/' . ($row->foto ?? 'profile.jpg'))); ?>"
             class="img-fluid rounded img-thumbnail"
             alt="..."
             width="180">
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fw-bold border-bottom pb-2 mb-3">Detail Staff</h5>
          <p class="card-text">Nama: <?php echo e($row->name); ?></p>
          <p class="card-text">NIP: <?php echo e($row->nip); ?></p>
          <p class="card-text">Jenis Kelamin: <?php echo e($row->gender); ?></p>
          <p class="card-text">Email: <?php echo e($row->email); ?></p>
          <p class="card-text">Alamat: <?php echo e($row->alamat); ?></p>

          <hr/>

          <a href="<?php echo e(url('/staff')); ?>" class="btn btn-primary">
            Back
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/staff/show.blade.php ENDPATH**/ ?>