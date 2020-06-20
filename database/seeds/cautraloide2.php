<?php

use Illuminate\Database\Seeder;

class cautraloide2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cautraloi')->insert([
        	['noidung'=>'Vạch kẻ đường là vạch chỉ sự phân chia làn đường, vị trí hoặc hướng đi, vị trí dừng lại.','dapandung'=>'true','id_cauhoi'=>21],
['noidung'=>'Vạch kẻ đường là vạch chỉ sự phân biệt trí dừng, đỗ trên đường.','dapandung'=>'false','id_cauhoi'=>21],
['noidung'=>'Tất cả các ý nêu trên.','dapandung'=>'false','id_cauhoi'=>21],
['noidung'=>'Gồm xe ô tô, máy kéo, xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy, xe cơ giới dành cho người khuyết tật và xe máy chuyên dùng.','dapandung'=>'false','id_cauhoi'=>22],
['noidung'=>'Gồm xe ô tô, máy kéo, rơ moóc hoặc sơ mi rơ moóc được kéo bởi xe ô tô, máy kéo, xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy (kể cả xe máy điện) và các loại xe tương tự.','dapandung'=>'true','id_cauhoi'=>22],
['noidung'=>'Nồng độ cồn vượt quá 50 miligam/100 mililit máu.','dapandung'=>'true','id_cauhoi'=>23],
['noidung'=>'Nồng độ cồn vượt quá 40 miligam/100 mililit máu.','dapandung'=>'false','id_cauhoi'=>23],
['noidung'=>'Nồng độ cồn vượt quá 30 miligam/100 mililit máu.','dapandung'=>'false','id_cauhoi'=>23],
['noidung'=>'Nghiêm cấm sản xuất, được phép sử dụng.','dapandung'=>'false','id_cauhoi'=>24],
['noidung'=>'Nghiêm cấm mua bán, cho phép sử dụng.','dapandung'=>'false','id_cauhoi'=>24],
['noidung'=>'Nghiêm cấm sản xuất, mua bán, sử dụng trái phép.','dapandung'=>'true','id_cauhoi'=>24],
['noidung'=>'Nhóm biển báo cấm để biểu thị các điều cấm; nhóm biển báo hiệu nguy hiểm để cảnh báo các tình huống nguy hiểm có thể xảy ra, nhóm biển hiệu lệnh để báo hiệu các hiệu lệnh phải thi hành.','dapandung'=>'true','id_cauhoi'=>25],
['noidung'=>'Nhóm biển chỉ dẫn để chỉ dẫn hướng đi hoặc các điều biết; nhóm biển phụ để thuyết minh bổ sung các loại biển báo cấm, biển báo nguy hiểm, biển hiệu lệnh và biển chỉ dẫn.','dapandung'=>'true','id_cauhoi'=>25],
['noidung'=>'Trên đường có nhiều làn đường cho xe đi cùng chiều được phân biêt bằng vạch kẻ phân làn đường, người điều khiển phương tiện phải cho xe đi trong một làn đường và chỉ được chuyển làn đường ở những nơi cho phép; khi chuyển làn đường phải có tín hiệu báo trước và đảm bảo an toàn..','dapandung'=>'true','id_cauhoi'=>26],
['noidung'=>'Phương tiện tham gia giao thông đường bộ di chuyển tốc độ thấp hơn đi về bên trái.','dapandung'=>'false','id_cauhoi'=>26],
['noidung'=>'Trên đường một chiều có vạch kẻ phân làn đường, xe thô sơ phải đi trên làn đường bên phải trong cùng xe cơ giới, xe máy chuyên dùng đi trên làn đường bên trái, phương tiện tham gia giao thông đường bộ di chuyển tốc độ thấp hơn đi về bên phải.','dapandung'=>'true','id_cauhoi'=>26],
['noidung'=>'Nhường đường cho xe đi ở bên phải mình tới.','dapandung'=>'false','id_cauhoi'=>27],
['noidung'=>'Nhường đường cho xe đi ở bên trái mình tới.','dapandung'=>'false','id_cauhoi'=>27],
['noidung'=>'Nhường đường cho xe đi trên đường ưu tiên hoặc đường chính đi từ bất kì hướng nào tới.','dapandung'=>'true','id_cauhoi'=>27],
['noidung'=>'Khi tham gia giao thông đường bộ.','dapandung'=>'true','id_cauhoi'=>28],
['noidung'=>'Chỉ khi đi trên đường cao tốc.','dapandung'=>'false','id_cauhoi'=>28],
['noidung'=>'16 tuổi.','dapandung'=>'false','id_cauhoi'=>29],
['noidung'=>'18 tuổi.','dapandung'=>'true','id_cauhoi'=>29],
['noidung'=>'17 tuổi.','dapandung'=>'false','id_cauhoi'=>29],
['noidung'=>'Ô tô chở người trên 30 chỗ ngồi, ô tô tải có trọng tải từ 3500kg trở lên, ô tô sơ mi rơ mooc, ô tô kéo rơ moóc, ô tô kéo xe khác, ô tô chuyên dùng, xe mô tô, xe gắn máy.','dapandung'=>'true','id_cauhoi'=>30],
['noidung'=>'Ô tô chở người đến 30 chỗ ngồi, ô tô tải có trọng tải dưới 3500 kg.','dapandung'=>'false','id_cauhoi'=>30],
['noidung'=>'Xe máy kéo, xe công nông, xe lam, xe lôi máy xe xích lô máy, xe ba gác máy, xe máy chuyên dùng và các loại xe tương tự (loại đang được phép hoạt động).','dapandung'=>'false','id_cauhoi'=>30],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>31],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>31],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>31],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>31],
['noidung'=>'Biển 3.','dapandung'=>'true','id_cauhoi'=>32],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>32],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>32],
['noidung'=>'Biển 1.','dapandung'=>'true','id_cauhoi'=>33],
['noidung'=>'Biển 2.','dapandung'=>'false','id_cauhoi'=>33],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>33],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>34],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>34],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>34],
['noidung'=>'Được phép.','dapandung'=>'false','id_cauhoi'=>35],
['noidung'=>'Không được phép.','dapandung'=>'true','id_cauhoi'=>35],
['noidung'=>'Xe tải, xe lam, mô tô.','dapandung'=>'false','id_cauhoi'=>36],
['noidung'=>'Xe lam, xe tải, mô tô.','dapandung'=>'false','id_cauhoi'=>36],
['noidung'=>'Mô tô, xe lam, xe tải.','dapandung'=>'true','id_cauhoi'=>36],
['noidung'=>'Xe lam, mô tô, xe tải.','dapandung'=>'false','id_cauhoi'=>36],
['noidung'=>'Xe khách, xe tải, mô tô, xe con.','dapandung'=>'false','id_cauhoi'=>37],
['noidung'=>'Xe con, xe khách, xe tải, mô tô.','dapandung'=>'false','id_cauhoi'=>37],
['noidung'=>'Mô tô, xe tải, xe khách, xe con.','dapandung'=>'true','id_cauhoi'=>37],
['noidung'=>'Mô tô, xe tải, xe con, xe khách.','dapandung'=>'false','id_cauhoi'=>37],
['noidung'=>'Xe lam.','dapandung'=>'false','id_cauhoi'=>38],
['noidung'=>'Xe xích lô.','dapandung'=>'true','id_cauhoi'=>38],
['noidung'=>'Cả ba hướng.','dapandung'=>'false','id_cauhoi'=>39],
['noidung'=>'Hướng 1 và 2.','dapandung'=>'false','id_cauhoi'=>39],
['noidung'=>'Hướng 1 và 3.','dapandung'=>'true','id_cauhoi'=>39],
['noidung'=>'Hướng 2 và 3.','dapandung'=>'false','id_cauhoi'=>39],
['noidung'=>'Xe con.','dapandung'=>'false','id_cauhoi'=>40],
['noidung'=>'Xe tải.','dapandung'=>'true','id_cauhoi'=>40],
['noidung'=>'Xe con, xe tải.','dapandung'=>'false','id_cauhoi'=>40]
        ]);
    }
}
