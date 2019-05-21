<?php
require_once("../model/DAO.php");
class listProductController{
    private $product;
    public function __construct(){
        $this->product = new DAO();
        $this->createTable();
    }
    private function createTable(){
        $row = $this->product->getProduct();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['pid'] ."</th>";
            echo "<th>".$value['pname'] ."</th>";
            echo "<td>".$value['pprice'] ."</td>";
            echo "<td>".$value['pquan'] ."</td>";
            echo "<td>".$value['pdesc'] ."</td>";
            echo "<td>".$value['pimage'] ."</td>";
            echo "<td><a class='btn btn-warning' href='edit.php?id=".$value['pid']."'>Edit</a><a class='btn btn-danger' href='../controller/DeleteProductController.php?id=".$value['pid']."'>Delete</a></td>";
            echo "</tr>";
        }
    }
}