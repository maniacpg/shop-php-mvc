<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include '../classes/category.php'; ?>

<?php
if(isset($_GET['id']) || $_GET['catId']!=NULL){
    $id = $_GET['catId'];
}else{
    echo "<script>window.location'catlist.php'</script>";
}
$cat = new category();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $catName = $_POST['catName'];


    $updateCat = $cat->update_category($catName, $id);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa danh mục</h2>

        <div class="block copyblock">
            <?php
            if (isset($updateCat)) {
                echo $updateCat;
            }
            ?>
            <?php
                $get_cate_name =  $cat->get_cat_byId($id);
                if($get_cate_name){
                    while ($result = $get_cate_name->fetch_assoc()) {

            ?>
                    <form action="" method="post">
                        <table class="form">
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo $result['catName'] ?>" class="medium" name="catName" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" Value="Update" />
                                </td>
                            </tr>
                        </table>
                    </form>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
