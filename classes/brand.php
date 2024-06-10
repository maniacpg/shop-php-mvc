<?php

include("../lib/database.php");
include("../helpers/format.php");
?>

<?php
class brand
{
    private $db;
    private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_brand($brandName)
    {
        $brandName = $this->fm->validation($brandName);
        $brandName = mysqli_real_escape_string($this->db->link, $brandName);

        if (empty($brandName)) {
            $alert= "<span class='error'>Vui lòng nhập tên thương hiệu!</span>";
            return $alert;
        } else {

            $query = "INSERT INTO brand (brandName) VALUES ('$brandName')";
            $result = $this->db->insert($query);
            if($result){
                $alert = "<span class='success'>Thêm thành công!</span>";
                return $alert;
            }
            else{
                $alert= "<span class='error'>Thêm thất bại !</span>";
                return $alert;
            }

        }
    }
    public function show_brand()
    {
        $query = "select * from brand order by brandId desc";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_brand($brandName, $id)
    {
        $brandName = $this->fm->validation($brandName);
        $brandName = mysqli_real_escape_string($this->db->link, $brandName);
        $id = mysqli_real_escape_string($this->db->link, $id);
        if (empty($brandName)) {
            $alert= "<span class='error'>Vui lòng nhập tên thương hiệu!</span>";
            return $alert;
        } else {

            $query = "Update brand set brandName='$brandName' where brandId=$id";
            $result = $this->db->insert($query);
            if($result){
                $alert = "<span class='success'> Sửa thành công!</span>";
                return $alert;
            }
            else{
                $alert= "<span class='error'>Sửa không thành công!</span>";
                return $alert;
            }

        }
    }
    public function del_brand($id)
    {
        $query = "delete from brand where brandId='$id'";
        $result = $this->db->delete($query);
        if($result){
            $alert = "<span class='success'> Xóa thành công!</span>";
            return $alert;
        }
        else{
            $alert= "<span class='error'>Xóa không thành công!</span>";
            return $alert;
        }
    }
    public function get_brand_byId($id)
    {
        $query = "select * from brand where brandId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

}
?>
