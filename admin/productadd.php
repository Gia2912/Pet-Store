<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>

<div class="admin-content-right">
        <div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Chọn danh mục<span style="color:crimson">*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                        <option value="#">--Chọn--</option>
                        <?php
                        $show_cartegory=$product->show_cartegory();
                        if($show_cartegory) {while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>  "><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }
                    }
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm<span style="color:crimson">*</span></label>
                    <select name="brand_id" id="brand_id">
                    <option value="#">--Chọn--</option>
                    </select>
                    <label for="">Nhập giá sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Nhập giá khuyến mãi<span style="color:crimson">*</span></label>
                    <input name="product_sale" required type="text">
                    <label for="">Chi tiết sản phẩm</label>
                    <textarea name="product_details" cols="30" rows="10"></textarea>
                    <label for="">Mô tả</label>
                    <textarea name="product_desc" id="editor" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm<span style="color:crimson">*</span></label>
                    <input name="product_img" type="file">
                    <button type="submit">Thêm</button>
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