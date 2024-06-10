<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php'?>

<?php
$class = new brand();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $brandName = $_POST['brandName'];


    $insertBrand = $class->insert_brand($brandName);
}
?>

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Thêm thương hiệu</h2>


            <div class="block copyblock">

                <form action="brandadd.php" method="post">
                    <?php
                    if(isset($insertBrand)){
                        echo $insertBrand;
                    }
                    ?>
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" placeholder="Thêm tên thương hiệu " class="medium" name="brandName" />
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