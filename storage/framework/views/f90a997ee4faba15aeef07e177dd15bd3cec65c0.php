<?php $__env->startSection('sub-judul','Tag'); ?>
<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success')): ?>
  	<div class="alert alert-success" role="alert">
      <?php echo e(Session('success')); ?>

	</div> 
	<?php endif; ?>

	<a href="<?php echo e(route('tag.create')); ?>" class="btn btn-info btn-sm">Tambah Tag</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Tag</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($result + $tag->firstitem()); ?></td>
				<td><?php echo e($hasil->name); ?></td>
				<td>
					<form action="<?php echo e(route('tag.destroy', $hasil->id )); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<?php echo method_field('delete'); ?>
					<a href="<?php echo e(route('tag.edit', $hasil->id )); ?>" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</tbody>
	</table>
	<?php echo e($tag->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN\resources\views/admin/tag/index.blade.php ENDPATH**/ ?>