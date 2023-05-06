<?php
include 'C:\xampp\htdocs\Miaoutopia-front\config.php';
include 'C:\xampp\htdocs\Miaoutopia-front\Model\orders.php';

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

    function addorders($idArray,$quantityArray,$id_cust)
    {/* VALUES (NULL, :ln, :fn, :ad, :d, :q),:id_customer";*/
        $sql = "INSERT INTO orders VALUES ";

     for ($i=0; $i <count($idArray) ; $i++) { 
        $newString = '(NULL,'.$idArray[$i].',(SELECT PRICE FROM PRODUCT WHERE ID='.$idArray[$i].')*'.$quantityArray[$i].',\'processing\',CURRENT_DATE(),'.$quantityArray[$i].','.$id_cust.'),' ;
        $sql .= $newString ; 
       }
       

       $modifiedString = substr($sql, 0, -1);
       //var_dump($modifiedString) ; 
       $db = config::getConnexion();
        try {
            
            $query = $db->prepare($modifiedString);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    /*function updateorders($orders, $id)
    {  $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE orders SET 
                 total_amount = :total,
                status= :status,
                quantite= :quantite,
                order_date = :date,
                product_id= :idp
            WHERE id_order= :id'
        );
        try {
          
            $query->execute([
                'total' => $orders->gettotal_amount(),
                'price' => $orders->getstatus(),
                'quantite' => $orders->getquantite(),
                'date'=>$orders->getorder_date(),
                'idp'=>$orders->getproduct_id(),
                'id'=>$id
                //'date' => $orders->getdate()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }*/

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
  