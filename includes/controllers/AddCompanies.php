<?php 
    /**
    * @brief This class takes new representatives data.
    */
class AddCompanies extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        if(!empty($_POST['company_name']) && !empty($_POST['address']) && !empty($_POST['phone_number']) && !empty($_POST['email'])){
            $company_name = $_POST['company_name'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            
            $db = new CrudModel();
        
            $db->addDataCom($company_name,$address,$phone_number, $email);

echo "<script>window.location.href='companies'</script>";
        
        }

    }
}

?>