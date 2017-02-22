<?php

/**
 * AdditionController
 *
 * This class is for handling addition
 *
 * @author     brainstorming
 *
 * @version    June2017
 */

class AdditionController implements Operations
{

    public function calculate($val1, $val2)
    {
        $dal = new DAL();

        $sql = "SELECT ADD_FN('$val1','$val2')";
        return $result = $dal->query($sql);


        //print_r($result); 
        /* 	 $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);


          if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
          } */
        /* $param1 = 1;
          $param2 = 1;
          $stmt = $mysqli->prepare('CALL ADD(:param1, :param2)');
          $stmt->execute(array(':param1' => $param1, ':param2' => $param2));
          // you have to read the result set here
          while ($row = $result1->fetch_assoc()) {
          printf("%d\n", $row['id']);
          }
         */
    }
}