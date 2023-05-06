<?php
class product
{
    private ?int $id = null;
    private ?string $name = null;
    private ?string $img = null;
    private ?int $price = null;
    private ?string $stock=null;
    private ?string $description=null;
    private ?string $date = null;

    public function __construct($id = null, $n, $p, $a, $d,$h,$e)
    {
        $this->id = $id;
        $this->name = $n;
        $this->img = $p;
        $this->price = $a;
        $this->stock= $h;
        $this->date = $d;
        $this->description = $e;
    }

    /**
     * Get the value of id
     */
    public function getid()
    {
        return $this->id;
    }
    public function getdescription()
    { 
        return $this->description;
    }


    /**
     * Get the value of name
     */
    public function getname()
    {
        return $this->name;
    }
    public function getstock()
    {
        return $this->stock;
    }
    public function setstock($stock)
    {
        $this->stock = $stock;

   
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setname($name)
    {
        $this->name = $name;

   
    }
    public function setdescription($description)
    {
        $this->description = $description;

   
    }

    /**
     * Get the value of img
     */
    public function getimg()
    {
        return $this->img;
    }
   

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setimg($img)
    {
        $this->img = $img;

        
    }

    /**
     * Get the value of price
     */
    public function getprice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setprice($price)
    {
        $this->price = $price;

       
    }

    /**
     * Get the value of date
     */
    public function getdate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setdate($date)
    {
        $this->date = $date;

        
    }
    public function setid($date)
    {
        $this->id = $date;

        
    }
}
?>