<?php
include 'C:\xampp\htdocs\Miaoutopia\config.php';
include 'C:\xampp\htdocs\Miaoutopia\Model\orders.php';

class OrdersC
{
    public $db ;
    public function __construct(){
        $this->db = config::getConnexion();
    }
    public function listorders()
    {
        $sql = "SELECT * FROM orders";
       
        try {
            $liste = $this->db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function getproductName($id){
        $sql = "SELECT name FROM product WHERE  id = :id ;"; 
          $query = $this->db->prepare($sql);
                $query->bindValue(':id', $id);
            try {
             ;
                $orders = $query->execute(); 
                $orders= $query->fetch();

                return $orders['name'];
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
    }
   

    function deleteorders($id)
    {
        $sql = "DELETE FROM orders WHERE id_order = :id";
    
        $req = $this->db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addorders($orders)
    {
        $sql = "INSERT INTO orders 
        VALUES (NULL, :ln, :fn, :ad, :d, :q)";
   
        try {
            
            $query = $this->db->prepare($sql);
            $query->execute([
                'ln' => $orders->getproduct_id(),
                 'fn' => $orders->gettotal_amount(),
                 'ad' => $orders->getstatus(),
                 'd'=>$orders->getorder_date(),
                 'q'=>$orders->getquantite()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateorders($orders, $id) {
       
        $idp = intval($orders->getproduct_id());
        $id_order = intval($id);
        $status=$orders->getstatus();
        $sql = "update orders set status = '".$status."' where id_order=".$id_order.";";

        ;
        $query = $this->db->prepare($sql);
        $product_id = intval($orders->getproduct_id());
        $id_order = intval($id);
       /* $query->bindValue(':status', );
        $query->bindValue(':id_order', $id_order);
        $query->bindValue(':idp', $product_id);*/
        var_dump($product_id);
        try {
            $query->execute();
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage()); 
        }
    }
    

    function showorders($id)
    {
        $sql = "SELECT * from orders where id_order = :id";
        
 
        $query = $this->db->prepare($sql);
        $query->bindValue(':id', $id);
        try {

            $orders = $query->execute(); 
            $orders= $query->fetch();

            return $orders;
        } catch (Exception $e) {
die('Error: ' . $e->getMessage());
        }
    }
    function showStatus($searchTerm) {
        $sql = "SELECT * FROM orders WHERE status like :searchTerm";

  
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':searchTerm', '%'.$searchTerm.'%', PDO::PARAM_STR);
        try {
 
            $stmt->execute();
            $results = $stmt;
         //   var_dump($results);
            return $results;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
   
    
}
function shippedCount(){
   $sql="SELECT COUNT(*) AS count FROM orders WHERE status IN ('shipped', 'cancelled', 'processing') GROUP BY status ORDER BY FIELD(status, 'shipped', 'cancelled', 'processing');";
   
   $req = $this->db->prepare($sql);
 
 
   try {
     $req->execute(); 

          $status=$req->fetchAll(PDO::FETCH_NUM);
     
       return $status;

   } catch (Exception $e) {
       die('Error:' . $e->getMessage());
   }

}
function sumTotalMoney(){
    $sql = "SELECT SUM(total_amount) AS total_sum FROM orders";
    $req = $this->db->prepare($sql);
    try {
        $req->execute(); 
        $total_sum = $req->fetchColumn();
        return $total_sum;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

}
?>
  