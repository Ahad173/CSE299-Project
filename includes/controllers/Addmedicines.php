<?php 
    /**
    * @brief This class takes new medicines data.
    */
class Addmedicines extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        if(!empty($_POST['medicine_name']) && !empty($_POST['generic_name']) && !empty($_POST['otc']) && !empty($_POST['company_name'])
         && !empty($_POST['category']) && !empty($_POST['retail_price'])&& !empty($_POST['purchase_price'])
         && !empty($_POST['stock'])&& !empty($_POST['stock_minimum']) && !empty($_POST['shelf_no'])&& !empty($_POST['expiry_date']) ){
            $medicineName = $_POST['medicine_name'];
            $genericName = $_POST['generic_name'];
            $otc = $_POST['otc'];
            $companyName = $_POST['company_name'];
            $category = $_POST['category'];
            $retailPrice = $_POST['retail_price'];
            $purchasePrice = $_POST['purchase_price'];
            $stock = $_POST['stock'];
            $stockMinimum = $_POST['stock_minimum'];
            $shelfNo = $_POST['shelf_no'];
            $expiryDate = $_POST['expiry_date'];
            
            $db = new CrudModel();
        
            $db->addDataMed($medicineName,$genericName ,$otc ,$companyName ,$category ,$retailPrice ,$purchasePrice ,$stock ,$stockMinimum ,$shelfNo ,$expiryDate);

            echo "<script>window.location.href='update'</script>";
        
        }

    }
}

?>