
   <h2 style="background-color:#990099;color:white;padding:5px;">eICTuClassmatersBirhday - Sinh nhật bạn cùng lớp</h3>
 
   <table cellspacing=5 cellpadding=5>
			
				<tr><th align="left" colspan=4 >30 ngày sắp tới sinh nhật của các bạn lớp mình có:</th></tr>
				@if (count($sinhviens) === 0)
					I have no record!
				@else
					@foreach ($sinhviens as $sv)						
						<tr >
							<th align="left">{{ $loop->iteration }}.</th>
							<th align="left">{{ $sv->masv }}</th>
							<th align="left">{{ $sv->hoten }}</th>
							<th align="left">{{ $sv->ngaysinh }}</th>
						</tr>
					@endforeach
				@endif
		
			
		</table>
		
		



		
					
