<?php
	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Redirect;
	class LopHocController extends Controller
	
	{
		// Liệt kê danh sách các lớp học
		function index()
		{
			$lops =  DB::table('lop')->select('tenlop','lopid')->get();
			return view('layoutQLLH.trangchu',['dslop'=>$lops]);
		}
		
		// tạo view trang phân lớp cho sinh viên
		function uiphanlop($lopid)
		{
			$lop= DB::table('lop')->select('tenlop','lopid')->where('lopid', '=', $lopid)->get()->first();
			$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', null)->get();
			return view('layoutQLLH.phanlop',['sinhviens' => $sinhviens,'lop'=>$lop]);
			
		}
		//Tìm sinh viên giới hạn trong 1 lớp
		function timsvTrongLop(Request $request)
		{		
			$allrq = $request->all();
			$search = $allrq['htsv'];
			$search = trim($search);
			$lopid = trim($allrq['lopid']);
			$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', $lopid)->where('hoten', 'like', '%'.$search.'%')->get();
			$dslop =  DB::table('lop')->select('tenlop','lopid')->get();
			$lop= DB::table('lop')->select('tenlop','lopid')->where('lopid', '=', $lopid)->get()->first();				
			return view('layoutQLLH.dssvtronglop',['sinhviens' => $sinhviens,'lop'=>$lop,'dslop'=>$dslop]);

		}
		//Tìm sinh viên mới
		function timsvMoi(Request $request)
		{		
			$allrq = $request->all();
			$search = $allrq['htsv'];
			$search = trim($search);
			$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', null)->where('hoten', 'like', '%'.$search.'%')->get();
			$dslop =  DB::table('lop')->select('tenlop','lopid')->get();
			return view('layoutQLLH.phanlop',['sinhviens' => $sinhviens,'dslop'=>$dslop]);

		}
		function phanlop($lopid,$masv)
		{
			//$dslop =  DB::table('lop')->select('tenlop','lopid')->get();
			//$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', null)->get();
			//return view('layoutQLLH.phanlop',['sinhviens' => $sinhviens,'dslop'=>$dslop]);
			
			//$lopid = Input::get('phanlopid');
			
				DB::table('sinhvien')
					->where('masv', $masv)
					->update(['lopid' => $lopid]);
			
			return Redirect::back()->with('msg', 'Phân lớp xong');
		}
		
		//function dssvTrongLop($lopid) liệt kê d/s sinh viên trong lớp, lớp có mã lớp là $lopid
		function dssvTrongLop($lopid)
		{
			$dslop =  DB::table('lop')->select('tenlop','lopid')->get();
			$lop= DB::table('lop')->select('tenlop','lopid')->where('lopid', '=', $lopid)->get()->first();	
			$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', $lopid)->get();
			
			return view('layoutQLLH.dssvtronglop',['sinhviens' => $sinhviens,'lop'=>$lop,'dslop'=>$dslop]);
		}
		
		//function dssvHBBD($lopid,$hbbd) tìm các bạn sinh viên sẽ sinh nhật trong 30 ngày tới
		function dssvHBBD($lopid)
		{
			
			$dslop =  DB::table('lop')->select('tenlop','lopid')->get();
			$lop= DB::table('lop')->select('tenlop','lopid')->where('lopid', '=', $lopid)->get()->first();	
			
			$begin_date=date('Y-m-d');
			$stop_date = date('Y-m-d', strtotime( "$begin_date + 30 day" ));
			$begin=explode("-", $begin_date);
			$stop=explode("-", $stop_date);
			
			if($begin[1]==$stop[1])
			{
				//tim trong mot thang
				
				$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')->where('lopid', '=', $lopid)
							->where(function ($query)use ($lopid,$begin,$stop) {
								$query->whereDay('ngaysinh', '>=', $begin[2])
									  ->whereMonth('ngaysinh', '=', $begin[1]);
							})->get();
				return view('layoutQLLH.dssvHBBD',['sinhviens' => $sinhviens,'lop'=>$lop,'dslop'=>$dslop]);
				
			}elseif($begin[1]==$stop[1]-1 ||$begin[1]==12 && $stop[1]==1 )
			{
				// tim trong doan 2 thang ke tiep				
								
				$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')
				->where(function ($query) use ($lopid,$begin,$stop){
							$query->whereMonth('ngaysinh', '=', $begin[1])
									->whereDay('ngaysinh', '>=', $begin[2]);
						})
				->orwhere(function ($query) use ($lopid,$begin,$stop){
														
									$query->whereMonth('ngaysinh', '=', $stop[1])									
									->whereDay('ngaysinh', '<=', $stop[2]);
						})
				->where('lopid', '=', $lopid)
				->get();
				
				return view('layoutQLLH.dssvHBBD',['sinhviens' => $sinhviens,'lop'=>$lop,'dslop'=>$dslop]);
				
			}else
			{
				//Tim trong 3 thang
				$sinhviens =  DB::table('sinhvien')->select('masv','hoten', 'ngaysinh')
				->where(function ($query) use ($lopid,$begin,$stop){
							$query->whereMonth('ngaysinh', '=', $begin[1])
									->whereDay('ngaysinh', '>=', $begin[2]);
						})
				->orwhere(function ($query) use ($lopid,$begin,$stop){
														
									$query->whereMonth('ngaysinh', '=', $stop[1])									
									->whereDay('ngaysinh', '<=', $stop[2]);
						})
				->orwhere(function ($query) use ($lopid,$begin,$stop){
														
									$query->whereMonth('ngaysinh', '=', $stop[1]-1);
						})		
				->where('lopid', '=', $lopid)
				->get();
				
				return view('layoutQLLH.dssvHBBD',['sinhviens' => $sinhviens,'lop'=>$lop,'dslop'=>$dslop]);
			}
			
		}
	}
	
?>