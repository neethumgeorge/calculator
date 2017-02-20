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
   /*  protected $operands = array(); */

    public function Operands($col1,$col2)
    {
        $this->col1 = $col1;
        $this->col2 = $col2;
    }

/*     public function addOperand($operand)
    {
        $this->operands[] = $operand;
    } */

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

class Addition implements Operations
{
    public function calculate($val1,$val2)
    {
	 $dal = new DAL();

 	$sql = "SELECT ADD_FN('$val1','$val2')";
	return $result = $dal->query($sql);
	

	//print_r($result); 
/* 	 $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);

  
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  */
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

class Subtraction implements Operations
{
    public function calculate($val1,$val2)
    {
	 $dal = new DAL();
 	$sql = "SELECT SUB_FN('$val1','$val2')";
	return $result = $dal->query($sql);
    }
}
class Multiply implements Operations
{
    public function calculate($val1,$val2)
    {
	 $dal = new DAL();
 	$sql = "SELECT MUL_FN('$val1','$val2')";
	return $result = $dal->query($sql);
    }
}
class Division implements Operations
{
    public function calculate($val1,$val2)
    {
	 $dal = new DAL();
 	$sql = "SELECT DIV_FN('$val1','$val2')";
	return $result = $dal->query($sql);
    }
}
?>
