<?php

require_once("../lib/database.php");
require_once("../helpers/format.php");
?>

<?php
class category
{
    private $db;
    private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_category($catName)
    {
        $catName = $this->fm->validation($catName);
        $catName = mysqli_real_escape_string($this->db->link, $catName);

        if (empty($catName)) {
            $alert= "<span class='error'>Vui lòng nhập tên danh mục!</span>";
            return $alert;
        } else {

            $query = "INSERT INTO categories (catName) VALUES ('$catName')";
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
    public function show_category()
    {
        $query = "select * from categories order by catId desc";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_category($catName, $id)
    {
        $catName = $this->fm->validation($catName);
        $catName = mysqli_real_escape_string($this->db->link, $catName);
        $id = mysqli_real_escape_string($this->db->link, $id);
        if (empty($catName)) {
            $alert= "<span class='error'>Vui lòng nhập tên danh mục!</span>";
            return $alert;
        } else {

            $query = "Update categories set catName='$catName' where catId=$id";
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
    public function del_category($id)
    {
        $query = "delete from categories where catId='$id'";
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
    public function get_cat_byId($id)
    {
        $query = "select * from categories where catId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

}
?>
