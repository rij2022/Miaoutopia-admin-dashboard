<?php
include 'C:\xampp\htdocs\Miaoutopia\config.php';
include 'C:\xampp\htdocs\Miaoutopia\Model\orders.php';

class OrdersC
{
    public $db ;
    
    public function listorders()
    {
        $sql = "SELECT * FROM orders";
        $this->db = config::getConnexion();
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
        $db = config::getConnexion();
        $req = $db->prepare($sql);
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
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
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
        $db = config::getConnexion();
        $idp = intval($orders->getproduct_id());
        $id_order = intval($id);
        $status=$orders->getstatus();
        $sql = "update orders set status = '".$status."' where id_order=".$id_order.";";

        ;
        $query = $db->prepare($sql);
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
        
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id);
        try {

            $orders = $query->execute(); 
            $orders= $query->fetch();

            return $orders;
        } catch (Exception $e) {
die('Error: ' . $e->getMessage());
        }
    }
    function chercherorder($searchTerm) {
        $sql = "SELECT * FROM orders WHERE CONCAT_WS(' ', id_order, product_id, total_amount, status, order_date, quantite) LIKE :searchTerm ;";
        $db = config::getConnexion();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':searchTerm', '%'.$searchTerm.'%', PDO::PARAM_STR);
        try {
 
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
   
    
}
}
?>
  