<?php
//
//include("../lib/database.php");
//include("../helpers/format.php");
//?>
<!---->
<?php
//class product
//{
//    private $db;
//    private $fm;
//
//    public function __construct(){
//        $this->db = new Database();
//        $this->fm = new Format();
//    }
//
//    public function insert_product($data, $files)
//    {
//
//        $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
//        $brand = mysqli_real_escape_string($this->db->link, $data['brand']);
//        $category = mysqli_real_escape_string($this->db->link, $data['category']);
//        $product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);
//        $price = mysqli_real_escape_string($this->db->link, $data['price']);
//        $type = mysqli_real_escape_string($this->db->link, $data['type']);
////kiem tra hinh anh va lay hinh anh cho vao folder /uploads
//        $permited = array('jpg', 'jpeg', 'png', 'gif');
//        $file_name = $_FILES['image']['name'];
//        $file_size = $_FILES['image']['size'];
//        $file_tmp = $_FILES['image']['tmp_name'];
//
//        $div = explode('.', $file_name);
//        $file_ext = strtolower(end($div));
//        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
//        $uploaded_image = 'uploads/'.$unique_image;
//
//
//        if ($productName=="" || $brand=="" || $category=="" || $product_desc=="" || $price=="" || $type==""  || $file_size=="") {
//            $alert= "<span class='error'>Vui lòng nhập tất cả các trường!</span>";
//            return $alert;
//        } else {
//
//            $query = "INSERT INTO categories (catName) VALUES ('$catName')";
//            $result = $this->db->insert($query);
//            if($result){
//                $alert = "<span class='success'>Thêm thành công!</span>";
//                return $alert;
//            }
//            else{
//                $alert= "<span class='error'>Thêm thất bại !</span>";
//                return $alert;
//            }
//
//        }
//    }
//    public function show_product()
//    {
//        $query = "select * from categories order by catId desc";
//        $result = $this->db->select($query);
//        return $result;
//    }
//    public function update_product($catName, $id)
//    {
//        $catName = $this->fm->validation($catName);
//        $catName = mysqli_real_escape_string($this->db->link, $catName);
//        $id = mysqli_real_escape_string($this->db->link, $id);
//        if (empty($catName)) {
//            $alert= "<span class='error'>Vui lòng nhập tên danh mục!</span>";
//            return $alert;
//        } else {
//
//            $query = "Update categories set catName='$catName' where catId=$id";
//            $result = $this->db->insert($query);
//            if($result){
//                $alert = "<span class='success'> Sửa thành công!</span>";
//                return $alert;
//            }
//            else{
//                $alert= "<span class='error'>Sửa không thành công!</span>";
//                return $alert;
//            }
//
//        }
//    }
//    public function del_product($id)
//    {
//        $query = "delete from categories where catId='$id'";
//        $result = $this->db->delete($query);
//        if($result){
//            $alert = "<span class='success'> Xóa thành công!</span>";
//            return $alert;
//        }
//        else{
//            $alert= "<span class='error'>Xóa không thành công!</span>";
//            return $alert;
//        }
//    }
//    public function get_product_byId($id)
//    {
//        $query = "select * from categories where catId = '$id'";
//        $result = $this->db->select($query);
//        return $result;
//    }
//
//}
//?>
