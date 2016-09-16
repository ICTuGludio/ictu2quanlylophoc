<?php if(isset($lop)): ?>
	<?php $__env->startSection('title'); ?>
		Dánh sách các bạn sẽ sinh nhật trong 30 ngày tới <?php echo e($lop->tenlop); ?> 
	<?php $__env->stopSection(); ?>		
<?php endif; ?>

<?php $__env->startSection('content'); ?>
   
   <div class="main-content" style="padding-top:20px">
	<div class="row">
		<div class="col-xs-9 main-col">
			<div class="widget">
				<div class="well">
				<div class="widget-body">
					<div class="row">
					<form method="post" action="<?php echo e(URL::action('LopHocController@timsvTrongLop')); ?>">
						<input type=hidden name=_token value=<?php echo e(csrf_token()); ?> />
						<div class="col-xs-12">
								<div class="form-inline text-center filter">
									<input type="hidden" name="lopid" value="<?php echo e($lop->lopid); ?>">
									
									<div class="form-group" id="su-type-term">
										<input type="text" name="htsv" value="" placeholder="Nhập họ tên sinh viên">
									</div>
									<div class="form-group">
										<input type="submit" value="Tìm kiếm" class="btn btn-primary">
									</div>
								</div>
						</div>
					</form>
					</div>
				</div>
				</div>
			</div>
		<div class="widget">
			<div class="widget-title"><h3><div class="text-bold text-uppercase text-center"> Các bạn lớp <?php echo e($lop->tenlop); ?> sẽ sinh nhật trong 30 ngày tới</div></h3></div>
		<div class="widget-body">
		<table class="table table-condensed table-hover table-bordered">
			<thead>
				<tr class="">
					<th width="50" class="text-center">STT</th>
					<th class="text-center">Mã SV</th>
					<th class="text-center">Họ tên</th>
					<th class="text-center">Ngày sinh</th>
					<th class="text-center">Lớp</th>
				</tr>
				<?php if(count($sinhviens) === 0): ?>
					I have no record!
				<?php else: ?>
					<?php $__currentLoopData = $sinhviens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sv): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>						
						<tr class="">
							<th width="50" class="text-center"><?php echo e($loop->iteration); ?></th>
							<th class="text-center"><?php echo e($sv->masv); ?></th>
							<th class="text-center"><?php echo e($sv->hoten); ?></th>
							<th class="text-center"><?php echo e($sv->ngaysinh); ?></th>							
							<th class="text-center"><?php echo e($lop->tenlop); ?></th>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php endif; ?>
			</thead>
			
		</table>
	</div>
</div>				
		
		</div>
	
   
<?php $__env->stopSection(); ?>			
		
					

<?php echo $__env->make('layoutQLLH.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>