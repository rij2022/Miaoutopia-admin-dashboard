<?php
class Orders
{
    private ?int $id_orders= null;
    private ?string $product_id = null;
    private ?int $total_amount = null;
    private ?int $quantite = null;
    private ?string $status=null;
    private ?string $order_date = null;

    public function __construct($id_orders = null, $n=null, $a, $d,$h,$q)
    {
        $this->id_orders = $id_orders;
        $this->product_id = $n;
        $this->total_amount = $a;
        $this->status= $h;
        $this->order_date = $d;
        $this->order_date = $q;
    }

    /**
     * Get the value of id_orders
     */
    public function getid_orders()
    {
        return $this->id_orders;
    }
    public function getquantite()
    {
        return $this->quantite;
    }
    public function gettotal()
    {
        return $this->total_amount;
    }
 
    /**
     * Get the value of product_id
     */
    public function getproduct_id()
    {
        return $this->product_id;
    }
    public function getstatus()
    {
        return $this->status;
    }
    public function setstatus($status)
    {
        $this->status = $status;

   
    }
    public function setquantite($quantite)
    {
        $this->quantite = $quantite;

   
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */
    public function setproduct_id($product_id)
    {
        $this->product_id = $product_id;

   
    }
    public function settotal($total_amount)
    {
        $this->total_amount = $total_amount;

   
    }



 
   



    /**
     * Get the value of total_amount
     */
    public function gettotal_amount()
    {
        return $this->total_amount;
    }

    /**
     * Set the value of total_amount
     *
     * @return  self
     */
    public function settotal_amount($total_amount)
    {
        $this->total_amount = $total_amount;

       
    }

    /**
     * Get the value of order_date
     */
    public function getorder_date()
    {
        return $this->order_date;
    }

    /**
     * Set the value of order_date
     *
     * @return  self
     */
    public function setorder_date($order_date)
    {
        $this->order_date = $order_date;

        
    }
    public function setid_orders($id_orders)
    {
        $this->id_orders = $id_orders;

        
    }
}
?>