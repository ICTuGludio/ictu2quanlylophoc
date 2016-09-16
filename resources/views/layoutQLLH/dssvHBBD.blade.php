@extends('layoutQLLH.main')

@if (isset($lop))
	@section('title')
		Dánh sách các bạn sẽ sinh nhật trong 30 ngày tới {{ $lop->tenlop }} 
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
					<form method="post" action="{{URL::action('LopHocController@timsvTrongLop')}}">
						<input type=hidden name=_token value={{csrf_token()}} />
						<div class="col-xs-12">
								<div class="form-inline text-center filter">
									<input type="hidden" name="lopid" value="{{ $lop->lopid }}">
									
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
			<div class="widget-title"><h3><div class="text-bold text-uppercase text-center"> Các bạn lớp {{ $lop->tenlop }} sẽ sinh nhật trong 30 ngày tới</div></h3></div>
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
				@if (count($sinhviens) === 0)
					I have no record!
				@else
					@foreach ($sinhviens as $sv)						
						<tr class="">
							<th width="50" class="text-center">{{ $loop->iteration }}</th>
							<th class="text-center">{{ $sv->masv }}</th>
							<th class="text-center">{{ $sv->hoten }}</th>
							<th class="text-center">{{ $sv->ngaysinh }}</th>							
							<th class="text-center">{{ $lop->tenlop }}</th>
						</tr>
					@endforeach
				@endif
			</thead>
			
		</table>
	</div>
</div>				
		
		</div>
	
   
@endsection			
		
					
