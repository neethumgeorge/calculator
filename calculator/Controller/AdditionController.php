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

        return $result = $dal->api('ADD_FN',$val1,$val2);

    }
}