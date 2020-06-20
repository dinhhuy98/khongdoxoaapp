<?php

use Illuminate\Database\Seeder;

class cautraloide7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Loại cố định.','dapandung'=>'true','id_cauhoi'=>121],
['noidung'=>'Loại di động.','dapandung'=>'true','id_cauhoi'=>121],
['noidung'=>'Đua xe, cỗ vũ đua xe, tổ chức đua xe trái phép.','dapandung'=>'true','id_cauhoi'=>122],
['noidung'=>'Lạng lách, đánh võng.','dapandung'=>'true','id_cauhoi'=>122],
['noidung'=>'Dừng ngay phương tiện, giữ nguyên hiện trường, cấp cứu người bị nạn và phải có mặt khi cơ quan có thẩm quyền yêu cầu, cung cấp thông tin xác thực về vụ tai nạn cho cơ quan có thẩm quyền.','dapandung'=>'true','id_cauhoi'=>123],
['noidung'=>'Ở lại nơi xảy ra tai nạn cho đến khi người của cơ quan công an đến, trừ trường hợp người điều khiển phương tiện cũng bị thương phải đưa đi cấp cứu hoặc phải đưa người bị nạn đi cấp cứu hoặc vì lý do đe dọa đến tính mạng nhưng phải đến trình báo ngay với cơ quan công an gần nhất.','dapandung'=>'true','id_cauhoi'=>123],
['noidung'=>'Rời khỏi hiện trường nơi xảy ra tai nạn giao thông.','dapandung'=>'false','id_cauhoi'=>123],
['noidung'=>'Buông cả hai tay hoặc đi xe bằng một bánh đối với xe hai bánh, bằng hai bánh đối với xe ba bánh, chạy quá tốc độ quy định.','dapandung'=>'true','id_cauhoi'=>124],
['noidung'=>'Sử dụng xe để kéo, đẩy xe khác, vật khác và chở vật cồng kềnh, để chân chống quẹt xuống đất và cá hành vi khác gây mất trật tự an toàn giao thông.','dapandung'=>'true','id_cauhoi'=>124],
['noidung'=>'Chạy đúng tốc độ quy định và chấp hành đúng quy tắc giao thông đường bộ.','dapandung'=>'false','id_cauhoi'=>124],
['noidung'=>'Biển báo hiệu cố định.','dapandung'=>'false','id_cauhoi'=>125],
['noidung'=>'Báo hiệu tạm thời.','dapandung'=>'true','id_cauhoi'=>125],
['noidung'=>'Phải chuyến từ đèn chiếu gần sang đèn chiếu xa.','dapandung'=>'false','id_cauhoi'=>126],
['noidung'=>'Phải chuyển từ đèn chiếu xa sang đèn chiếu gần.','dapandung'=>'true','id_cauhoi'=>126],
['noidung'=>'Phải thực hiện chuyển dần sang làn đường phía bên phải, nếu có làn đường giảm tốc thì phải cho xe chạy trên làn đường đó trước khi rời khỏi đường cao tốc.','dapandung'=>'true','id_cauhoi'=>127],
['noidung'=>'Phải thực hiện chuyển ngay sang các làn đường phía bên phải, nếu có làn đường giảm tốc thì phải cho xe chạy trên làn đường đó trước khi rời khỏi đường cao tốc.','dapandung'=>'false','id_cauhoi'=>127],
['noidung'=>'Lắp đặt, sử dụng còi, đèn không đúng thiết kế của nhà sản xuất đối với từng loại xe cơ giới.','dapandung'=>'true','id_cauhoi'=>128],
['noidung'=>'Sử dụng thiết bị âm thanh gây mất trật tự an toàn giao thông, trật tự công cộng.','dapandung'=>'true','id_cauhoi'=>128],
['noidung'=>'Phải đội mũ bảo hiểm có cài quay đúng quy cách, mặc quần áo gọn gàng.','dapandung'=>'true','id_cauhoi'=>129],
['noidung'=>'Không sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính).','dapandung'=>'true','id_cauhoi'=>129],
['noidung'=>'Buông cả hai tay hoặc đi xe bằng 1 bánh.','dapandung'=>'false','id_cauhoi'=>129],
['noidung'=>'Tất cả các ý nêu trên.','dapandung'=>'false','id_cauhoi'=>129],
['noidung'=>'Điều khiển xe đi bên phải chiều đi của mình','dapandung'=>'true','id_cauhoi'=>130],
['noidung'=>'Điều khiển xe đi trên phần đường, làn đường có ít phương tiện tham gia giao thông.','dapandung'=>'false','id_cauhoi'=>130],
['noidung'=>'Đi đúng phần đường, làn đường quy định; đội mũ bảo hiểm đúng quy cách.','dapandung'=>'true','id_cauhoi'=>130],
['noidung'=>'Đội mũ bảo hiểm ở nơi có biển báo bắt buộc đội mũ bảo hiểm.','dapandung'=>'false','id_cauhoi'=>130],
['noidung'=>'Biển 1 và 3.','dapandung'=>'true','id_cauhoi'=>131],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>131],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>131],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>131],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>132],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>132],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>132],
['noidung'=>'Không biển nào.','dapandung'=>'false','id_cauhoi'=>133],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>133],
['noidung'=>'Biển 2 và 3.','dapandung'=>'true','id_cauhoi'=>133],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>133],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>134],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>134],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>134],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>135],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>135],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>135],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>135],
['noidung'=>'Xe khách, mô tô.','dapandung'=>'true','id_cauhoi'=>136],
['noidung'=>'Xe tải, mô tô.','dapandung'=>'false','id_cauhoi'=>136],
['noidung'=>'Xe con, xe tải.','dapandung'=>'false','id_cauhoi'=>136],
['noidung'=>'Mô tô.','dapandung'=>'false','id_cauhoi'=>137],
['noidung'=>'Xe tải.','dapandung'=>'false','id_cauhoi'=>137],
['noidung'=>'Cả ba xe.','dapandung'=>'true','id_cauhoi'=>137],
['noidung'=>'Mô tô và xe tải.','dapandung'=>'false','id_cauhoi'=>137],
['noidung'=>'Mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>138],
['noidung'=>'Xe con, xe tải.','dapandung'=>'false','id_cauhoi'=>138],
['noidung'=>'Mô tô, xe tải.','dapandung'=>'true','id_cauhoi'=>138],
['noidung'=>'Cả ba xe.','dapandung'=>'false','id_cauhoi'=>138],
['noidung'=>'Cho phép.','dapandung'=>'false','id_cauhoi'=>139],
['noidung'=>'Không được vượt.','dapandung'=>'true','id_cauhoi'=>139],
['noidung'=>'Xe của bạn, mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>140],
['noidung'=>'Xe con, xe của bạn, mô tô.','dapandung'=>'true','id_cauhoi'=>140],
['noidung'=>'Mô tô, xe con, xe của bạn.','dapandung'=>'false','id_cauhoi'=>140]]);
    }
}
