
   <h2 style="background-color:#990099;color:white;padding:5px;">eICTUStudentJoinClass - Thêm sinh viên vào lớp học</h3>
  Danh sách Sinh viên trúng tuyển chưa phân lớp.
   <table cellspacing=5 cellpadding=5>
			
				<tr><th align="left" colspan=3 >Nhấn vào tên sinh viên để thêm vào lớp {{ $lop->tenlop }}</th></tr>
				@if (count($sinhviens) === 0)
					I have no record!
				@else
					@foreach ($sinhviens as $sv)						
						<tr >
							<th align="left"  >{{ $loop->iteration }}.</th>
							<th align="left">{{ $sv->masv }}</th>
							<th align="left"><a style="text-decoration:none; color:black" href="{{ URL::to('/plop/') }}/{{ $lop->lopid }}/{{ $sv->masv }}">{{ $sv->hoten }}</a></th>
						</tr>
					@endforeach
				@endif
		
			
		</table>
		<form method="get" action="{{ URL::to('/lop/') }}/{{ $lop->lopid }}">
		<center><button type=submit  >Đóng</button></center>
		</form>



		
					
