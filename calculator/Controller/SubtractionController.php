<?php

/**
 * SubtractionController
 *
 * This class is for handling subtraction
 *
 * @author     brainstorming
 *
 * @version    June2017
 */

class SubtractionController implements Operations
{

    public function calculate($val1, $val2)
    {
        $dal = new DAL();
        $sql = "SELECT SUB_FN('$val1','$val2')";
        return $result = $dal->query($sql);
    }
}