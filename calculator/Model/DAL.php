<?php

class DAL
{

    public function __construct()
    {
        
    }

    private function dbconnect()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)
            or die("<br/>Could not connect to MySQL server");

        mysqli_select_db($conn, DB_DB)
            or die("<br/>Could not select the indicated database");

        return $conn;
    }

    public function query($sql)
    {

        $conn = $this->dbconnect();

        $res = mysqli_query($conn, $sql);
        if ($res === FALSE) {
            die(mysqli_error($conn));
        } else {
            $row = mysqli_fetch_row($res);
            return $row[0];
        }
        //  $row = mysql_fetch_array($results);
        /*  $results = array();

          while ($row = mysql_fetch_array($res)){

          foreach ($row as $k=>$v){
          $result->$k = $v;
          }

          $results[] = $result;
          }
          return $results; */
    }
}
