<?php
require_once ("class.php");
class  Product  extends  DAO
{
    private $pname;
    private $pprice;
    private $pquan;
    private $pdesc;
    private $pimage;
    private $pid;

    /**
     * @return mixed
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * @param mixed $pname
     * @return Product
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPprice()
    {
        return $this->pprice;
    }

    /**
     * @param mixed $pprice
     * @return Product
     */
    public function setPprice($pprice)
    {
        $this->pprice = $pprice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPquan()
    {
        return $this->pquan;
    }

    /**
     * @param mixed $pquan
     * @return Product
     */
    public function setPquan($pquan)
    {
        $this->pquan = $pquan;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdesc()
    {
        return $this->pdesc;
    }

    /**
     * @param mixed $pdesc
     * @return Product
     */
    public function setPdesc($pdesc)
    {
        $this->pdesc = $pdesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPimage()
    {
        return $this->pimage;
    }

    /**
     * @param mixed $pimage
     * @return Product
     */
    public function setPimage($pimage)
    {
        $this->pimage = $pimage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     * @return Product
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
        return $this;
    }
    public  function  include () {
        return  $this -> insertProduct ( $this -> getPname(), $this -> getPprice(), $this -> getPquan(), $this -> getPdesc(), $this -> getPimage());
    }

}




