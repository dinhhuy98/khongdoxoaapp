<?php

use Illuminate\Database\Seeder;

class cautraloide3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([['noidung'=>'Là phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại.','dapandung'=>'true','id_cauhoi'=>41],
['noidung'=>'Là phần đường bộ được sử dụng cho các phương tiện giao thông qua lại, dải đất dọc hai bên đường để đảm bảo an toàn giao thông.','dapandung'=>'false','id_cauhoi'=>41],
['noidung'=>'Là phần đường bộ được sử dụng cho các phương tiện giao thông qua lại, các công trình, thiết bị phụ trợ khác và dải đất dọc hai bên đường để đảm bảo an toàn giao thông.','dapandung'=>'false','id_cauhoi'=>41],
['noidung'=>'Phương tiện giao thông cơ giới đường bộ.','dapandung'=>'true','id_cauhoi'=>42],
['noidung'=>'Phương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng.','dapandung'=>'true','id_cauhoi'=>42],
['noidung'=>'Nồng độ cồn vượt quá 0.25 miligam/1 lit khí thở.','dapandung'=>'true','id_cauhoi'=>43],
['noidung'=>'Nồng độ cồn vượt quá 0.20 miligam/1 lit khí thở.','dapandung'=>'false','id_cauhoi'=>43],
['noidung'=>'Nồng độ cồn vượt quá 0.15 miligam/1 lit khí thở.','dapandung'=>'false','id_cauhoi'=>43],
['noidung'=>'Trên cầu hẹp có một làn xe, nơi đường giao nhau, đường bộ giao nhau cùng mức với đường sắt.','dapandung'=>'true','id_cauhoi'=>44],
['noidung'=>'Điều kiện thời tiết hoặc đường không đảm bảo an toàn cho việc vượt, xe ưu tiên đang phát tín hiệu ưu tiên làm nhiệm vụ.','dapandung'=>'true','id_cauhoi'=>44],
['noidung'=>'Người tham gia giao thông ở phía trước và ở phía sau người điều khiển giao thông phải dừng lại; người tham gia giao thông ở phía bên phải và bên trái người điều khiển được đi.','dapandung'=>'true','id_cauhoi'=>45],
['noidung'=>'Người tham gia giao thông ở phía trước và ở phía sau người điều khiển giao thông được đi thẳng; người tham gia giao thông ở phía bên phải và bên trái người điều khiển giao thông được đi thẳng và rẽ phải.','dapandung'=>'false','id_cauhoi'=>45],
['noidung'=>'Khi xe phía trước có tín hiệu rẽ trái hoặc đang rẽ trái; khi xe điện đang chạy giữa đường.','dapandung'=>'true','id_cauhoi'=>46],
['noidung'=>'Khi xe chuyên dùng đang làm việc trên đường mà không thể vượt bên trái được.','dapandung'=>'true','id_cauhoi'=>46],
['noidung'=>'Khi có đủ khoảng trống để vượt xe.','dapandung'=>'false','id_cauhoi'=>46],
['noidung'=>'Phải nhường đường cho xe đi từ bên phải.','dapandung'=>'true','id_cauhoi'=>47],
['noidung'=>'Xe báo hiệu xin đường trước xe đó được đi trước.','dapandung'=>'false','id_cauhoi'=>47],
['noidung'=>'Phải nhường đường cho xe đi từ bên trái.','dapandung'=>'false','id_cauhoi'=>47],
['noidung'=>'Chở người bệnh đi cấp cứu, trẻ em dưới 14 tuổi.','dapandung'=>'true','id_cauhoi'=>48],
['noidung'=>'Áp giải người có hành vi vi phạm pháp luật.','dapandung'=>'true','id_cauhoi'=>48],
['noidung'=>'Nhường đường cho xe đi trên đường nhánh từ bất kỳ hướng nào tới.','dapandung'=>'false','id_cauhoi'=>49],
['noidung'=>'Nhường đường cho người đi bộ đang đi trên phần đường dành cho người đi bộ sang đường.','dapandung'=>'true','id_cauhoi'=>49],
['noidung'=>'Nhường đường cho xe đi trên đường ưu tiên, đường chính đi từ bất kì hướng nào tới, nhường đường cho xe ưu tiên, nhường đường cho xe đi từ bên phải đến.','dapandung'=>'true','id_cauhoi'=>49],
['noidung'=>'Ô tô chở người đến 30 chỗ ngồi (trừ ô tô buýt), ô tô tải có tải trọng dưới 3500 kg.','dapandung'=>'false','id_cauhoi'=>50],
['noidung'=>'Ô tô chở người trên 30 chỗ ngồi (trừ ô tô buýt), ô tô tải có trọng tải dưới 3500 kg. ','dapandung'=>'false','id_cauhoi'=>50],
['noidung'=>'Ô tô kéo rơ moóc, ô tô kéo xe khác, xe gắn máy.','dapandung'=>'true','id_cauhoi'=>50],
['noidung'=>'Ô tô buýt, ô tô sơ mi rơ moóc, ô tô chuyên dùng, xe mô tô.','dapandung'=>'false','id_cauhoi'=>50],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>51],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>51],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>51],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>51],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>52],
['noidung'=>'Biển 1 và 3.','dapandung'=>'true','id_cauhoi'=>52],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>52],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>52],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>53],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>53],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>53],
['noidung'=>'Cấm các loại xe ở biển phụ đi vào.','dapandung'=>'true','id_cauhoi'=>54],
['noidung'=>'Cấm các loại xe cơ giới đi vào trừ loại xe ở biển phụ.','dapandung'=>'false','id_cauhoi'=>54],
['noidung'=>'Có.','dapandung'=>'true','id_cauhoi'=>55],
['noidung'=>'Không.','dapandung'=>'false','id_cauhoi'=>55],
['noidung'=>'Mô tô.','dapandung'=>'false','id_cauhoi'=>56],
['noidung'=>'Xe con.','dapandung'=>'true','id_cauhoi'=>56],
['noidung'=>'Xe tải.','dapandung'=>'true','id_cauhoi'=>57],
['noidung'=>'Xe con và mô tô.','dapandung'=>'false','id_cauhoi'=>57],
['noidung'=>'Cả ba xe.','dapandung'=>'false','id_cauhoi'=>57],
['noidung'=>'Xe con và xe tải.','dapandung'=>'false','id_cauhoi'=>57],
['noidung'=>'Xe lam, mô tô, xe con, xe đạp.','dapandung'=>'false','id_cauhoi'=>58],
['noidung'=>'Xe con, xe đạp, mô tô, xe lam.','dapandung'=>'false','id_cauhoi'=>58],
['noidung'=>'Xe lam, xe con, mô tô + xe đạp.','dapandung'=>'false','id_cauhoi'=>58],
['noidung'=>'Mô tô + xe đạp, xe lam, xe con.','dapandung'=>'true','id_cauhoi'=>58],
['noidung'=>'Xe công an, xe quân sự, xe con + mô tô.','dapandung'=>'false','id_cauhoi'=>59],
['noidung'=>'Xe quân sự, xe công an, xe con + mô tô.','dapandung'=>'true','id_cauhoi'=>59],
['noidung'=>'Xe mô tô + xe con, xe quân sự, xe công an.','dapandung'=>'false','id_cauhoi'=>59],
['noidung'=>'Xe tải, xe con.','dapandung'=>'false','id_cauhoi'=>60],
['noidung'=>'Xe khách, xe con.','dapandung'=>'false','id_cauhoi'=>60],
['noidung'=>'Xe khách, xe tải.','dapandung'=>'true','id_cauhoi'=>60]]);
    }
}
