<?php

/**
 * Calculator.
 *
 * This class is for handling all the calculations
 *
 * @author     brainstorming
 *
 * @version    June2017
 */
require_once('interface.php');

class Calculator
{
    /*  
     * protected $operands = array();
     */

    public function Operands($col1, $col2)
    {
        $this->col1 = $col1;
        $this->col2 = $col2;
    }

    /**
     * You need any operation that implement the given interface
     */
    public function Operation(Operations $operation)
    {
        $this->operation = $operation;
    }

    public function process()
    {
        return $this->operation->calculate($this->col1, $this->col2);
    }
}

