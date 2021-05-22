<?php 
    /**
    * @brief This class sends medId of medicines that needs to be deleted.
    */
class DeleteCompleteMed extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        $medID = $_GET['mid'];

        $db = new CrudModel();
        
        $result = $db->deleteDataMed($medID);
       echo "<script>window.location.href='update'</script>";
       
          
        
        }

    }


?>