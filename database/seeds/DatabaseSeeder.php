<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $content = "Chăm chỉ với công việc, không mắc tệ nạn xã hội";
        DB::table('category')->insert([
            'title' => 'Kế toán',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Kiểm toán',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Thương mại điện tử',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Tài chính ngân hàng',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Quản trị kinh doanh',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Kinh tế tài chính',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Marketing',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Bảo hiểm',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Quảng cáo',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Quản trị nhân sự',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Chứng khoán',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Thanh toán quốc tế',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Vận tải',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Mỏ',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Địa chất',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Kĩ thuật điện',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Điện tử viễn thông',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Điều khiển tự động hóa',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Công nghệ thông tin',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Giáo dục tiểu học',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Nhiếp ảnh',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
         'title' => 'Quay phim',
         'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Trắc địa',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Bảo vệ',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Nhân viên bán hàng',
            'created_at' => new DateTime(),]);
        DB::table('category')->insert([
            'title' => 'Diễn viên đóng thế',
            'created_at' => new DateTime(),]);

        DB::table('users')->insert(
            [
                'id'=>'1',
                'username' => 'kt',
                'email' => 'ketoan@gmail.com',
                'password' => bcrypt('123456'),
                'fullname'=>'Nguyễn Thị Thành',
                'congty'=>'Hòa Phát',
                'dienthoai'=>'0981036562',
                'diachi'=>'Nam Định - Việt Nam',
                'quyen'=>'1',
                'nghe'=>'Kế toán',
                'created_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'id'=>'2',
            'username' => 'linhdt',
            'email' => 'kiemtoan@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Dương Trọng Linh',
            'congty'=>'ToanGroup',
            'dienthoai'=>'0981777222',
            'diachi'=>'Bắc Ninh - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Kiểm toán',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'3',
            'username' => 'hanguyen',
            'email' => 'thuongmaidientu@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Thị Hà',
            'congty'=>'Ecommerce',
            'dienthoai'=>'09724445566',
            'diachi'=>'Ninh Bình - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Thương mại điện tử',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'4',
            'username' => 'Phuc',
            'email' => 'taichinhnganhang1@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Xuân Phúc',
            'congty'=>'ViettinBack',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Tài chính ngân hàng',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'5',
            'username' => 'Hoa',
            'email' => 'taichinhnganhang2@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Lê Thị Hoa',
            'congty'=>'VietComBank',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Tài chính ngân hàng',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'6',
            'username' => 'Quỳnh',
            'email' => 'quantrikinhdoanh@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Vũ Mạnh Quỳnh',
            'congty'=>'BusiGroup',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Quản trị kinh doanh',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'7',
            'username' => 'Hương',
            'email' => 'kinhtetaichinh@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Hương',
            'congty'=>'FE',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Kinh tế tài chính',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'8',
            'username' => 'Mao',
            'email' => 'marketing@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Mao Đài',
            'congty'=>'MarketingABC',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Marketing',
            'created_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
            'id'=>'9',
            'username' => 'Thắm',
            'email' => 'baohiem1@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Văn Thắm',
            'congty'=>'Nhân Thọ',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Bảo hiểm',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'10',
            'username' => 'Hà',
            'email' => 'baohiem2@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Trần Thị Hà',
            'congty'=>'Phúc Lộc Thọ',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Bảo hiểm',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'11',
            'username' => 'Thanh',
            'email' => 'quangcao@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Vũ Văn Thanh',
            'congty'=>'QCTrongLinh',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Quảng cáo',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'12',
            'username' => 'Cường',
            'email' => 'quantrinhansu@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Vũ Mạnh Cường',
            'congty'=>'QTNS',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Quản trị nhân sự',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'13',
            'username' => 'Hà',
            'email' => 'chungkhoan@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Bùi Thị Hà',
            'congty'=>'CK',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Chứng khoán',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'14',
            'username' => 'Nhung',
            'email' => 'thanhtoanquocte@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Thị Nhung',
            'congty'=>'IPAY',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Thanh toán quốc tế',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'15',
            'username' => 'Uyên',
            'email' => 'vantai@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Vũ Thị Uyên',
            'congty'=>'Xuân Thành',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'vận tải',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'16',
            'username' => 'Tiến',
            'email' => 'mo@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Văn Tiến',
            'congty'=>'MineGroup',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Mỏ',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'17',
            'username' => 'Thức',
            'email' => 'diachat@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Trí Thức',
            'congty'=>'Geological',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Địa chất',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'18',
            'username' => 'Tâm',
            'email' => 'kithuatdien@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Đức Tâm',
            'congty'=>'EE',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Kĩ thuật điện',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'19',
            'username' => 'Đạt',
            'email' => 'dientuvienthong@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Tất Đạt',
            'congty'=>'FPT',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Điện tử viễn thông',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'20',
            'username' => 'Tuyến',
            'email' => 'dieukhientudonghoa@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Huy Tuyến',
            'congty'=>'AC',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Điều khiển tự động hóa',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'21',
            'username' => 'Hà',
            'email' => 'congnghethongtin1@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Thị Hà',
            'congty'=>'Topica',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Công nghệ thông tin',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'22',
            'username' => 'Linh',
            'email' => 'congnghethongtin2@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Dương Trọng Linh',
            'congty'=>'Framgia',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Công nghệ thông tin',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'23',
            'username' => 'Lương',
            'email' => 'giaoductieuhoc@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Hoàng Thị Kim Lương',
            'congty'=>'TH',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Giáo viên tiểu học',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'24',
            'username' => 'Loan',
            'email' => 'nhiepanh@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Lê Thúy Loan',
            'congty'=>'Marvel',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Nhiếp ảnh',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'25',
            'username' => 'An',
            'email' => 'quayphim1@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Lê Thị Thúy An',
            'congty'=>'Marvel',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Quay phim',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'26',
            'username' => 'Ngọc',
            'email' => 'quayphim2@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Ngọc Ngà',
            'congty'=>'Disney',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Quay phim',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'27',
            'username' => 'Tuyên',
            'email' => 'tracdia@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Nguyễn Văn tuyên',
            'congty'=>'KS',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Trắc địa',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'28',
            'username' => 'Mao',
            'email' => 'baove@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Mao Đài',
            'congty'=>'TH',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Bảo vệ',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'29',
            'username' => 'Thiện',
            'email' => 'nhanvienbanhang@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Đỗ Văn Thiện',
            'congty'=>'CityFun',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'1',
            'nghe'=>'Bảo vệ',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'30',
            'username' => 'adminDat',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Tất Đạt',
            'congty'=>'Topica',
            'dienthoai'=>'2222444441',
            'diachi'=>'Hà Nội - Việt Nam',
            'quyen'=>'2',
            'nghe'=>'Công nghệ thông tin',
            'created_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'id'=>'31',
            'username' => 'TatDat',
            'email' => 'phamtatdat241197@gmail.com',
            'password' => bcrypt('123456'),
            'fullname'=>'Phạm Tất Đạt',
            'quyen'=>'0',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'1',
            'title'=>'Nhân viên kế toán',
            'description'=>'Hòa Phát',
            'content'=>'Thật thà, chăm chỉ. Sử dụng thành thạo các công cụ Word, Exel, PowerPoint',
            'keywork'=>'Kế toán',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_1.jpg',
            'category_id'=>'1',
            'created_at'=>new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'1',
            'title'=>'Kế toán trưởng',
            'description'=>'Hòa Phát',
            'content'=>'Sử dụng thành thạo các công cụ Word, Excel, PP. Tính toán cẩn thận, chăm chỉ',
            'keywork'=>'Kế toán',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_2.jpg',
            'category_id'=>'1',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'2',
            'title'=>'Kiểm toán sổ sách',
            'description'=>'ToanGroup',
            'content'=>'Trung thực, thật thà, nghiên túc trong công việc',
            'keywork'=>'Kiểm toán',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_3.jpg',
            'category_id'=>'2',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'2',
            'title'=>'Quản lí xuất khẩu',
            'description'=>'ToảnGoup',
            'content'=>'Tính toán cẩn thận, trung thực với công việc',
            'keywork'=>'Kiểm toán',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_4.jpg',
            'category_id'=>'2',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'3',
            'title'=>'Nhân viên bán hàng',
            'description'=>'Ecommerce',
            'content'=>'Sáng sủa, nói năng lưu loát, tự tin khi giao tiếp',
            'keywork'=>'Thương mại điện tử',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_5.jpg',
            'category_id'=>'3',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'3',
            'title'=>'Thu ngân',
            'description'=>'Ecommerce',
            'content'=>'Tính toán cẩn thận, trung thực với công việc',
            'keywork'=>'Thương mại điện tử',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'01_6.jpg',
            'category_id'=>'3',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'4',
            'title'=>'Nhân viên thu ngân',
            'description'=>'ViettinBack',
            'content'=>'Giao tiếp tốt, trung thực với công việc',
            'keywork'=>'Tài chính ngân hàng',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'02.jpg',
            'category_id'=>'4',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'4',
            'title'=>'Bảo vệ',
            'description'=>'ViettinBack',
            'content'=>'Yêu cầu tập trung cao trong công việc',
            'keywork'=>'Tài chính ngân hàng',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'02_1.jpg',
            'category_id'=>'4',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'5',
            'title'=>'Nhân viên thu ngân',
            'description'=>'VietComBank',
            'content'=>'Giao tiếp tốt, trung thực với công việc',
            'keywork'=>'Tài chính ngân hàng',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_10.jpg',
            'category_id'=>'4',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'5',
            'title'=>'Bảo vệ',
            'description'=>'VietComBank',
            'content'=>'Trên 18 tuổi, tập trung cao độ trong công việc',
            'keywork'=>'Tài chính ngân hàng',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_1.jpg',
            'category_id'=>'4',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'6',
            'title'=>'Bán hàng',
            'description'=>'BusiGroup',
            'content'=>'Nói năng lưu loát, giao tiếp tốt.',
            'keywork'=>'Quản trị kinh doanh',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_2.jpg',
            'category_id'=>'5',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'7',
            'title'=>'Theo dõi giao dịch',
            'description'=>'FE',
            'content'=>'Trung thực, tự tin trong công việc',
            'keywork'=>'Kinh tế tài chính',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_3.jpg',
            'category_id'=>'6',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'8',
            'title'=>'Tiếp thị',
            'description'=>'MarketingABC',
            'content'=>'Ăn mặc gọn gàng, giao tiếp tốt với khách hàng',
            'keywork'=>'Marketing',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_4.jpg',
            'category_id'=>'7',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'9',
            'title'=>'Bán bảo hiểm',
            'description'=>'Nhân Thọ',
            'content'=>'Khéo miệng, dễ tạo thiện cảm cho khách hàng',
            'keywork'=>'Bảo hiểm',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_5.jpg',
            'category_id'=>'8',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'10',
            'title'=>'Giới thiệu sản phẩm',
            'description'=>'Phúc Lộc Thọ',
            'content'=>'Nói năng nhỏ nhẹ, hoàn thành tốt chỉ tiêu được giao',
            'keywork'=>'Bảo hiểm',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_6.jpg',
            'category_id'=>'8',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'11',
            'title'=>'In quảng cáo',
            'description'=>'QCTrongLinh',
            'content'=>'Thành thạo các công cụ chỉnh sửa ảnh, yêu nghề',
            'keywork'=>'Quảng cáo',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_7.jpg',
            'category_id'=>'9',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'12',
            'title'=>'Phó phòng đào tạo nguồn lực',
            'description'=>'PerGroup',
            'content'=>'Yêu cầu giao tiếp tốt. Dể làm lay động lòng người',
            'keywork'=>'Quản trị nhân sự',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_8.jpg',
            'category_id'=>'10',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'13',
            'title'=>'Theo dõi giao dịch',
            'description'=>'CK',
            'content'=>'Tập trung theo dõi biến động của thị trường chứng khoán.',
            'keywork'=>'Chứng khoán',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_9.jpg',
            'category_id'=>'11',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'14',
            'title'=>'Giao dịch',
            'description'=>'IPAY',
            'content'=>'Thành thạo các công cụ tin học văn phòng. Trung thực với công việc',
            'keywork'=>'Thanh toán quốc tế',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_GS-Nhung.jpg',
            'category_id'=>'12',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'15',
            'title'=>'Chở vật liệu',
            'description'=>'Xuân Trường',
            'content'=>'Có bằng lái xe hạng A1 trở lên. Không bia rượu trong quá trình làm việc',
            'keywork'=>'Vận tải',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_land.jpg',
            'category_id'=>'13',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert( [
            'user_id'=>'16',
            'title'=>'Đo thực địa',
            'description'=>'MineGroup',
            'content'=>'Biết đo đạc khoáng sản, thông thuộc mọi địa hình',
            'keywork'=>'Mỏ',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1a.jpg',
            'category_id'=>'14',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'17',
            'title'=>'Khảo sát thực địa',
            'description'=>'Geological',
            'content'=>'Sử dụng thành thạo các công cụ đo đạc. Bằng khá nhé',
            'keywork'=>'Địa chất',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1DSC_0032.jpg',
            'category_id'=>'15',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'3',
            'title'=>'Tuyển nhân viên',
            'description'=>'Xuân Thành',
            'content'=>$content,
            'keywork'=>'KT',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_land.jpg',
            'category_id'=>'1',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'18',
            'title'=>'Sửa chữa thiết bị',
            'description'=>'EE',
            'content'=>'Biết được các nguyên lí hoạt động về mạch điện',
            'keywork'=>'Kĩ thuật điện',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1_H1_resize.jpg',
            'category_id'=>'16',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'19',
            'title'=>'Lắp đặt cáp quang',
            'description'=>'FPT',
            'content'=>'Không cần trình độ, Không sợ độ cao, sức khỏe tốt',
            'keywork'=>'Điện tử viễn thông',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'1ha-van-tham.jpg',
            'category_id'=>'17',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'19',
            'title'=>'Nhân viên bán hàng',
            'description'=>'FPT',
            'content'=>'Nói năng lưu loát, sáng sủa',
            'keywork'=>'Điện tử viễn thông',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2.jpg',
            'category_id'=>'17',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'20',
            'title'=>'Giám sát hoạt động máy móc',
            'description'=>'AC',
            'content'=>'Tập trung trong công việc giám sát hoạt động của máy móc',
            'keywork'=>'Điều khiển tự động hóa',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_1.jpg',
            'category_id'=>'18',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'21',
            'title'=>'BA',
            'description'=>'Topica',
            'content'=>'Giao tiếp tốt, hiểu rõ được thông tin khác hàng muốn gì',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'da_1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'21',
            'title'=>'PM',
            'description'=>'Topica',
            'content'=>'Kĩ năng lãnh đạo tốt, biết thuyết phúc người khác',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dai_hoc_1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'21',
            'title'=>'QA',
            'description'=>'Topica',
            'content'=>'Kiến thức rộng về nhiều loại ngông ngữ. Yêu cầu nữ',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dan.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'21',
            'title'=>'Lập trình vien Backend',
            'description'=>'Topica',
            'content'=>'Thành thạo các ngôn ngữ lập trình Backend',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dang_khoa.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'21',
            'title'=>'FrontEnd',
            'description'=>'Topica',
            'content'=>'Thành thạo các ngôn ngữ: HTML, JavaScript, Css,.. và 1 vài FrameWork của chúng',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dao-to.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'22',
            'title'=>'BA',
            'description'=>'Framgia',
            'content'=>'Giao tiếp tốt, hiểu rõ được thông tin khác hàng muốn gì',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dao1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'22',
            'title'=>'PM',
            'description'=>'Framgia',
            'content'=>'Kĩ năng lãnh đạo tốt, biết thuyết phúc người khác',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dao1_1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'22',
            'title'=>'QA',
            'description'=>'Framgia',
            'content'=>'Kiến thức rộng về nhiều loại ngông ngữ. Yêu cầu nữ',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dat-1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'22',
            'title'=>'Lập trình vien Backend',
            'description'=>'Framgia',
            'content'=>'Thành thạo các ngôn ngữ lập trình Backend',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dc-1.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'22',
            'title'=>'FrontEnd',
            'description'=>'Framgia',
            'content'=>'Thành thạo các ngôn ngữ: HTML, JavaScript, Css,.. và 1 vài FrameWork của chúng',
            'keywork'=>'Công nghệ thông tin',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'dh.jpg',
            'category_id'=>'19',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'3',
            'title'=>'Tuyển nhân viên',
            'description'=>'Xuân Thành',
            'content'=>$content,
            'keywork'=>'TCNH',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_3.jpg',
            'category_id'=>'4',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'23',
            'title'=>'Giáo viên mầm non',
            'description'=>'TH',
            'content'=>'Yêu công việc',
            'keywork'=>'Giáo dục tiểu học',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_4.jpg',
            'category_id'=>'20',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'24',
            'title'=>'Chụp ảnh',
            'description'=>'Marvel',
            'content'=>'Khả năng chụp ảnh tốt, biết chọn goc chụp',
            'keywork'=>'Nhiếp ảnh',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_5.jpg',
            'category_id'=>'21',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'25',
            'title'=>'Quay phim điện ảnh',
            'description'=>'Marvel',
            'content'=>'Quay phim tốt, kĩ năng tốt',
            'keywork'=>'Quay phim',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_6.jpg',
            'category_id'=>'22',
            'created_at' => new DateTime(),
        ]);
                DB::table('post')->insert([
            'user_id'=>'26',
            'title'=>'Quay phim điện ảnh',
            'description'=>'Disney',
            'content'=>'Quay phim tốt, kĩ năng tốt',
            'keywork'=>'Quay phim',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_6.jpg',
            'category_id'=>'22',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'27',
            'title'=>'Đo đạc thực địa',
            'description'=>'KS',
            'content'=>'Sử dụng thành thạo các công cụ đo đạc vật chất',
            'keywork'=>'Trắc địa',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_7.jpg',
            'category_id'=>'23',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'28',
            'title'=>'Nhân viên bảo vệ',
            'description'=>'TH',
            'content'=>'tập trung với công việc, có sức khỏe tốt. Yêu cầu trên 18',
            'keywork'=>'Bảo vệ',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_8.jpg',
            'category_id'=>'24',
            'created_at' => new DateTime(),
        ]);
        DB::table('post')->insert([
            'user_id'=>'29',
            'title'=>'Nhân viên bán hàng',
            'description'=>'CityFun',
            'content'=>'Gọn gàng, giao tiếp tốt, tự tin trong công việc',
            'keywork'=>'Nhân viên bán hàng',
            'thoigian'=>"FULL TIME",
            'sogio'=>'60h',
            'Hinh'=>'2_9.jpg',
            'category_id'=>'25',
            'created_at' => new DateTime(),
        ]);

        DB::table('cv')->insert([
            'users_id'=>'31',
            'fullname'=>'Phạm Tất Đạt',
            'gender'=>'Nam',
            'email'=>'phamtatdat241197@gmail.com',
            'phone'=>'0981036562',
            'birthday'=>'1997-11-24',
            'Hinh'=>'tatdat.jpg',
            'job_position'=>'Công nghệ thông tin',
            'information'=>'Đẹp trai, chăm chỉ với công việc',
            'education'=>'Đại học Bách Khoa Hà Nội',
            'skill'=>'Thiết kế và lập trình web',
            'experience'=>'Chưa đi làm',
            'project'=>'Website tìm kiếm việc làm',
            'status'=>'Đang đi học',
            'created_at'=>new DateTime(),
        ]);
    }
}
