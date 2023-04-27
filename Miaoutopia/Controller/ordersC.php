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
        $sql = "SELECT name FROM product WHERE $id ;";
            try {
                $query = $this->db->prepare($sql);
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
        VALUES (NULL, :ln, :fn, :ad,CURDATE(), :q)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $orders->getproduct_id(),
                 'fn' => $orders->gettotal_amount(),
                 'ad' => $orders->getstatus(),
                'q'=>$orders->getquantite()
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateorders($orders, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE orders SET 
                     total-amount = :total,
                    status= :status,
                    quantite= :quantite
                WHERE id-order= :id'
            );
            $query->execute([
                'total' => $orders->gettotal_amount(),
                'price' => $orders->getstatus(),
                'quantite' => $orders->getquantite(),
                'id'=>$id
                //'date' => $orders->getdate()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
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
    
   
    
}

?>
  