<?php
    include("../lib/session.php");
    Session::init();
    Session::checkLogin();

    include("../lib/database.php");
    include("../helpers/format.php");
?>

<?php
class adminlogin
{
    private $db;
    private $fm;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function login_admin($adminUser, $adminPass)
    {


        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

        if (empty($adminUser) || empty($adminPass)) {
            $alert = "Please enter all fields";
            return $alert;
        } else {
            // Mã hóa mật khẩu với MD5
            $adminPass = md5($adminPass);

            $query = "SELECT * FROM admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1";
            $result = $this->db->select($query);

            if ($result != false) {
                $value = $result->fetch_assoc();
                Session::set('adminlogin', true);
                Session::set('adminId', $value['adminId']);
                Session::set('adminUser', $value['adminUser']);
                Session::set('adminName', $value['adminName']);

                error_log("Failed login attempt: $query");
                header("Location: index.php");
                exit();
            } else {
                error_log("Failed login attempt: $query");
                $alert = "Invalid Username or Password";
                return $alert;
            }
        }
    }
}
?>
