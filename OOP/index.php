<?php
/*
1. Lập trình hướng đối tượng 
- là 1 kỹ thuật lập trình => quan trọng và phổ biến
- cho phép tạo ra các đối tuownjg trong code trừu tượng hóa, mô hình hóa các đối tượng thực tế
                - THUỘC TÍNH: thông tin, đặc điểm, tính chất
- ĐỐI TƯỢNG :
                - thương thức: khả năng hành động đối tượng thực hiện

- Mục tiêu: tối ưu hóa việc quản lý
            tăng khả năng tái sử dụng
            tóm gọn các thủ tục đã bt trước tính chất 
2. CLASS và OBJECT
a, class

class DOG {
    public $name;
    public $color;
    public $height;
    public function __construct()
    {
        $this->name = "Chó";
        $this->color = "black";
        $this->height = '6 kg';
    
    }
        
    }
$DOG = new DOG()

3. TÍNH CHẤT
-bao gói:  không cho phép người dùng trực tiếp tác động đến dữ liệu bên trong đối tượng 
mà phải thông qua các phương thức mà đối tượng cung cấp. Tính chất này đảm bảo tính toàn vẹn của đối tượng.
- Tính trừu tượng: Giúp loại bỏ các hành vi, 
thuộc tính không quan trọng của đối tượng và chỉ giữ lại những hành vi,
thuộc tính liên quan đến vấn đề đang giải quyết
- Tính đa hình: Tính đa hình cho phép các hành vi,
 thuộc tính khác nhau được thực thi khác nhau trên các đối tượng khác nhau.

*/

// Lớp Xe
class Xe
{
    private $loaixe;
  
    var $tenxe;
  
    function getLoaixe()
    {
        return $this->loaixe;
    }
  
    function setLoaixe($loaixe)
    {
        $this->loaixe = $loaixe;
    }
  
    private function xoaLoaixe()
    {
        echo 'Hàm xóa loại xe';
    }
}
  

?>