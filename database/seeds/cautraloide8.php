<?php

use Illuminate\Database\Seeder;

class cautraloide8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Đường ưu tiên là đường mà trên đó phương tiện tham gia giao thông đường bộ phải nhường đường cho các phương tiện đến từ hướng khác khi qua nơi đường giao nhau, có thể được cắm biển báo hiệu đường ưu tiên.','dapandung'=>'false','id_cauhoi'=>141],
['noidung'=>'Đường ưu tiên là đường mà trên đó phương tiện tham gia giao thông đường bộ được các phương tiện đến từ hướng khác nhường đường khi qua nơi đường giao nhau, được cắm biển báo hiệu đường ưu tiên.','dapandung'=>'true','id_cauhoi'=>141],
['noidung'=>'Đường ưu tiên là đường chỉ dành cho một số loại phương tiện tham gia giao thông, được cắm biển báo hiệu đường ưu tiên.','dapandung'=>'false','id_cauhoi'=>141],
['noidung'=>'Bị nghiêm cấm.','dapandung'=>'true','id_cauhoi'=>142],
['noidung'=>'Không bị nghiêm cấm.','dapandung'=>'false','id_cauhoi'=>142],
['noidung'=>'Không bị nghiêm cấm.','dapandung'=>'false','id_cauhoi'=>143],
['noidung'=>'Nghiêm cấm tùy từng trường hợp cụ thể.','dapandung'=>'false','id_cauhoi'=>143],
['noidung'=>'Bị nghiêm cấm.','dapandung'=>'true','id_cauhoi'=>143],
['noidung'=>'Là trách nhiệm của ngành giao thông vận tải và ngành công an.','dapandung'=>'false','id_cauhoi'=>144],
['noidung'=>'Là trách nhiệm của cơ quan, tổ chức, cá nhân.','dapandung'=>'true','id_cauhoi'=>144],
['noidung'=>'Là trách nhiệm của cảnh sát giao thông.','dapandung'=>'false','id_cauhoi'=>144],
['noidung'=>'Cho xe đi trên bất kỳ làn đường nào; khi cần thiết phải chuyển làn đường, người lái xe phải có đèn tín hiệu báo trước và phải bảo đảm an toàn.','dapandung'=>'false','id_cauhoi'=>145],
['noidung'=>'Phải cho xe đi trong một làn đường và chỉ được chuyển làn đường ở những nơi cho phép; khi chuyển làn phải có tín hiệu báo trước và phải đảm bảo an toàn.','dapandung'=>'true','id_cauhoi'=>145],
['noidung'=>'Phải cho xe đi trong một làn, khi chuyển làn đường phải có tín hiệu báo trước, chú ý quan sát để bảo đảm an toàn.','dapandung'=>'false','id_cauhoi'=>145],
['noidung'=>'Phải nhanh chống giảm tốc độ, tránh hoặc dừng lại sát lề đường bên trái để nhường đường.','dapandung'=>'false','id_cauhoi'=>146],
['noidung'=>'Phải nhanh chống tăng tốc độ, tránh sát lề đường để nhường đường cho xe ưu tiên. Cấm các hành vi gây cản trở xe ưu tiên.','dapandung'=>'false','id_cauhoi'=>146],
['noidung'=>'Phải nhanh chống giảm tốc độ, tránh hoặc dừng lại sát lề đường bên phải để nhường đường. Không được gây cản trở xe được quyền ưu tiên.','dapandung'=>'true','id_cauhoi'=>146],
['noidung'=>'Người đi bộ, xe thô sơ, xe gắn máy và xe ô tô.','dapandung'=>'false','id_cauhoi'=>147],
['noidung'=>'Xe mô tô và xe máy chuyên dùng có tốc độ thiết kế lớn hơn 70km/h.','dapandung'=>'false','id_cauhoi'=>147],
['noidung'=>'Người đi bộ, xe thô sơ, xe gắn máy, xe mô tô và xe máy chuyên dùng có tốc độ thiết kế nhỏ hơn 70km/h.','dapandung'=>'true','id_cauhoi'=>147],
['noidung'=>'Bảo vệ hiện trường, giúp đỡ, cứu chữa người bị nạn, bảo vệ tài sản của người bị nạn.','dapandung'=>'true','id_cauhoi'=>148],
['noidung'=>'Báo tin ngay cho cơ quan công an, y tế hoặc Ủy ban nhân dân nơi gần nhất, cung cấp thông tin xác thực về vụ tai nạn theo yêu cầu của cơ quan có thẩm quyền.','dapandung'=>'true','id_cauhoi'=>148],
['noidung'=>'Đường bộ nằm trong khu vực nội thành phố, nội thị xã, nội thị trấn, khu công nghiệp có đông người và phương tiện tham gia giao thông.','dapandung'=>'false','id_cauhoi'=>149],
['noidung'=>'Đường bộ nằm trong khu vực nội thành phố, nội thị xã và những đoạn đường bộ được xác định từ vị trí có hiệu lực của biển báo hiệu “bắt đầu khu đông dân cư” đến vị trí có hiệu lực của biển báo hiệu “hết khu đông dân cư”.','dapandung'=>'true','id_cauhoi'=>149],
['noidung'=>'Đường bộ có đông người, phương tiện tham gia giao thông và những đoạn đường bộ được xác định từ vị trí có hiệu lực của biển báo hiệu “bắt đầu khu đông dân cư” đến vị trí có hiệu lực của biển báo hiệu “hết khu đông dân cư”.','dapandung'=>'false','id_cauhoi'=>149],
['noidung'=>'Có giấy phép lái xe phù hợp với loại xe được phép điều khiển, xe cơ giới đảm bảo các quy định về chất lượng, an toàn kỹ thuật và bảo vệ môi trường.','dapandung'=>'true','id_cauhoi'=>150],
['noidung'=>'Có giấy chứng nhận trách nhiệm bảo hiểm dân sự của chủ xe cơ giới còn hiệu lực, nộp phí sử dụng đường bộ theo quy định.','dapandung'=>'true','id_cauhoi'=>150],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>151],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>151],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>151],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>152],
['noidung'=>'Biển 1 và 3.','dapandung'=>'true','id_cauhoi'=>152],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>152],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>152],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>153],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>153],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>153],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>154],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>154],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>154],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>155],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>155],
['noidung'=>'Không biển nào.','dapandung'=>'false','id_cauhoi'=>155],
['noidung'=>'Xe tải, xe lam, xe con, mô tô.','dapandung'=>'false','id_cauhoi'=>156],
['noidung'=>'Xe tải, mô tô, xe lam, xe con.','dapandung'=>'true','id_cauhoi'=>156],
['noidung'=>'Xe lam, xe tải, xe con, mô tô.','dapandung'=>'false','id_cauhoi'=>156],
['noidung'=>'Mô tô, xe lam, xe tải, xe con.','dapandung'=>'false','id_cauhoi'=>156],
['noidung'=>'Xe tải.','dapandung'=>'false','id_cauhoi'=>157],
['noidung'=>'Xe con.','dapandung'=>'true','id_cauhoi'=>157],
['noidung'=>'Xe lam.','dapandung'=>'false','id_cauhoi'=>157],
['noidung'=>'Mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>158],
['noidung'=>'Xe con, xe tải.','dapandung'=>'false','id_cauhoi'=>158],
['noidung'=>'Mô tô, xe tải.','dapandung'=>'true','id_cauhoi'=>158],
['noidung'=>'Cả ba xe.','dapandung'=>'false','id_cauhoi'=>158],
['noidung'=>'Xe tải, xe con.','dapandung'=>'false','id_cauhoi'=>159],
['noidung'=>'Xe khách, xe con.','dapandung'=>'false','id_cauhoi'=>159],
['noidung'=>'Xe khách, xe tải.','dapandung'=>'true','id_cauhoi'=>159],
['noidung'=>'Xe của bạn, mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>160],
['noidung'=>'Xe con, xe của bạn, mô tô.','dapandung'=>'true','id_cauhoi'=>160],
['noidung'=>'Mô tô, xe con, xe của bạn.','dapandung'=>'false','id_cauhoi'=>160]]);
    }
}
