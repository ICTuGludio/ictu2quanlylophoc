<?php $__env->startSection('title', 'Dánh sách sinh viên mới chưa có lớp' ); ?>

<?php $__env->startSection('sidebar'); ?>
    @parent

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>    
		<form method="post" action="<?php echo e(URL::action('LopHocController@timsvMoi')); ?>">
		<input type=hidden name=_token value=<?php echo e(csrf_token()); ?> />
		Tìm sinh viên mới<input placeholder="họ tên sinh viên" type=text name=htsv />
		<button type="submit" name='ok'  >Tìm</button>
		</form>

	<?php if(count($sinhviens) === 0): ?>
		I have no record!
	<?php else: ?>
		<?php $__currentLoopData = $sinhviens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sv): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<p><input type=checkbox ><?php echo e($sv->masv); ?>---<?php echo e($sv->hoten); ?>---<?php echo e($sv->ngaysinh); ?></</p>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutQLLH.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>