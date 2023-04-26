<?php
include 'C:\xampp\htdocs\Miaoutopia\config.php';
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
        VALUES (NULL, :ln, :fn, :ad, :st,:de,CURDATE())";
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
                'ln' => $product->getname(),
                 'fn' => $product->getimg(),
                 'ad' => $product->getprice(),
                'st'=>$product->getstock(),
                'de'=>$product->getdescription()
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
}


?>