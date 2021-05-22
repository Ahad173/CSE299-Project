<?php 

    /**
    * @brief Update class. Do stuffs to print the medicine information and it extebds to Controller class.
    */
class Update extends Controller{

    public static function searchUpdate($query) {
        $searchModel = new SearchModel();
        $result = $searchModel->searchItems('medicines', $query, 'medicine_name');
        $update = new update();
        $update->printResult($result);
    }

    public static function printResult($result) {
        foreach ($result as $item) { ?>
             <tr>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[2] ;?></td>
            <td><?php echo $item[5] ; ?></td>
            <td><?php echo $item[8] ;?></td>
            <td><?php echo $item[4] ;?></td>
            
            <td><?php echo '<form action="deleteMedicines?mid='.$item[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
<?php   }
    }
    /**
    * @brief A page with all the information of medicine with update and delete button.
    * @param No parameter
    * @return Prints the medicines information in a tabular form.
    */
    public static function updateM(){
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $update = new update();
            $update->searchUpdate($query);
        }
        else{
        $result = self::query("select * from medicines"); /**< result - Result retrived from database */
        foreach($result as $item){?>
        <tr>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[2] ;?></td>
            <td><?php echo $item[5] ; ?></td>
            <td><?php echo $item[8] ;?></td>
            <td><?php echo $item[4] ;?></td>
            
            <td><?php echo '<form action="deleteMedicines?mid='.$item[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
        
        <?php

        }

    }

    }
}

?>