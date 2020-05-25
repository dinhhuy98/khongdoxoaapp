<?php

use Illuminate\Database\Seeder;

class cautraloide1 extends Seeder
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
        	['noidung'=>'Đường bộ, cầu đường bộ.','dapandung'=>'false','id_cauhoi'=>1],
['noidung'=>'Hầm đường bộ, bến phà đường bộ.','dapandung'=>'true','id_cauhoi'=>1],
['noidung'=>'Đường, cầu đường bộ, hầm đường bộ, bến phà đường bộ và các công trình phụ trợ khác.','dapandung'=>'false','id_cauhoi'=>1],
['noidung'=>'Phương tiện giao thông cơ giới đường bộ, phương tiện giao thông thô sơ đường bộ.','dapandung'=>'true','id_cauhoi'=>2],
['noidung'=>'Phương tiện giao thông thô sơ đường bộ, phương tiện giao thông cơ giới đường bộ và xe máy chuyên dùng.','dapandung'=>'false','id_cauhoi'=>2],
['noidung'=>'Cả hai ý nêu trên.','dapandung'=>'false','id_cauhoi'=>2],
['noidung'=>'Người điều khiển xe ô tô, máy kéo, xe máy chuyên dùng trên đường mà trong máu có nồng độ cồn vượt quá 50 miligam/100 mililit máu hoặc 0,25 miligam/1 lít khí thở.','dapandung'=>'false','id_cauhoi'=>3],
['noidung'=>'Người điều khiển xe ô tô, máy kéo, xe máy chuyên dùng trên đường mà trong máu hoặc hơi thở có nồng độ cồn.','dapandung'=>'true','id_cauhoi'=>3],
['noidung'=>'Người điều khiển xe ô tô, máy kéo, xe máy chuyên dùng trên đường mà trong máu có nồng độ cồn vượt quá 80 miligam/100 mililít máu hoặc 40 miligam/1 lít khí thở.','dapandung'=>'false','id_cauhoi'=>3],
['noidung'=>'Xâm phạm tính mạng, sức khỏe, tài sản của người bị tai nạn giao thông; xâm phạm tính mạng, sức khỏe, tài sản của người gây tai nạn giao thông.','dapandung'=>'false','id_cauhoi'=>4],
['noidung'=>'Lợi dụng việc xảy ra tai nạn giao thông để hành hung, đe dọa, xúi giục, gây sức ép, làm mất trật tự, cản trở việc xử lý tai nạn giao thông.','dapandung'=>'true','id_cauhoi'=>4],
['noidung'=>'Phải cho xe dừng lại trước vạch dừng, trừ trường hợp đã đi quá vạch dừng thi được đi tiếp; trong trường hợp tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát, nhường đường cho người đi bộ qua đường.','dapandung'=>'true','id_cauhoi'=>5],
['noidung'=>'Phải cho xe nhanh chóng vượt qua vạch dừng để đi qua đường giao nhau và chú ý đảm bảo an toàn; khi đèn tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát người đi bộ để bảo đảm an toàn.','dapandung'=>'false','id_cauhoi'=>5],
['noidung'=>'Cả hai ý nêu trên.','dapandung'=>'false','id_cauhoi'=>5],
['noidung'=>'Xe thô sơ phải đi trên làn đường bên trái trong cùng; xe cơ giới, xe máy chuyên dùng đi trên làn đường bên phải.','dapandung'=>'false','id_cauhoi'=>6],
['noidung'=>'Xe thô sơ phải đi trên làn đường bên phải trong cùng; xe cơ giới, xe máy chuyên dùng đi trên làn đường bên trái.','dapandung'=>'true','id_cauhoi'=>6],
['noidung'=>'Xe thô sơ đi trên làn đường phù hợp không ây cản trở giao thông; xe cơ giới, xe máy chuyên dùng đi trên làn đường bên phải.','dapandung'=>'false','id_cauhoi'=>6],
['noidung'=>'Phải nhường đường cho xe đi bên phải.','dapandung'=>'false','id_cauhoi'=>7],
['noidung'=>'Xe báo hiệu xin đường trước xe đo được đi trước.','dapandung'=>'false','id_cauhoi'=>7],
['noidung'=>'Phải nhường đường cho xe đi bên trái.','dapandung'=>'true','id_cauhoi'=>7],
['noidung'=>'Xe cơ giới, xe máy chuyên dùng phải bật đèn; xe thô sơ phải bật đèn hoặc có vật phát sáng báo hiệu; chỉ được dừng xe, đỗ xe ở nơi quy định.','dapandung'=>'true','id_cauhoi'=>8],
['noidung'=>'Xe cơ giới phải bật đèn ngay cả khi đường hầm sáng; phải cho xe trên một làn đường và chỉ chuyển làn ở nơi được phép; được quay đầu xe, lùi xe khi cần thiết.','dapandung'=>'false','id_cauhoi'=>8],
['noidung'=>'Xe máy chuyên dùng phải bật đèn ngay cả khi đường hầm sáng; phải cho xe chạy trên một làn đường và chỉ chuyển làn ở nơi được phép; được quay đầu xe, lùi xe khi cần thiết.','dapandung'=>'false','id_cauhoi'=>8],
['noidung'=>'Giấy phép lái xe, đăng ký xe, giấy phép lưu hành xe.','dapandung'=>'false','id_cauhoi'=>9],
['noidung'=>'Lệnh vận chuyển, đăng ký xe, giấy phép lưu hành xe.','dapandung'=>'false','id_cauhoi'=>9],
['noidung'=>'Giấy phép lái xe phù hợp với loại xe đó, đăng ký xe, giấy chứng nhận kiểm định kỹ thuật và bảo vệ môi trường, giấy chứng nhận bảo hiểm trách nhiệm dân sự của chủ xe cơ giới và giấy phép vận chuyển (nếu loại xe đó cần phải có).','dapandung'=>'true','id_cauhoi'=>9],
['noidung'=>'60km/h.','dapandung'=>'false','id_cauhoi'=>10],
['noidung'=>'50km/h.','dapandung'=>'false','id_cauhoi'=>10],
['noidung'=>'40km/h.','dapandung'=>'true','id_cauhoi'=>10],
['noidung'=>'30km/h.','dapandung'=>'false','id_cauhoi'=>10],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>11],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>11],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>11],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>11],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>12],
['noidung'=>'Biển 2 và 3.','dapandung'=>'true','id_cauhoi'=>12],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>12],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>12],
['noidung'=>'Biển 1.','dapandung'=>'false','id_cauhoi'=>13],
['noidung'=>'Biển 2.','dapandung'=>'true','id_cauhoi'=>13],
['noidung'=>'Biển 3.','dapandung'=>'false','id_cauhoi'=>13],
['noidung'=>'Biển 1 và 2.','dapandung'=>'false','id_cauhoi'=>14],
['noidung'=>'Biển 1 và 3.','dapandung'=>'true','id_cauhoi'=>14],
['noidung'=>'Biển 2 và 3','dapandung'=>'false','id_cauhoi'=>14],
['noidung'=>'Biển 1 và 3.','dapandung'=>'false','id_cauhoi'=>15],
['noidung'=>'Biển 2 và 3.','dapandung'=>'false','id_cauhoi'=>15],
['noidung'=>'Biển 1 và 2.','dapandung'=>'true','id_cauhoi'=>15],
['noidung'=>'Cả ba biển.','dapandung'=>'false','id_cauhoi'=>15],
['noidung'=>'Xe tải, xe lam, xe con, mô tô.','dapandung'=>'false','id_cauhoi'=>16],
['noidung'=>'Xe tải, mô tô, xe lam, xe con.','dapandung'=>'true','id_cauhoi'=>16],
['noidung'=>'Xe lam, xe tải, xe con, mô tô.','dapandung'=>'false','id_cauhoi'=>16],
['noidung'=>'Mô tô, xe lam, xe tải, xe con.','dapandung'=>'false','id_cauhoi'=>16],
['noidung'=>'Xe khách, xe tải, mô tô.','dapandung'=>'true','id_cauhoi'=>17],
['noidung'=>'Xe tải, xe con, xe mô tô.','dapandung'=>'false','id_cauhoi'=>17],
['noidung'=>'Xe khách, xe con, xe mô tô.','dapandung'=>'false','id_cauhoi'=>17],
['noidung'=>'Đúng.','dapandung'=>'false','id_cauhoi'=>18],
['noidung'=>'Không đúng.','dapandung'=>'true','id_cauhoi'=>18],
['noidung'=>'Xe khách, mô tô.','dapandung'=>'false','id_cauhoi'=>19],
['noidung'=>'Tất cả các loại xe trên.','dapandung'=>'true','id_cauhoi'=>19],
['noidung'=>'Không xe nào chấp hành đúng quy tắc giao thông.','dapandung'=>'false','id_cauhoi'=>19],
['noidung'=>'Xe mô tô.','dapandung'=>'false','id_cauhoi'=>20],
['noidung'=>'Xe ô tô con.','dapandung'=>'true','id_cauhoi'=>20],
['noidung'=>'Không xe nào vi phạm.','dapandung'=>'false','id_cauhoi'=>20]
        ]);
    }
}
