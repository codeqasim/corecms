<form action="<?=root?>account/products/update" method="post" enctype="multipart/form-data">

<div class="getting_started">
	<?php include "views/accounts/sidebar.php"; ?>
	<div class="elements">
	<h4 class="alert_title  df jcsb">
	<span class="df aic gap10"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000e4f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>  Add Product </span>
	
        <div class="df gap7" style="min-width:390px">

        <label class="filled w100">
        <select name="product_store_id" class="h50" required>
        <!-- <option value="">Select</option> -->
 
        <?php  
        if (isset($stores)) { 
                    
            foreach($stores as $store) {
            echo "<option value=".$store['store_id'];
             if ($product->product_store_id == $store['store_id']) { echo '" selected'; }
            echo  ">".$store['store_name']."</option>";
            }
            
        } else {
            echo "<option value='' class='cr'>No Stores Found</option>";
        }
         ?>

        </select> 
        <div class="placeholder">Store Name</div>
        <span style="right: 20px; margin-top: -34px;"></span>
        </label>

        <label class="filled w100">
        <select name="product_brand_id" class="h50">
        <!-- <option value="">Select</option> -->
       
        <?php 

        // print_r($product);
        // die;

        if (isset($product_brands)) {  
        
            foreach($product_brands as $brand) {
            echo "<option value=".$brand['brand_id'];
             if ($product->product_brand_id == $brand['brand_id']) { echo '" selected'; }
            echo  ">".$brand['brand_name']."</option>";
            }

        }  
         ?>

        </select> 
        <div class="placeholder">Brand Name</div>
        <span style="right: 20px; margin-top: -34px;"></span>
        </label>

        </div>

    </h4>

        <div class="row">
            <div class="col-8">
                <div class="box w100">

                <div class="row">
                    <div class="col-9" style="padding-right:0.2rem">
                        <label class="filled w100"> 
                        <input required type="text" name="product_name" placeholder=" " value="<?php if (isset($product->product_name)){ echo $product->product_name; } ?>"> 
                        <span>Product Name</span> 
                        </label>
                    </div>
                    <div class="col-3" style="padding-left:0.2rem">
                        <label class="filled w100"> 
                        <input type="text" name="product_sku" placeholder=" " value="<?php if (isset($product->product_sku)){ echo $product->product_sku; } ?>"> 
                        <span>SKU Code</span> 
                        </label>
                    </div>
                </div>

            <label class="filled mb-1 w100">
            <textarea class="" id="" name="product_desc" col="10" style="height: 150px;"><?php if (isset($product->product_desc)){ echo $product->product_desc; } ?></textarea>
             <span>Product Description</span>
            </label>
        
            
            <?php 
            if (isset($images)) { ?>
            <script>let counter = <?=count($images)?>;</script>
                <div class="row mb-1">
                    <?php foreach ($images as $i => $image) { ?>
                        <div class="col-2" style="width: 10.8%;">

                            <div class="MuiListItem-root MuiListItem-gutters MuiListItem-padding css-1a7yq8u" style="opacity: 1; transform: none;"><span class="MuiBox-root css-1vboz2"><span class="wrapper lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                            <img class="MuiBox-root css-6jrdpz" alt="preview" src="<?=root?>storage/products/<?=$image['image_name']?>" sx="[object Object]"></span></span>
                            <button class="dell_<?=$image['image_id']?> MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall css-vp5vtz" tabindex="0" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="MuiBox-root css-0 iconify iconify--eva" sx="[object Object]" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z"></path>
                            </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                            </div>

                         </div>

                         <script>

                            $('.dell_<?=$image['image_id']?>').click(function(){
                            let text = "Are you sure you want to delete this image?";
                            if (confirm(text) == true) {
                            let counter = <?=$image['image_id']?> - 1;
                            $.ajax({
                                url: '<?=root?>product/delete_image',
                                type: 'POST',
                                data: {
                                    product_image_id:<?=$image['image_id']?>,
                                    image_name:"<?=$image['image_name']?>"
                                },
                                success: function(data) {
                                    $('.dell_<?=$image['image_id']?>').parent().parent().fadeOut(300, function() { $(this).remove(); });
                                    // if (data == 'success') {
                                    // }
                                }
                            })

                            // REFRESH BROWSER
                            if (<?=count($images)?> > 17 ) {
                                location.reload()
                            }

                            } else {};
                        });

                        </script>

                    <?php } ?>
                </div>
            <?php } ?>

            <?php 
                if (isset($images)) { 
                // if (count($images) < 18) { ?>
            <script>
                if (<?=count($images)?> < 18 ) {
                    // alert(counter);
                    $('.uploader').show();
                } else {

                setTimeout(function() { 
                $('.uploader').hide();
                }, 200);
                // alert(counter);

                }
            </script>
            <?php } ?>

            <div class="uploader">                
                <input 
                type="file" 
                name="file" 
                class="filepond" 
                multiple
                data-allow-reorder="true"
                data-max-file-size="2MB"
                data-max-files="10"
                accept="image/png, image/jpeg, image/gif, image/jpg"
                >
             </div>

            <!-- <link href="<?=root?>assets/plugins/filepond/filepond-plugin-image-preview.min.css" rel="stylesheet"> -->
            <!-- <script src="<?=root?>assets/plugins/filepond/filepond-plugin-file-validate-type.js"></script> -->
            <link href="<?=root?>assets/plugins/filepond/filepond.min.css" rel="stylesheet">
            <script src="<?=root?>assets/plugins/filepond/filepond-plugin-file-encode.min.js"></script>
             <script src="<?=root?>assets/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
            <script src="<?=root?>assets/plugins/filepond/filepond.js"></script>

            <script>

            FilePond.parse(document.body); 
            FilePond.registerPlugin(
            FilePondPluginFileEncode,
            FilePondPluginImageExifOrientation,
            // FilePondPluginImagePreview,
            // FilePondPluginFileValidateType
            );

            FilePond.create(
                FilePond.setOptions({
                    // ignoredFiles : ['.ds_store', 'thumbs.db', 'desktop.ini'],
                    // acceptedFileTypes: ['image/png','image/gif','image/jpg','image/jpeg'],

                    allowMultiple: true,
                    server: {
                        url: '<?=root?>account/products/',
                        process: {
                            url: 'upload?source=<?=$product_id?>',
                            method: 'POST',
                            withCredentials: false,
                            headers: {},
                            // data:{
                            //     image_product_id: "1"
                            // },
                            timeout: 7000,
                            onload: null,
                            onerror: null,
                            ondata: null,
                        },
                        },
                        <?php if (end($url) == "add") {} else { ?>
                        // REFESH PAGE ON COMPLETION
                        onprocessfiles: () => location.reload()
                        <?php } ?>
                    },
                   
                ),);

            </script>
            
            </div>
                
            </div>

            <div class="col-4">
                <div class="box w100">

                <label class="switch mb-1">
                    <input type="checkbox" name="product_status" 
                    <?php if ($product->product_status == 1) { echo 'checked'; } ?> >
                    <span>Product Status</span>
                </label>
                
                <label class="filled w100">
                <select name="category_main" class="main" required>
                    <option value="">Select</option>
                    <?php foreach ($category_main as $main) { ?>
                    <option value="<?=$main['category_id']?>"><?=$main['category_name']?></option>
                    <?php } ?>
                </select> 
                <div class="placeholder">First Category</div>
                <span></span>
                </label>

                <label class="filled w100">
                <select name="category_sub" class="sub" required>
                    <option value="">Select</option>
                    <?php foreach ($category_sub as $sub) { ?>
                    <option data-value="<?=$sub['category_id']?>" value="<?=$sub['category_parent_id']?>"><?=$sub['category_name']?></option>
                    <?php } ?>             
                </select> 
                <div class="placeholder">Second Category</div>
                <span></span>
                </label>

                <label class="filled w100">
                <select name="category_sub_sub" class="sub_sub" required>
                    <option value="">Select</option>
                    <?php foreach ($category_sub_sub as $sub_sub) { ?>
                    <option value="<?=$sub_sub['category_parent_id']?>"><?=$sub_sub['category_name']?></option>
                    <?php } ?>              
                </select> 
                <div class="placeholder">Third Category</div>
                <span></span>
                </label>           

                <label class="filled mb-1 w100">
                <textarea class="" id="" name="product_features" col="10" style="height: 100px;"><?php if (isset($product->product_features)){ echo $product->product_features; } ?></textarea>
                <span>Product Tags</span>
                </label>

                <script>

                    $('.main option[value=<?php if (isset($product->product_cat_main_id)){ echo $product->product_cat_main_id; } ?>]').attr('selected', 'selected');
                    $('.sub option[value=<?php if (isset($product->product_cat_sub_id)){ echo $product->product_cat_sub_id; } ?>]').attr('selected', 'selected');
                    $('.sub_sub option[value=<?php if (isset($product->product_cat_sub_sub_id)){ echo $product->product_cat_sub_sub_id; } ?>]').attr('selected', 'selected');
 
                    $(".sub").children('option:gt(0)').hide();
                    $(".sub_sub").children('option:gt(0)').hide();

                    $(".main").change(function() {
                        console.log($(this).val());

                        Pace.restart();

                        $(".sub").children('option:gt(0)').hide();
                        $(".sub_sub").children('option:gt(0)').hide();

                        $(".sub").val($(".sub option:first").val());
                        $(".sub_sub").val($(".sub_sub option:first").val());

                        $(".sub_sub").children("option[value^=select]").show()

                        $(".sub").children("option[value^=" + $(this).val() + "]").show()
                        
                            $(".sub").change(function() {
                                var sub_sub_id = this.querySelector(':checked').getAttribute('data-value');
                                console.log(sub_sub_id);
                                Pace.restart();

                                $(".sub_sub").children('option').hide();
                                $(".sub_sub").val($(".sub_sub option:first").val());
                                $(".sub_sub").children("option[value^=" + sub_sub_id + "]").show()
                                
                            })
                    })

                    $('form').submit (function(e) {
                     Pace.restart();    
                    });
 
                </script>

                <input type="hidden" name="product_id" value="<?=$product_id?>">
                <input type="hidden" name="product_city_id" value="274">
                <input type="hidden" name="user_id" value="<?=$_SESSION['user_id']?>">
                <button class="btn btn-success w100" type="submit">Submit</button>
                </div>
            </div>

        </div>

</div>
</div>
</div>
</form>