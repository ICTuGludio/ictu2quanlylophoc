@extends('layoutQLLH.main')

@if (isset($lop))
	@section('title')
		Dánh sách sinh viên  
	@endsection		
@endif

@section('content')
  
   <div class="main-content" style="padding-top:20px">
	<div class="row">
		<div class="col-xs-9 main-col">
			<div class="widget">
				<div class="well">
				<div class="widget-body">
					<div class="row">
					<form method="post" action="{{URL::action('LopHocController@timsvMoi')}}">
						<input type=hidden name=_token value={{csrf_token()}} />
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
		<form method="post" action="{{URL::action('LopHocController@phanlop')}}">
		<input type=hidden name=_token value={{csrf_token()}} />
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
				@if (count($sinhviens) === 0)
					I have no record!
				@else
					@foreach ($sinhviens as $sv)						
						<tr class="">
							<th width="50" class="text-center">{{ $loop->iteration }}</th>
							<th class="text-center">{{ $sv->masv }}</th>
							<th class="text-center">{{ $sv->hoten }}</th>
							<th class="text-center">{{ $sv->ngaysinh }}</th>							
							<th class="text-center"></th>
							<th class="text-center"><input type="checkbox" name="checkedsv[]" value="{{ $sv->masv }}"/></th>
						</tr>
					@endforeach
				@endif
				
			</thead>
			
		</table>
		<table class="table table-condensed table-hover table-bordered">
				<tr class="">
					<th width="50" class="text-center"></th>
					<th class="text-center">
							<div class="form-group" id="sidebar-term">
							<select class="form-control input-sm" name="phanlopid">
								<option value="0" >--Chọn Lớp--</option>				
								@if (!isset($dslop) || count($dslop) === 0)
									I have no record!
								@else			
									@foreach ($dslop as $lop1)											
											<option value="{{ $lop1->lopid}}">{{ $lop1->tenlop}}</option>									
										
									@endforeach					
								@endif
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

   
@endsection			
		
					
