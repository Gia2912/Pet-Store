<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new product;
$show_product= $product ->show_product();
?>


<div class="admin-content-right">
<div style="width: 100%; text-align: center" class="admin-content-right-cartegory_list">
<h1> Danh sách sản phẩm</h1>
                <table >
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Giá</th>
                        <th>Giá khuyến mãi</th>
                        <th>Chi tiết</th>
                        <th>Mô tả</th>
                        <th>Ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    if($show_product){ $i=0;
                        while($result = $show_product->fetch_assoc()) {$i++;
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><?php echo $result['product_sale'] ?></td>
                        <td><?php echo $result['product_details'] ?></td>
                        <td><?php echo $result['product_desc'] ?></td>
                        <td><?php echo $result['product_img'] ?></td>
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>" >Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            <div>
        </div>
    </section>
<script src="admin.js"></script>
</body>
</html>