<?php


/**
 * Multiplication Controller
 *
 * This class is for handling multiplication
 *
 * @author     brainstorming
 *
 * @version    June2017
 */

class MultiplicationController implements Operations
{

    public function calculate($val1, $val2)
    {
        $dal = new DAL();
        $sql = "SELECT MUL_FN('$val1','$val2')";
        
        return $result = $dal->query($sql);
    }
}