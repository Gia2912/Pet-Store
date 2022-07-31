<?php
include "database.php";

?>
<?php
class product{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
                  FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
                  ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_brand_ajax($cartegory_id){
        $query = "SELECT * FROM tbl_brand WHERE cartegory_id='$cartegory_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_sale = $_POST['product_sale'];
        $product_details = $_POST['product_details'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads_img/".$_FILES['product_img']['name']);
        $query = "INSERT INTO tbl_product ( product_name,
                                            cartegory_id, 
                                            brand_id,
                                            product_price,
                                            product_sale,
                                            product_details,
                                            product_desc,
                                            product_img) 
                                            VALUES (
                                                '$product_name',
                                                '$cartegory_id',
                                                '$brand_id',
                                                '$product_price',
                                                '$product_sale',
                                                '$product_details',
                                                '$product_desc',
                                                '$product_img')";
        $result = $this->db->insert($query);
        header('Location:productlist.php');
        return $result;
    }
    public function get_brand($brand_id){
        $query = "SELECT * FROM tbl_brand WHERE brand_id='$brand_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function get_product($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_product(){
        $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name, tbl_brand.brand_name
                  FROM tbl_brand, tbl_product, tbl_cartegory
                  WHERE tbl_product.cartegory_id = tbl_cartegory.cartegory_id and tbl_product.brand_id= tbl_brand.brand_id
                  ORDER BY tbl_product.product_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = $product_id";
        $result = $this ->db->delete($query);
        header('Location:productlist.php');
        return $result;
    }

    public function update_product($product_name,$cartegory_id,$brand_id,$product_price,$product_sale,$product_details,$product_desc,$product_img,$product_id){
        $query = "UPDATE tbl_product 
                  SET product_name = '$product_name', cartegory_id='$cartegory_id',brand_id='$brand_id', product_price='$product_price',product_sale='$product_sale',product_details='$product_details', product_desc='$product_desc', product_img='$product_img'
                  WHERE product_id='$product_id' ";
        $result = $this ->db->update($query);
        header('Location:productlist.php');
        return $result;
    }
}
?> 
