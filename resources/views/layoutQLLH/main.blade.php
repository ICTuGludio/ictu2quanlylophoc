<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Quản Lý Lớp học </title>
	
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap-plugin.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/non-responsive.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap-select.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/slick-theme.css') }}">
		<style type="text/css"></style>
</head>	
	<body class="container my-container">	
		<div class="wrapper">
			<header class="header">
				
				<div class="row">
					<div class="col-xs-9">
						<div class="logo">
							<a href="#" title="Trường ĐH CNTT và TT">
							<img src="{{ URL::asset('assets/image/logo-2.png') }}" class="img-logo">
							</a>
						</div>
					</div>
					<div class="col-xs-3 text-right">
							<img src="{{ URL::asset('assets/image/logodoanhoi.png') }}">
					</div>
				</div>
			<nav class="navbar main-navbar">
				<div id="navbar-main" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{URL::action('LopHocController@index')}}">Trang chủ</a></li>
						<li class="navbar-dropdown"><a href="#">GIỚI THIỆU</a></li>
						<li class="navbar-dropdown"><a href="#">ĐÀO TẠO</a></li>
						<li class="navbar-dropdown"><a href="#">SINH VIÊN</a></li>
						<li class="navbar-dropdown"><a href="#">QUY ĐỊNH</a></li>
						<li class="navbar-dropdown"><a href="#">TRỢ GIÚP</a></li>
					</ul>
				</div>
			</nav>			
			</header>	
			<!--content-->
		 @yield('content')	
	
<!--menu right-->
<div class="col-xs-3" style="margin-left: -15px;padding-right: 0px; padding-left: 0;">
						
<div class="widget">			

				
	<div class="widget-title text-center">
		<h3 class="title-sm text-uppercase">Danh Sách Lớp Học</h3>
	</div>
	<div class="widget-body">
		<form action=" {{ URL::to('/lop') }}" role="form" method="get">
			<input type="hidden" name="su_id" value="" id="sidebar-su_id">
			<div class="form-group" id="sidebar-faculty">
				<select class="form-control input-sm">
					<option>--Khóa--</option>
										<option value="976">K10</option>
										<option value="982"selected="">K11</option>
										<option value="985">K12</option>
										<option value="990">K13</option>
										<option value="1002">K14</option>
										<option value="1005">K15</option>
								</select>
			</div>
			<div class="form-group" id="sidebar-term">
				<select class="form-control input-sm" id="lopid" onchange="xemdssv()">
				<option value="0" >--Chọn Lớp--</option>				
				@if (!isset($dslop) || count($dslop) === 0)
					I have no record!
				@else			
					@foreach ($dslop as $lop1)
						@if (isset($lop) && $lop1->lopid === $lop->lopid)
							<option value="{{ $lop1->lopid}}" selected>{{ $lop1->tenlop}}</option>	
						@else			
							<option value="{{ $lop1->lopid}}">{{ $lop1->tenlop}}</option>	
											
						@endif
						
					@endforeach					
				@endif
				</select>
			</div>
        
		</form>
		<a href="{{URL::action('LopHocController@phanlop')}}">Phân lớp sinh viên</a></br>
		@if(isset($lop))
		<a href="{{ URL::to('/lop/') }}/{{ $lop->lopid }}/hbbd">Sinh nhật bạn cùng lớp</a>
		@endif
		<script>
			function xemdssv()
			{
				
				var e = document.getElementById("lopid");
				var lopid = e.options[e.selectedIndex].value;
				if(lopid!='0')
				{
					var str="{{ URL::to('/lop/') }}/"+lopid;
					window.location.href = str;
				}
			}
		</script>
    
	</div>

	</div>
	</div>
	</div>
</div>
	
	
	
			<!--footer -->
		<footer class="footer">
			<div class="container">
			<div class="footer">
				<p class="text-sm">
					<a target="_blank" href="#" style="color: #fff">eICTU2.QL lớp học</a>
				</p>
			</div>
			</div>
		</footer>
	</div>			