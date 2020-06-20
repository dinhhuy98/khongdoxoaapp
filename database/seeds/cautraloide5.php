<?php

use Illuminate\Database\Seeder;

class cautraloide5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Đường phố là đường đô thị, gồm lòng đường và hè phố.','dapandung'=>'true','id_cauhoi'=>81],
['noidung'=>'Đường phố là đường bộ ngoài đô thị có lòng đường đủ rộng cho các phương tiện giao thông qua lại','dapandung'=>'false','id_cauhoi'=>81],
['noidung'=>'Cả hai ý nêu trên.','dapandung'=>'false','id_cauhoi'=>81],
['noidung'=>'Là người điều khiển phương tiện tham gia giao thông.','dapandung'=>'false','id_cauhoi'=>82],
['noidung'=>'Là người được giao nhiệm vụ hướng dẫn giao thông tại nơi thi công, nơi ùn tắc giao thông, ở bến phà, tại cầu đường bộ đi chung với đường sắt.','dapandung'=>'true','id_cauhoi'=>82],
['noidung'=>'Là cảnh sát giao thông.','dapandung'=>'true','id_cauhoi'=>82],
['noidung'=>'Tất cả các ý nêu trên.','dapandung'=>'false','id_cauhoi'=>82],
['noidung'=>'Bị nghiêm cấm.','dapandung'=>'true','id_cauhoi'=>83],
['noidung'=>'Bị nghiêm cấm tùy từng trường hợp.','dapandung'=>'false','id_cauhoi'=>83],
['noidung'=>'Không bị nghiêm cấm.','dapandung'=>'false','id_cauhoi'=>83],
['noidung'=>'Đội mũ bảo hiểm và cài quai đúng cách.','dapandung'=>'false','id_cauhoi'=>84],
['noidung'=>'Sử dụng ô; bấm, kéo hoặc đẩy các phương tiện khác.','dapandung'=>'true','id_cauhoi'=>84],
['noidung'=>'Đứng trên yên, giá đèo hàng hoặc ngồi trên tay lái, các hành vi khác gây mất trật tự an toàn giao thông.','dapandung'=>'true','id_cauhoi'=>84],
['noidung'=>'Người tham gia giao thông ở phía sau người điều khiển phải dừng lại; người ở phía trước người điều khiển được rẽ trái; người ở bên trái người điều khiển được rẽ trái; người đi bộ qua đường phải dừng lại sau lưng người điều khiển giao thông.','dapandung'=>'false','id_cauhoi'=>85],
['noidung'=>'Người tham giao giao thông ở phía sau và bên phải người điều khiển phải dừng lại; người ở phía trước người điều khiển được rẽ phải; người ở phía bên trái người điều khiển giao thông được đi tất cả các hướng; người đi bộ qua đường phải đi sau lưng người điều khiển giao thông.','dapandung'=>'true','id_cauhoi'=>85],
['noidung'=>'Người điều khiển phương tiện phải tăng tốc độ và có tín hiệu báo hướng để rẽ.','dapandung'=>'false','id_cauhoi'=>86],
['noidung'=>'Người điều khiển phương tiện phải giảm tốc độ và có tín hiệu báo hướng rẽ; chỉ cho rẽ chuyển hướng khi quan sát thấy không gây trở ngại hoặc nguy hiểm cho người và phương tiện khác.','dapandung'=>'true','id_cauhoi'=>86],
['noidung'=>'Trong khi chuyển hướng, người lái xe, người điều khiển xe máy chuyên dùng phải nhường quyền đi trước cho người đi bộ, người đi xe đạp đang đi trên phần đường dành riêng cho họ, nhường đường cho các xe đi ngược chiều.','dapandung'=>'true','id_cauhoi'=>86],
['noidung'=>'5.00m.','dapandung'=>'true','id_cauhoi'=>87],
['noidung'=>'3.00m.','dapandung'=>'false','id_cauhoi'=>87],
['noidung'=>'4.00m.','dapandung'=>'false','id_cauhoi'=>87],
['noidung'=>'7.00m.','dapandung'=>'false','id_cauhoi'=>87],
['noidung'=>'Khi tham gia giao thông đường bộ.','dapandung'=>'true','id_cauhoi'=>88],
['noidung'=>'Chỉ khi tham gia giao thông trên đường quốc lộ, khu vực đô thị.','dapandung'=>'false','id_cauhoi'=>88],
['noidung'=>'05 năm.','dapandung'=>'true','id_cauhoi'=>89],
['noidung'=>'03 năm.','dapandung'=>'false','id_cauhoi'=>89],
['noidung'=>'02 năm.','dapandung'=>'false','id_cauhoi'=>89],
['noidung'=>'Là bình thường.','dapandung'=>'false','id_cauhoi'=>90],
['noidung'=>'Là thiếu văn hóa giao thông.','dapandung'=>'true','id_cauhoi'=>90],
['noidung'=>'Là có văn hóa giao thông.','dapandung'=>'false','id_cauhoi'=>90],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>91],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>91],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>91],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>92],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>92],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>92],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>93],
['noidung'=>'Biển 1 và 2.','dapandung'=>'true','id_cauhoi'=>93],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>93],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>94],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>94],
['noidung'=>'Cả hai biển.','dapandung'=>'false','id_cauhoi'=>94],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>95],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>95],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>95],
['noidung'=>'Mô tô.','dapandung'=>'false','id_cauhoi'=>96],
['noidung'=>'Xe cứu thương.','dapandung'=>'true','id_cauhoi'=>96],
['noidung'=>'Cả ba hướng.','dapandung'=>'true','id_cauhoi'=>97],
['noidung'=>'Hướng 1 và 3.','dapandung'=>'false','id_cauhoi'=>97],
['noidung'=>'Chỉ hướng 1.','dapandung'=>'false','id_cauhoi'=>97],
['noidung'=>'Xe khách.','dapandung'=>'false','id_cauhoi'=>98],
['noidung'=>'Mô tô.','dapandung'=>'false','id_cauhoi'=>98],
['noidung'=>'Xe con.','dapandung'=>'true','id_cauhoi'=>98],
['noidung'=>'Xe con và mô tô.','dapandung'=>'false','id_cauhoi'=>98],
['noidung'=>'Xe con (B), mô tô (C).','dapandung'=>'false','id_cauhoi'=>99],
['noidung'=>'Xe con (A), mô tô (C).','dapandung'=>'false','id_cauhoi'=>99],
['noidung'=>'Xe con (E), mô tô (D).','dapandung'=>'true','id_cauhoi'=>99],
['noidung'=>'Tất cả các loại xe trên.','dapandung'=>'false','id_cauhoi'=>99],
['noidung'=>'Xe tải, mô tô.','dapandung'=>'false','id_cauhoi'=>100],
['noidung'=>'Xe khách, mô tô.','dapandung'=>'true','id_cauhoi'=>100],
['noidung'=>'Xe tải, xe con.','dapandung'=>'false','id_cauhoi'=>100],
['noidung'=>'Mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>100]]);
    }
}
