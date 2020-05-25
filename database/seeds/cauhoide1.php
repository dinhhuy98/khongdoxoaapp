<?php

use Illuminate\Database\Seeder;

class cauhoide1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cauhoi')->insert([
        	['noidung'=>'Khái niệm "đường bộ" được hiểu như thế nào là đúng? Đường bộ gồm:','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'"Phương tiện giao thông đường bộ" gồm những loại nào?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Người điều khiển xe ô tô, xe máy kéo, xe máy chuyên dùng trên đường mà trong máu hoặc hơi thở có nồng độ cồn vượt quá bao nhiêu thì bị cấm?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Khi xảy ra tai nạn giao thông, những hành vi nào ghi ở dưới đây bị nghiêm cấm?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Tại nơi đường giao nhau, khi đèn điều khiển giao thông có tín hiệu vàng, người điều khiển phương tiện phải thực hiện như thế nào?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Trên đường có nhiều làn đường cho xe đi cùng chiều được phân biệt bằng vạch kẻ phân làn đường, người điều khiển phương tiện phải cho xe đi như thế nào?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Tại nơi đường giao nhau có báo hiệu đi theo vòng xuyến người điều khiển phương tiện phải nhường đường như thế nào?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Người điều khiển phương tiện tham gia giao thông trong hầm đường bộ ngoài việc phải tuân thủ các quy tắc giao thông còn phải thực hiện những quy định nào ghi ở dưới đây?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Khi điều khiển xe chạy trên đường, người lái xe phải mang theo các loại giấy tờ gì?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Trên đường bộ trong khu vực đông dân cư, xe mô tô hai bánh, xe gắn máy tham gia giao thông với tốc độ tối đa cho phép là bao nhiêu?','image'=>'0.jpg','id_bode'=>1],
['noidung'=>'Biển nào cấm người đi bộ?','image'=>'256.jpg','id_bode'=>1],
['noidung'=>'Biển nào báo hiệu đường sắt giao nhau với đường bộ không có rào chắn?','image'=>'266.jpg','id_bode'=>1],
['noidung'=>'Biển nào báo hiệu giao nhau với đường không ưu tiên?','image'=>'276.jpg','id_bode'=>1],
['noidung'=>'Biển nào xe mô tô hai bánh được đi vào?','image'=>'283.jpg','id_bode'=>1],
['noidung'=>'Khi đến chỗ giao nhau, gặp biển nào thì người lái xe không được cho xe đi thẳng, phải rẽ sang hướng khác?','image'=>'312.jpg','id_bode'=>1],
['noidung'=>'Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?','image'=>'356.jpg','id_bode'=>1],
['noidung'=>'Các xe đi theo mũi tên, xe nào vi phạm quy tắc giao thông?','image'=>'372.jpg','id_bode'=>1],
['noidung'=>'Xe tải kéo mô tô ba bánh như hình này có đúng quy tắc giao thông không?','image'=>'379.jpg','id_bode'=>1],
['noidung'=>'Trong hình dưới đây, xe nào chấp hành đúng quy tắc giao thông?','image'=>'407.jpg','id_bode'=>1],
['noidung'=>'Theo tín hiệu đèn của xe cơ giới, xe nào vi phạm quy tắc giao thông?','image'=>'428.jpg','id_bode'=>1]
        ]);
    }
}
