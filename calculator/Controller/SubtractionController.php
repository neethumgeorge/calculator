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
        return $result = $dal->api('SUB_FN',$val1,$val2);
    }
}