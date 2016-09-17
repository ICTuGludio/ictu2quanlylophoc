
   <h2 style="background-color:#990099;color:white;padding:5px;">eICTUclassstudentList - Sinh viên trong lớp học</h3>
   <a href="{{ URL::to('/plop/') }}/{{ $lop->lopid }}" style=" text-decoration:none;"><img src="{{ URL::asset('assets/image/li.png') }}" />
    THÊM SINH VIÊN VÀO LỚP</a>
   <table cellspacing=5 cellpadding=5>
			
				<tr><th align="left" colspan=3 >Danh sách sinh viên lớp {{ $lop->tenlop }}</th></tr>
				@if (count($sinhviens) === 0)
					I have no record!
				@else
					@foreach ($sinhviens as $sv)						
						<tr >
							<th align="left"  >{{ $loop->iteration }}.</th>
							<th align="left">{{ $sv->masv }}</th>
							<th align="left">{{ $sv->hoten }}</th>
						</tr>
					@endforeach
				@endif
		
			
		</table>
		
		



		
					
