<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::table('lop')->insert(['tenlop' => 'CNTTK11A']);
		DB::table('lop')->insert(['tenlop' => 'CNTTK11B']);
		DB::table('lop')->insert(['tenlop' => 'CNTTK11C']);
		DB::table('lop')->insert(['tenlop' => 'KTPMK11A']);
		
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4801030016', 'hoten' => 'Trịnh Văn Hải','ngaysinh' => '1994-10-1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010016', 'hoten' => 'Đoàn Thị Huệ','ngaysinh' => '1993-11-12']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010026', 'hoten' => 'Trần Đăng Khoa','ngaysinh' => '1994-7-1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010001', 'hoten' => 'Hoàng Ngọc Anh','ngaysinh' => '1994-11-11']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010053', 'hoten' => 'Cao Văn Trung','ngaysinh' => '1990-4-4']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010004', 'hoten' => 'Nguyễn Ngọc Chiến','ngaysinh' => '1993-9-15']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010007', 'hoten' => 'Lê Trung Dũng','ngaysinh' => '1993-2-2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010046', 'hoten' => 'Nguyễn Thị Phương Thảo','ngaysinh' => '1994-6-17']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010056', 'hoten' => 'Dương Văn Tùng','ngaysinh' => '1994-9-23']);
		DB::table('sinhvien')->insert(['masv' =>'DTC135D4802010018', 'hoten' => 'Đoàn Đức Mạnh','ngaysinh' => '1994-6-12']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010043', 'hoten' => 'Ngô Xuân Tài','ngaysinh' => '1994-11-19']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010025', 'hoten' => 'Nguyễn Duy Khánh','ngaysinh' => '1994-4-5']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010010', 'hoten' => 'Nguyễn Thị Hà Giang	','ngaysinh' => '1993-9-11']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010018', 'hoten' => 'Trần Văn Hùng','ngaysinh' => '1994-9-21']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010049', 'hoten' => 'Bàng Văn Tiến','ngaysinh' => '1994-3-26']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010061', 'hoten' => 'Vũ Ngọc Tuyên','ngaysinh' => '1994-3-1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010024', 'hoten' => 'Nguyễn Hữu Khang','ngaysinh' => '1994-1-14']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010027', 'hoten' => 'Nguyễn Hữu Kiên','ngaysinh' => '1994-1-2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010029', 'hoten' => 'Trần Thị Lan','ngaysinh' => '1994-2-3']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010044', 'hoten' => 'Nguyễn Quyết Thắng','ngaysinh' => '1994-11-16']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010051', 'hoten' => 'Hoàng Thị Trang','ngaysinh' => '1994-6-8']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010005', 'hoten' => 'Hoàng Thị Cúc','ngaysinh' => '1994-8-25']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010006', 'hoten' => 'Nguyễn Thị Dung','ngaysinh' => '1994-6-12','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010017', 'hoten' => 'Nguyễn Thế Hùng','ngaysinh' => '1994-4-6','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010020', 'hoten' => 'Đặng Thị Hương','ngaysinh' => '1993-5-1','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010023', 'hoten' => 'Đỗ Văn Khang','ngaysinh' => '1993-3-10','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010032', 'hoten' => 'Triệu Bùi Nam','ngaysinh' => '1994-6-24','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010048', 'hoten' => 'Nông Thị Thuý','ngaysinh' => '1994-9-26','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010150', 'hoten' => 'Nguyễn Văn Khoa','ngaysinh' => '1994-1-9','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010028', 'hoten' => 'Đinh Trường Lam','ngaysinh' => '1994-10-21','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010057', 'hoten' => 'Nguyễn Quang Tùng','ngaysinh' => '1994-12-1','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010019', 'hoten' => 'Vũ Thế Hùng','ngaysinh' => '1994-6-14','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010033', 'hoten' => 'Lê Trọng Nghĩa','ngaysinh' => '1994-12-7','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010060', 'hoten' => 'Hoàng Thị Thuý Tuyên	','ngaysinh' => '1993-10-20','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010151', 'hoten' => 'Nguyễn Thị Ngoan','ngaysinh' => '1994-5-21','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010047', 'hoten' => 'Trần Thu Thảo','ngaysinh' => '1994-4-1','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010055', 'hoten' => 'Đàm Văn Tuấn','ngaysinh' => '1994-11-13','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010193', 'hoten' => 'Đào Thanh Tùng','ngaysinh' => '1994-6-26','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010059', 'hoten' => 'Trần Thị Hồng Tươi','ngaysinh' => '1994-5-9','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010012', 'hoten' => 'Nguyễn Thị Hảo','ngaysinh' => '1993-6-6','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010013', 'hoten' => 'Ma Trung Hiếu','ngaysinh' => '1988-1-2','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010036', 'hoten' => 'Trần Mạnh Ninh','ngaysinh' => '1994-1-19','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010014', 'hoten' => 'Phạm Thị Hoa','ngaysinh' => '1994-8-4','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010058', 'hoten' => 'Phạm Mạnh Tùng','ngaysinh' => '1994-12-19','lopid' => '1']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010069', 'hoten' => 'Đào Duy Cường','ngaysinh' => '1993-3-13','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010085', 'hoten' => 'Hà Quang Hưng','ngaysinh' => '1994-9-28','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010090', 'hoten' => 'Trần Ngọc Khánh','ngaysinh' => '1994-9-13','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010094', 'hoten' => 'Giáp Văn Lộc','ngaysinh' => '1994-8-25','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010077', 'hoten' => 'Bùi Văn Giáp','ngaysinh' => '1994-4-15','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010098', 'hoten' => 'Dương Thị Hồng Ngọc','ngaysinh' => '1993-6-12','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010110', 'hoten' => 'Nguyễn Trọng Thành','ngaysinh' => '1994-11-9','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010091', 'hoten' => 'Đinh Trọng Khôi','ngaysinh' => '1994-8-9','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC1151200642', 'hoten' => 'Lý Thái Quang','ngaysinh' => '1993-9-14','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010089', 'hoten' => 'Ngô Văn Huynh','ngaysinh' => '1993-2-28','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010092', 'hoten' => 'Triệu Thanh Lam','ngaysinh' => '1994-11-20','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010084', 'hoten' => 'Nguyễn Lương Hùng','ngaysinh' => '1993-7-5','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010106', 'hoten' => 'Quách Thái Sơn','ngaysinh' => '1993-8-1','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4801030007', 'hoten' => 'Cao Tiến Cường','ngaysinh' => '1991-3-6','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010088', 'hoten' => 'Trần Quang Huy','ngaysinh' => '1994-5-22','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010166', 'hoten' => 'Đoàn Văn Quốc','ngaysinh' => '1992-2-2','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010107', 'hoten' => 'Trần Trung Sơn','ngaysinh' => '1994-10-13','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010120', 'hoten' => 'Ngô Văn Tùng','ngaysinh' => '1994-7-3','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010071', 'hoten' => 'Dương Văn Dũng','ngaysinh' => '1994-8-9','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010162', 'hoten' => 'Trần Xuân Tới','ngaysinh' => '1994-6-14','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010065', 'hoten' => 'Hoàng Quốc Bảo','ngaysinh' => '1994-9-30','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4801040002', 'hoten' => 'Nguyễn Đức Đại','ngaysinh' => '1993-3-14','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010078', 'hoten' => 'Vũ Ngọc Hà','ngaysinh' => '1994-10-3','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010039', 'hoten' => 'Lý Văn Quyền','ngaysinh' => '1993-8-8','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010112', 'hoten' => 'Nguyễn Thị Thoa','ngaysinh' => '1994-8-8','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010113', 'hoten' => 'Hoàng Văn Thương','ngaysinh' => '1993-3-5','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010075', 'hoten' => 'Nguyễn Lập Đức','ngaysinh' => '1994-1-1','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010123', 'hoten' => 'Nguyễn Thị Vân','ngaysinh' => '1994-12-19','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010076', 'hoten' => 'Nguyễn Trung Đức','ngaysinh' => '1994-3-2','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010103', 'hoten' => 'Bùi Thị Quyên','ngaysinh' => '1994-9-11','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010114', 'hoten' => 'Nguyễn Quy Toàn','ngaysinh' => '1994-11-10','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010122', 'hoten' => 'Ninh Văn Tuyên','ngaysinh' => '1992-5-1','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010068', 'hoten' => 'Nguyễn Thị Chinh','ngaysinh' => '1994-10-3','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D3404050020', 'hoten' => 'Phạm Trường Giang','ngaysinh' => '1994-1-20','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010079', 'hoten' => 'Phan Thu Hằng','ngaysinh' => '1994-8-17','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010096', 'hoten' => 'Từ Thị Mận','ngaysinh' => '1994-2-11','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010152', 'hoten' => 'Lê Tràng Thắng','ngaysinh' => '1994-1-30','lopid' => '2']);
		DB::table('sinhvien')->insert(['masv' =>'DTC125D4802010115', 'hoten' => 'Phùng Huyền Trang','ngaysinh' => '1994-7-31','lopid' => '2']);
	}
}
