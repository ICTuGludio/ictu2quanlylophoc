<?php if(isset($lop)): ?>
	<?php $__env->startSection('title'); ?>
		Dánh sách sinh viên  
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
					<form method="post" action="<?php echo e(URL::action('LopHocController@timsvMoi')); ?>">
						<input type=hidden name=_token value=<?php echo e(csrf_token()); ?> />
						<div class="col-xs-12">
								<div class="form-inline text-center filter">
									<input type="hidden" name="su_id" value="926" id="su_id">
									
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
			<div class="widget-title"><h3><div class="text-bold text-uppercase text-center">Danh sách sinh viên chưa phân lớp</div></h3></div>
		<div class="widget-body">
		<form method="post" action="<?php echo e(URL::action('LopHocController@phanlop')); ?>">
		<input type=hidden name=_token value=<?php echo e(csrf_token()); ?> />
		<table class="table table-condensed table-hover table-bordered">
		
			<thead>
				<tr class="">
					<th width="50" class="text-center">STT</th>
					<th class="text-center">Mã SV</th>
					<th class="text-center">Họ tên</th>
					<th class="text-center">Ngày sinh</th>
					<th class="text-center">Lớp</th>
					<th class="text-center">Chọn</th>
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
							<th class="text-center"></th>
							<th class="text-center"><input type="checkbox" name="checkedsv[]" value="<?php echo e($sv->masv); ?>"/></th>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php endif; ?>
				
			</thead>
			
		</table>
		<table class="table table-condensed table-hover table-bordered">
				<tr class="">
					<th width="50" class="text-center"></th>
					<th class="text-center">
							<div class="form-group" id="sidebar-term">
							<select class="form-control input-sm" name="phanlopid">
								<option value="0" >--Chọn Lớp--</option>				
								<?php if(!isset($dslop) || count($dslop) === 0): ?>
									I have no record!
								<?php else: ?>			
									<?php $__currentLoopData = $dslop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lop1): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>											
											<option value="<?php echo e($lop1->lopid); ?>"><?php echo e($lop1->tenlop); ?></option>									
										
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>					
								<?php endif; ?>
							</select>
						</div>
						<th class="text-left"><input type="submit" name="add" value="Thêm vào lớp"/></th>
						
					</th>
				</tr>
		</table>
		</form>
	</div>
</div>			
		
</div>

   
<?php $__env->stopSection(); ?>			
		
					

<?php echo $__env->make('layoutQLLH.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>