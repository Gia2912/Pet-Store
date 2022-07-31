<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php


    $product = new product;
    
    $product_id = $_GET['product_id'];
    $get_product = $product -> get_product($product_id);
    if($get_product){
        $resultB = $get_product->fetch_assoc();
    }

if($_SERVER['REQUEST_METHOD']==='POST'){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_sale = $_POST['product_sale'];
        $product_details = $_POST['product_details'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
    $update_product = $product->update_product($product_name,$cartegory_id,$brand_id,$product_price,$product_sale,$product_details,$product_desc,$product_img,$product_id);
}
?>

<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_name" required type="text" value="<?php echo $resultB['product_name'] ?>"  >
                    <label for="">Chọn danh mục<span style="color:crimson">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">--Chọn--</option>
                        <?php
                        $show_cartegory=$product->show_cartegory();
                        if($show_cartegory) {while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option <?php if($resultB['cartegory_id']==$result['cartegory_id']) {echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?> "><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }
                    }
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm<span style="color:crimson">*</span></label>
                    <select name="brand_id" id="brand_id">
                    <option value="#">--Chọn--</option>
                        <?php
                        $show_brand=$product->show_brand();
                        if($show_brand) {while($result = $show_brand->fetch_assoc()){
                        ?>
                        <option <?php if($resultB['brand_id']==$result['brand_id']) {echo "SELECTED";} ?> value="<?php echo $result['brand_id'] ?> "><?php echo $result['brand_name'] ?></option>
                        <?php
                        }
                    }
                        ?>
                    </select>
                    <label for="">Nhập giá sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_price" required type="text"  value="<?php echo $resultB['product_price'] ?>">
                    <label for="">Nhập giá khuyến mãi<span style="color:crimson">*</span></label>
                    <input name="product_sale" required type="text" value="<?php echo $resultB['product_sale'] ?> ">
                    <label for="">Chi tiết sản phẩm</label>
                    <textarea name="product_details" cols="30" rows="10" value="<?php echo $resultB['product_details'] ?> "></textarea>
                    <label for="">Mô tả<span style="color:crimson">*</span></label>
                    <textarea name="product_desc" id="editor" cols="30" rows="10" value="<?php echo $resultB['product_desc'] ?> "></textarea>
                    <label for="">Ảnh sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_img" type="file">
                    <button type="submit">Sửa</button>
                </form>
            </div>
            
        </div>
    </section>
    <script src="admin.js"></script>
<script>
        ClassicEditor
        .create( document.querySelector( '#editor' ), {
		ckfinder: {
			uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
		},
		toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
	} )
	.catch( error => {
		console.error( error );
	} );
    
    </script>

    <script>
        $(document).ready(function(){
            $("#cartegory_id").change(function(){
                //alert($(this).val())
                var x = $(this).val()
                $.get("productadd_ajax.php",{cartegory_id:x},function(data){
                    $("#brand_id").html(data);
                })
            })
        })

    </script>
</body>
</html>