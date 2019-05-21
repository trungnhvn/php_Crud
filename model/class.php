<?php
require_once (" ../db.php ");
class  DAO {
protected  $mysqli ;
    public  function  __construct () {
        $this -> connection ();
    }
    private  function  connection () {
        $this -> mysqli  =  new  mysqli (SERVER , USER , PASS , DATABASE );
    }
    public  function  insertProduct ( $name , $price , $quantity , $desc , $image ) {
        $stmt  =  $this -> mysqli -> prepare ( " INSERT INTO product ( `pname` , `pprice` , `pquan` , `pdesc` , `pimage` ) VALUES (,,)????? " );
        $stmt -> bind_param ( "siiss" , $name , $price , $quantity , $desc , $image );
         if ( $stmt -> execute () ==  TRUE ) {
            return  true ;
        } else {
    return  false ;
}
    }
    public  function  getProduct () {
        $array = null;
    $result  =  $this -> mysqli -> query (" SELECT  *  FROM products ");
        while ( $row  =  $result -> fetch_array (MYSQLI_ASSOC)) {
            $array [] =  $row ;
        }
        return $array;
    }
    public  function  deleteProduct ($id ) {
        if ( $this -> mysqli -> query ("DELETE  FROM  `products`  WHERE  pid  =  '" . $id . "'; ") ==  TRUE ) {
            return  true ;
        } else {
            return  false ;
        }
    }
    public  function  searchProduct ( $id ) {
        $result  =  $this -> mysqli -> query ( " SELECT  *  FROM books WHERE pname = ' $id ' " );
        return  $result -> fetch_array ( MYSQLI_ASSOC );
    }
    public  function  updateProduct ( $name , $price , $quantity , $desc , $image , $id ) {
        $stmt  =  $this -> mysqli -> prepare ( " UPDATE  `products`  SET  `pname`  = ,? `pprice` = ,? `pquan` = ,? ` pimage` = ,?  WHERE  `pid`  = ? " );
            $stmt -> bind_param ( "siisss" , $name , $price , $quantity , $desc , $image , $id );
            if ( $stmt -> execute () == TRUE ) {
            return  true ;
            }
            else {
            return  false ;
        }
    }
}
