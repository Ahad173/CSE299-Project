<?php 
    /**
    * @brief This class takes new Employees data.
    */
class AddEmployees extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['phone_number'])
         && !empty($_POST['dob']) && !empty($_POST['salary']) && !empty($_POST['job'])
         && !empty($_POST['join_date']) && !empty($_POST['email']) && !empty($_POST['address'])){
            
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone_number = $_POST['phone_number'];
            $dob = $_POST['dob'];
            $salary = $_POST['salary'];
            $job = $_POST['job'];
            $join_date = $_POST['join_date'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            
            $db = new CrudModel();
        
            $db->addDataEmp($first_name,$last_name,$phone_number,$dob,$salary,$job,$join_date, $email,$address);

echo "<script>window.location.href='employees'</script>";
        
        }

    }
}

?>