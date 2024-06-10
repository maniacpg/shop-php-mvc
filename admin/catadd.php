<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php'?>

<?php
$class = new category();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $catName = $_POST['catName'];


    $insertCat = $class->insert_category($catName);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm danh mục mới</h2>


               <div class="block copyblock">

                 <form action="catadd.php" method="post">
                     <?php
                     if(isset($insertCat)){
                         echo $insertCat;
                     }
                     ?>
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" placeholder="Thêm tên danh mục" class="medium" name="catName" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>