<?php

use Illuminate\Database\Seeder;

class cautraloide4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Là một phần của đường được chia theo chiều ngang của đường, có bề rộng đủ cho xe đỗ an toàn.','dapandung'=>'false','id_cauhoi'=>61],
['noidung'=>'Là một phần đường xe chạy được chia theo chiều dọc của đường, có bề rộng đủ cho xe chạy an toàn.','dapandung'=>'true','id_cauhoi'=>61],
['noidung'=>'Cả 02 ý trên.','dapandung'=>'false','id_cauhoi'=>61],
['noidung'=>'Người điều khiển, người sử dụng phương tiện tham gia giao thông đường bộ.','dapandung'=>'true','id_cauhoi'=>62],
['noidung'=>'Người điều khiển, dẫn dắt súc vật, người đi bộ trên đường bộ.','dapandung'=>'true','id_cauhoi'=>62],
['noidung'=>'Không bị nghiêm cấm.','dapandung'=>'false','id_cauhoi'=>63],
['noidung'=>'Bị nghiêm cấm.','dapandung'=>'true','id_cauhoi'=>63],
['noidung'=>'Nghiêm cấm tùy từng trường hợp.','dapandung'=>'false','id_cauhoi'=>63],
['noidung'=>'Được phép.','dapandung'=>'false','id_cauhoi'=>64],
['noidung'=>'Tùy trường hợp.','dapandung'=>'false','id_cauhoi'=>64],
['noidung'=>'Không được phép.','dapandung'=>'true','id_cauhoi'=>64],
['noidung'=>'Người tham gia giao thông ở phía trước và ở phía sau người điều khiển giao thông phải dừng lại; người tham gia giao thông ở phía bên phải và bên trái người điều khiển được đi.','dapandung'=>'false','id_cauhoi'=>65],
['noidung'=>'Người tham gia giao thông ở các hướng phải dừng lại.','dapandung'=>'true','id_cauhoi'=>65],
['noidung'=>'Tất cả các trường hợp trên.','dapandung'=>'false','id_cauhoi'=>65],
['noidung'=>'Không được quay đầu xe.','dapandung'=>'true','id_cauhoi'=>66],
['noidung'=>'Lợi dụng chỗ trống và phải có người làm tín hiệu sau xe để đảm bảo an toàn.','dapandung'=>'false','id_cauhoi'=>66],
['noidung'=>'Lợi dụng chỗ trống có thể quay đầu được để quay đầu x echo an toàn.','dapandung'=>'false','id_cauhoi'=>66],
['noidung'=>'Phương tiện nào bên phải không vướng.','dapandung'=>'false','id_cauhoi'=>67],
['noidung'=>'Phương tiện nào ra tín hiệu xin đường trước.','dapandung'=>'false','id_cauhoi'=>67],
['noidung'=>'Phương tiện giao thông đường sắt.','dapandung'=>'true','id_cauhoi'=>67],
['noidung'=>'Đi xe dàng hàng ngang.','dapandung'=>'true','id_cauhoi'=>68],
['noidung'=>'Đi xe vào phần đường dành cho người đi bộ và phương tiện khác, sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính).','dapandung'=>'true','id_cauhoi'=>68],
['noidung'=>'Chở người bệnh đi cấp cứu, trẻ em dưới 14 tuổi, áp giải người có hành vi vi phạm pháp luật.','dapandung'=>'false','id_cauhoi'=>68],
['noidung'=>'Xe mô tô hai bánh có dung tích xilanh từ 50 cm3 trở lên.','dapandung'=>'false','id_cauhoi'=>69],
['noidung'=>'Xe gắn máy có dung tích xilanh dưới 50 cm3.','dapandung'=>'true','id_cauhoi'=>69],
['noidung'=>'Xe ô tô tải dưới 3,5 tấn, xe chở người đến 9 chỗ ngồi.','dapandung'=>'false','id_cauhoi'=>69],
['noidung'=>'Tất cả các ý trên.','dapandung'=>'false','id_cauhoi'=>69],
['noidung'=>'Là sự hiểu biết và chấp hành nghiêm chỉnh pháp luật về giao thông; là ý thức trách nhiệm với cộng đồng khi tham gia giao thông.','dapandung'=>'true','id_cauhoi'=>70],
['noidung'=>'Là ứng xử văn hóa có tình yêu thương con người trong các tình huống không may xảy ra khi tham gia giao thông.','dapandung'=>'true','id_cauhoi'=>70],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>71],
['noidung'=>'Biển 2 và 3.','dapandung'=>'true','id_cauhoi'=>71],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>71],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>71],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>72],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>72],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>72],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>72],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>73],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>73],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>73],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>73],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>74],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>74],
['noidung'=>'Không biển nào.','dapandung'=>'false','id_cauhoi'=>74],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>75],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>75],
['noidung'=>'Biển 1 và 3.','dapandung'=>'true','id_cauhoi'=>75],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>75],
['noidung'=>'Xe lam, xe cứu thương, xe con.','dapandung'=>'true','id_cauhoi'=>76],
['noidung'=>'Xe cứu thương, xe con, xe lam.','dapandung'=>'false','id_cauhoi'=>76],
['noidung'=>'Xe con, xe lam, xe cứu thương.','dapandung'=>'false','id_cauhoi'=>76],
['noidung'=>'Xe tải.','dapandung'=>'false','id_cauhoi'=>77],
['noidung'=>'Xe con.','dapandung'=>'true','id_cauhoi'=>77],
['noidung'=>'Xe lam.','dapandung'=>'false','id_cauhoi'=>77],
['noidung'=>'Mô tô.','dapandung'=>'true','id_cauhoi'=>78],
['noidung'=>'Xe con.','dapandung'=>'false','id_cauhoi'=>78],
['noidung'=>'Xe con (E), mô tô (C).','dapandung'=>'true','id_cauhoi'=>79],
['noidung'=>'Xe tải (A), mô tô (D).','dapandung'=>'false','id_cauhoi'=>79],
['noidung'=>'Xe khách (B), mô tô (C).','dapandung'=>'false','id_cauhoi'=>79],
['noidung'=>'Xe khách (B), mô tô (D).','dapandung'=>'false','id_cauhoi'=>79],
['noidung'=>'Xe con, xe tải, xe khách.','dapandung'=>'false','id_cauhoi'=>80],
['noidung'=>'Xe tải, xe khách, xe mô tô.','dapandung'=>'true','id_cauhoi'=>80],
['noidung'=>'Xe khách, xe mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>80],
['noidung'=>'Cả bốn xe.','dapandung'=>'false','id_cauhoi'=>80]]);
    }
}
