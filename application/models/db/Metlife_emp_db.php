<?

class Metlife_emp_db extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    /*
    * user_login_in
    * Login
    */
    public function user_login_in($userid, $password)
    {
        //DB connecter include
        include 'inc/db_conn.php';

        $sql_query = "SELECT emp_no, emp_dob, grade, emp_nm FROM metlife_emp WHERE emp_no='$userid' AND emp_dob = '$password'";

        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        // session_start();
        // print_r($row);

        if($row){
            $_SESSION['is_logged'] = 'YES';
            $_SESSION['user_id'] = $userid;
            $_SESSION['user_name'] = $row[3];

            // $output['result'] = TRUE;
            $output['login'] = "success";
            $output['user_id'] = $row[0];
            $output['level'] = $row[2];
            $output['user_name'] = $row[3];
        }else
        {
            $output['login'] = "fail";
        }

        return $output;

      // $this->db->select("emp_no, emp_dob, grade, emp_nm");
      // $this->db->from("metlife_emp A");
      // $this->db->where("emp_no", $userid);
      // $this->db->where("emp_dob", $password);

      // return $this->db->get()->row_array();
    }

    /*
    * admin_login_in
    * Login
    */
    public function admin_login_in($userid, $password)
    {

        //DB connecter include
        include 'inc/db_conn.php';

        $sql_query = "SELECT userid, password, level, name FROM member WHERE userid='$userid' AND password = '$password'";

        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        // session_start();
        // print_r($row);

        if($row){
            $_SESSION['is_logged'] = 'YES';
            $_SESSION['user_id'] = $userid;
            $_SESSION['user_name'] = $row[3];

            // $output['result'] = TRUE;
            $output['login'] = "success";
            $output['user_id'] = $row[0];
            $output['level'] = $row[2];
            $output['user_name'] = $row[3];
        }else
        {
            $output['login'] = "fail";
        }

        return $output;

      // echo "db aaaaa db   ";
      
      // $sql_query = "SELECT * FROM member WHERE userid='$userid'";
      // echo $sql_query;
      
      // $this->load->database();
        
      // $sql = $this->db->get_compiled_select('mytable');
      // echo $sql;
      
      // $this->db->select("userid, password, level, name");
      // $this->db->from("member");
      // $this->db->where("userid", $userid);
      // $this->db->where("password", $password);

      // echo $this->db->get_compiled_select();
      // return $this->db->get()->row_array();
    }
}

?>