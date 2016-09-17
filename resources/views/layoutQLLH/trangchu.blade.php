Danh sách lớp:<br>
@if (!isset($dslop) || count($dslop) === 0)
					I have no record!
				@else			
					@foreach ($dslop as $lop1)
								
							<a href="{{ URL::to('/lop/') }}/{{ $lop1->lopid }}">{{ $lop1->tenlop}}</a>	<br>
											

						
					@endforeach					
				@endif


Sinh nhật bạn cùng lớp:<br>
@if (!isset($dslop) || count($dslop) === 0)
					I have no record!
				@else			
					@foreach ($dslop as $lop1)
								
							<a href="{{ URL::to('/snlop/') }}/{{ $lop1->lopid }}">{{ $lop1->tenlop}}</a>	<br>
											

						
					@endforeach					
				@endif