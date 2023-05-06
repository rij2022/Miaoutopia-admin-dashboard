<?php
include_once 'C:\xampp\htdocs\Miaoutopia\config.php';
include 'C:\xampp\htdocs\Miaoutopia\Model\product.php';

class ProductC
{
    public function listProduct()
    {
        $sql = "SELECT * FROM product";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addProduct($product)
    {
        $sql = "INSERT INTO product 
        VALUES (NULL, :ln, :fn, :ad, :st,:de, :d)";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $product->getname(),
                 'fn' => $product->getimg(),
                 'ad' => $product->getprice(),
                'st'=>$product->getstock(),
                'de'=>$product->getdescription(),
                'd'=>$product->getdate()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateProduct($product, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET 
                     name = :name,
                    price = :price,
                    stock= :stock,
                description= :description

                WHERE id= :id'
            );
            $query->execute([
                'name' => $product->getname(),
                'price' => $product->getprice(),
                'stock'=> $product->getstock(),
                'description'=>$product->getdescription(),
                'id'=>$id
                //'date' => $product->getdate()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showProduct($id)
    {
        $sql = "SELECT * from product where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $product= $query->fetch();
            return $product;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function chercherproduct($searchTerm) {
        $sql = "SELECT * FROM product WHERE CONCAT_WS(' ', id, name, img, price, stock, description, date) LIKE :searchTerm ;";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':searchTerm', '%'.$searchTerm.'%', PDO::PARAM_STR);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function SortByDesc (){
        $sql = "SELECT * FROM product ORDER BY date DESC";
        $db  = config ::getConnexion();
        try {
         $list = $db->query($sql);
         return $list;
        }
    
        catch (Exception $e){
        echo('Error:'.$e->getMessage());
        }
        }
        public function SortASC (){
            $sql = "SELECT * FROM product ORDER BY date ASC";
            $db  = config ::getConnexion();
            try {
             $list = $db->query($sql);
             return $list;
            }
        
            catch (Exception $e){
            echo('Error:'.$e->getMessage());
            }
            }
            function getNumberofOrders1($month)
        {
           $sql = "
           SELECT * FROM orders
           WHERE YEAR(order_date) = YEAR(CURRENT_DATE)
           GROUP BY YEAR(order_date), MONTH(order_date)
        ";  $db = config::getConnexion();
            try {
             $stats = $db->query($sql)->fetchAll(PDO::FETCH_NUM);
             return $stats;
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }


        function getNumberofOrders2($month)
        {
           $sql = "
            SELECT 
   
    COUNT(order.date_debut) AS occurrence_count
FROM 
    (
        SELECT 17 AS day_of_month
        UNION SELECT 18
        UNION SELECT 19
        UNION SELECT 20
        UNION SELECT 21
        UNION SELECT 22
        UNION SELECT 23
        UNION SELECT 24
        UNION SELECT 25
        UNION SELECT 26
        UNION SELECT 27
        UNION SELECT 28
        UNION SELECT 29
        UNION SELECT 30
        UNION SELECT 31


    ) AS calendar
LEFT JOIN publicite ON DAY(publicite.date_debut) = calendar.day_of_month AND MONTH(publicite.date_debut) = $month
GROUP BY 
    calendar.day_of_month;
        ";  $db = config::getConnexion();
            try {
             $stats = $db->query($sql)->fetchAll(PDO::FETCH_NUM);
             return $stats;
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
 
}


?>