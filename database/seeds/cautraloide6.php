<?php

use Illuminate\Database\Seeder;

class cautraloide6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Là bộ phận của đường để phân chia mặt đường thành hai chiều xe chạy riêng biệt hoặc để phân chia phần đường của xe cơ giới và xe thô sơ.','dapandung'=>'true','id_cauhoi'=>101],
['noidung'=>'Là bộ phận của đường để xác định ranh giới của đất dành cho người đi bộ theo chiều ngang của đường.','dapandung'=>'false','id_cauhoi'=>101],
['noidung'=>'Là bộ phận của đường để ngăn cách không cho các loại xe vào những nơi không được phép.','dapandung'=>'false','id_cauhoi'=>101],
['noidung'=>'Phá hoại đường, cầu, hầm, bến phà đường bộ, phá hoại đèn tín hiệu, cọc tiêu, biển báo hiệu, gương cầu, dải phân cách.','dapandung'=>'true','id_cauhoi'=>102],
['noidung'=>'Phá hoại hệ thống thoát nước và các công trình, thiết bị khác thuộc kết cấu hạ tầng giao thông đường bộ.','dapandung'=>'true','id_cauhoi'=>102],
['noidung'=>'Bấm còi, rú ga liên tục, bấm còi trong thời gian từ 22 giờ đến 5 giờ.','dapandung'=>'true','id_cauhoi'=>103],
['noidung'=>'Bấm còi hơi, sử dụng đèn chiếu xa trong khu đô thị và khu dân cư, trừ các xe ưu tiên khi đang làm nhiệm vụ.','dapandung'=>'true','id_cauhoi'=>103],
['noidung'=>'Được mang, vác tùy trường hợp cụ thể.','dapandung'=>'false','id_cauhoi'=>104],
['noidung'=>'Không được mang, vác.','dapandung'=>'true','id_cauhoi'=>104],
['noidung'=>'Được mang, vác nhưng phải đảm bảo an toàn.','dapandung'=>'false','id_cauhoi'=>104],
['noidung'=>'Hiệu lệnh của người điều khiển giao thông.','dapandung'=>'true','id_cauhoi'=>105],
['noidung'=>'Hiệu lệnh của đèn điều khiển giao thông.','dapandung'=>'false','id_cauhoi'=>105],
['noidung'=>'Hiệu lệnh của biển báo hiệu đường bộ.','dapandung'=>'false','id_cauhoi'=>105],
['noidung'=>'Nơi đường hẹp chỉ đủ cho một xe chạy và có chỗ tránh xe thì xe nào ở gần chỗ tránh hơn phải vào vị trí tránh nhường đường cho xe kia đi.','dapandung'=>'true','id_cauhoi'=>106],
['noidung'=>'Xe xuống dốc phải nhường đường cho xe đang lên dốc, xe nào có chướng ngại vật phía trước phải nhường đường cho xe không có chướng ngại vật đi trước.','dapandung'=>'true','id_cauhoi'=>106],
['noidung'=>'Xe lên dốc phải nhường đường cho xe xuống dốc.','dapandung'=>'false','id_cauhoi'=>106],
['noidung'=>'Phải có tín hiệu xin vào và phải nhường đường cho xe đang chạy trên đường, khi thấy an toàn mới cho xe nhập vào dòng xe ở làn đường sát mép ngoài.','dapandung'=>'true','id_cauhoi'=>107],
['noidung'=>'Phải có tín hiệu và tăng tốc độ vào đường cao tốc.','dapandung'=>'false','id_cauhoi'=>107],
['noidung'=>'Nếu có làn đường tăng tốc thì phải cho xe chạy trên làn đường đó trước khi vào làn đường của đường cao tốc.','dapandung'=>'true','id_cauhoi'=>107],
['noidung'=>'Cơ quan quản lý giao thông vận tải.','dapandung'=>'false','id_cauhoi'=>108],
['noidung'=>'Ủy ban nhân dân cấp tỉnh.','dapandung'=>'true','id_cauhoi'=>108],
['noidung'=>'Cơ quan cảnh sát giao thông đường bộ.','dapandung'=>'false','id_cauhoi'=>108],
['noidung'=>'Thanh tra giao thông đường bộ.','dapandung'=>'false','id_cauhoi'=>108],
['noidung'=>'Lái xe vào lề đường bên phải và giảm tốc độ để xe phía sau vượt qua.','dapandung'=>'true','id_cauhoi'=>109],
['noidung'=>'Lái xe vào lề đường bên trái và giảm tốc độ để xe phía sau vượt qua.','dapandung'=>'false','id_cauhoi'=>109],
['noidung'=>'Lái xe vào lề đường bên phải và tăng tốc độ để xe phía sau vượt qua.','dapandung'=>'false','id_cauhoi'=>109],
['noidung'=>'Điều khiển xe đi trên phần đường, làn đường có ít phương tiện tham gia giao thông, đội mũ bảo hiểm ở những nơi có biển báo bắt buộc đội mũ bảo hiểm.','dapandung'=>'false','id_cauhoi'=>110],
['noidung'=>'Chấp hành quy định về tốc độ, đèn tín hiệu, biển báo hiệu, vạch kẻ đường khi lái xe.','dapandung'=>'true','id_cauhoi'=>110],
['noidung'=>'Chấp hành hiệu lệnh, chỉ dẫn của người điều khiển giao thông, nhường đường cho người đi bộ, người già, trẻ em, người khuyết tật.','dapandung'=>'true','id_cauhoi'=>110],
['noidung'=>'Cả 3 ý nêu trên.','dapandung'=>'false','id_cauhoi'=>110],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>111],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>111],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>111],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>111],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>112],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>112],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>112],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>112],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>113],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>113],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>113],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>114],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>114],
['noidung'=>'Không biển nào.','dapandung'=>'false','id_cauhoi'=>114],
['noidung'=>'Biển 1 và 2.','dapandung'=>'true','id_cauhoi'=>115],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>115],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>115],
['noidung'=>'Xe con và xe khách.','dapandung'=>'true','id_cauhoi'=>116],
['noidung'=>'Mô tô.','dapandung'=>'false','id_cauhoi'=>116],
['noidung'=>'Cả hai xe.','dapandung'=>'true','id_cauhoi'=>117],
['noidung'=>'Không xe nào vi phạm.','dapandung'=>'false','id_cauhoi'=>117],
['noidung'=>'Chỉ xe mô tô vi phạm.','dapandung'=>'false','id_cauhoi'=>117],
['noidung'=>'Chỉ xe tải vi phạm.','dapandung'=>'false','id_cauhoi'=>117],
['noidung'=>'Các xe ở phía tay phải và tay trái của người điều khiển được phép đi thẳng.','dapandung'=>'false','id_cauhoi'=>118],
['noidung'=>'Cho phép các xe ở mọi hướng được rẽ phải.','dapandung'=>'false','id_cauhoi'=>118],
['noidung'=>'Tất cả các xe phải dừng lại trước ngã tư, trừ những xe đã ở trong ngã tư được phép tiếp tục đi.','dapandung'=>'true','id_cauhoi'=>118],
['noidung'=>'Xe khách, mô tô.','dapandung'=>'false','id_cauhoi'=>119],
['noidung'=>'Xe tải, mô tô.','dapandung'=>'false','id_cauhoi'=>119],
['noidung'=>'Xe con, xe tải.','dapandung'=>'true','id_cauhoi'=>119],
['noidung'=>'Xe của bạn, mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>120],
['noidung'=>'Xe con, xe của bạn, mô tô.','dapandung'=>'false','id_cauhoi'=>120],
['noidung'=>'Mô tô, xe con, xe của bạn.','dapandung'=>'true','id_cauhoi'=>120]]);
    }
}
