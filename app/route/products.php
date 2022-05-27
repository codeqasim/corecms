<?php

use Curl\Curl;

// ============================================= PRODUCTS
$router->get('account/products', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";

    // DELETE ALL PRODUCTS WITH NO NAME
    $query =  $mysqli->query("DELETE FROM `products` WHERE `products`.`product_name` = '' AND `product_user_id` = '".$_SESSION['user_id']."';");

    $xcrud = Xcrud::get_instance();
    $xcrud->table('products');

    $xcrud->where('product_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('product_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('product_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->relation('product_store_id','stores','store_id','store_name');
    $xcrud->relation('product_brand_id','brands','brand_id','brand_name');

    $xcrud->order_by('product_id','desc');
    $xcrud->unset_view();
    $xcrud->unset_edit();
    $xcrud->unset_add();
    $xcrud->unset_csv();

    $xcrud->column_class('product_img', 'zoom_img');
    $xcrud->change_type('product_img', 'image', true, array('width' => 200, 'path' => '../../../public/storage/products/',

    // 'thumbs'=>array(
    // array('width'=> 50, 'marker'=>'_s'),
    // array('width'=> 100, 'marker'=>'_m'),
    // array('width'=> 500, 'marker'=>'_l'),
    // array('width'=> 1000, 'marker'=>'_xl'),
    // array('width' => 250, 'folder' => 'thumbs' // using 'thumbs' subfolder
    // ))

    ));

    $xcrud->columns('product_status,product_img,product_name,product_store_id,product_brand_id,product_stock_id,product_sku,product_approval');

    $xcrud->label('product_status','status')->label('product_img','Image')->label('product_stock_id','Stock')->label('product_store_id','Store')->label('product_brand_id','Brand')->label('product_sku','SKU')->label('product_approval','Appoval');

    $xcrud->button(root.'account/products/{product_id}','Edit Product','icon-pencil-2','',array('target'=>'_self'));

    $view = "app/views/user/products/xproducts.php";
    $xcrud->unset_title();
    $title = "Products";
    $account_nav = 1;
    // $add_button = root."account/products/add";
    include "app/views/main.php";
});

// ============================================= ADD PRODUCT
$router->get('account/products/add', function() {

    // file_put_contents("post.log", print_r($_POST, true));

    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }
    include "app/vendor/db.php";

    $query =  $mysqli->query("INSERT INTO `products` (`product_id`,`product_name`,`product_user_id`) VALUES ( NULL , '', '".$_SESSION['user_id']."' );");

    $product =  $mysqli->query("SELECT * FROM `products` WHERE `product_user_id` = '".$_SESSION['user_id']."' ORDER BY product_id DESC LIMIT 1")->fetch_object();

    $product_id = $product->product_id;

    // GET USER CATEGORIES MAIN
    $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' ORDER BY category_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $categories[] = $row;
    }

    // GET USER CATEGORIES MAIN
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Main_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_main[] = $row;
    // }

    // // GET USER CATEGORIES SUB
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Sub_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_sub[] = $row;
    // }

    // // GET USER CATEGORIES SUB SUB
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Sub_Sub_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_sub_sub[] = $row;
    // }

    // print_r($category_sub_sub);
    // die;

    // GET USER STORES
    $db = mysqli_query($mysqli, "SELECT * FROM stores WHERE store_user_id='".$_SESSION['user_id']."' ORDER BY store_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $stores[] = $row;
    }

    // GET USER BRANDS
    $db = mysqli_query($mysqli, "SELECT * FROM brands WHERE brand_user_id='".$_SESSION['user_id']."' ORDER BY brand_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $product_brands[] = $row;
    }

    // print_r($category_main);
    // die;

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

        $view = "app/views/user/products/product.php";
        $title = "Edit Product";
        $account_nav = 1;
        include "app/views/main.php";

});

// ============================================= EDIT PRODUCT
    $router->get('account/products/(\d+)', function($product_id) {
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }
    include "app/vendor/db.php";

    $product = $mysqli->query('SELECT * FROM products WHERE product_id = "'.$product_id.'" AND product_user_id = "'.$_SESSION['user_id'].'"')->fetch_object();

    $product_images = $mysqli->query('SELECT * FROM products_images WHERE image_product_id = "'.$product_id.'" ');

    $rows = array();
    while($row = mysqli_fetch_assoc($product_images)) {
    $images[] = $row;
    }

    // print_r($product);
    // die;

    // IN CASE NO PRODUCT FOUND REDIRECT TO PRODUCTS
    if ($product == false) { header("Location: ".root."account/products"); }

    // GET USER CATEGORIES MAIN
    $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' ORDER BY category_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $categories[] = $row;
    }

    // // GET USER CATEGORIES MAIN
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Main_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_main[] = $row;
    // }

    // // GET USER CATEGORIES SUB
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Sub_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_sub[] = $row;
    // }

    // // GET USER CATEGORIES SUB SUB
    // $db = mysqli_query($mysqli, "SELECT * FROM `categories` WHERE `category_user_id` = '".$_SESSION['user_id']."' AND `category_type` = 'Sub_Sub_Category' ORDER BY category_id DESC LIMIT 500");
    // $rows = array();
    // while($row = mysqli_fetch_assoc($db)) {
    // $category_sub_sub[] = $row;
    // }

    // print_r($category_sub_sub);
    // die;

    // GET USER STORES
    $db = mysqli_query($mysqli, "SELECT * FROM stores WHERE store_user_id='".$_SESSION['user_id']."' ORDER BY store_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $stores[] = $row;
    }

    // GET USER BRANDS
    $db = mysqli_query($mysqli, "SELECT * FROM brands WHERE brand_user_id='".$_SESSION['user_id']."' ORDER BY brand_id DESC LIMIT 500");
    $rows = array();
    while($row = mysqli_fetch_assoc($db)) {
    $product_brands[] = $row;
    }

    // print_r($brands);
    // die;

    $view = "app/views/user/products/product.php";
    $title = "Edit Product";
    $account_nav = 1;
    include "app/views/main.php";
});

// ============================================= PRODUCT UPDATE
$router->post('account/products/update', function() {

    // AUTH CHECK
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";

    // print_r($_POST);
    // die;

    if (isset($_POST['product_status']) == true ) { $product_status = 1; } else { $product_status = 0; }

    $date = date("yy:m:d:h:i");

    // MYSQL UPDATE QUERY
    $query = "UPDATE `products` SET
    `product_sku` = '".$_REQUEST['product_sku']."',
    `product_store_id` = '".$_REQUEST['product_store_id']."',
    `product_user_id` = '".$_REQUEST['user_id']."',
    `product_cat_main_id` = '".$_REQUEST['category_main']."',
    `product_name` = '".$_REQUEST['product_name']."',
    `product_desc` = '".$_REQUEST['product_desc']."',
    `product_features` = '".$_REQUEST['product_features']."',
    `product_brand_id` = '".$_REQUEST['product_brand_id']."',
    `product_approval` = '0',
    `product_status` = '".$product_status."',
    `product_stock_id` = '0',
    `product_city_id` = '',
    `product_created_at` = '".$date."',
    `product_updated_at` = '".$date."'
    WHERE `products`.`product_id` = ".$_REQUEST['product_id'].";
    ";

    // `product_cat_sub_id` = '".$_REQUEST['category_sub']."',
    // `product_cat_sub_sub_id` = '".$_REQUEST['category_sub_sub']."',
    // `product_warehouse_id` = '".$_REQUEST['product_warehouse_id']."',



    if ($mysqli->query($query) === TRUE)
    { header("Location: ".root."account/products/#success");
    } else { echo "Error updating record: " . $mysqli->error; }

});

// ============================================= PRODUCT UPDATE
$router->post('account/products/upload', function() {

    // if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }
    include "app/vendor/db.php";

    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);

    // print_r($queries['source']);
    // die;

    $DIR = "public/storage/products/";
    $allowedfileExtensions = array('jpeg','jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');

    // $count = count($_FILES['file']['name']);

    // print_r($_FILES['file']['name']);
    // die;

    $code = rand(100000, 999999);

    // image upload function
    if (!empty($_FILES["file"]["name"])) {
        $file_name      = $_FILES["file"]["name"];
        $temp_name      = $_FILES["file"]["tmp_name"];
        $imgtype        = $_FILES["file"]["type"];
        $ext            = pathinfo($file_name, PATHINFO_EXTENSION);
        $img            = $code.'-'.date("d-m-Y") . "-" . time() . "." . $ext;
        $target_path    = $DIR.$img;

        $fileNameCmps = explode(".", $file_name);
        $fileExtension = strtolower(end($fileNameCmps));

        if (in_array($fileExtension, $allowedfileExtensions))
        {

        // $output = img_resize($temp_name);

        // move file with rename to di
        if(move_uploaded_file($temp_name, $target_path)) {

        }else{ exit("Error While uploading image on the server"); }

        // print_r($img);
        // die;

        $date = date("yy:m:d:h:i");
        $sql = "INSERT INTO `products_images` (`image_id`, `image_product_id`, `image_created_at`, `image_updated_at`, `image_name`) VALUES (NULL, '".$queries['source']."', '".$date."', '".$date."', '".$img."');";

        // MYSQL UPDATE QUERY
        $query = "UPDATE `products` SET `product_img` = '".$img."' WHERE `products`.`product_id` = '".$queries['source']."';";

        if ($mysqli->query($query) === TRUE) {
        } else { echo "Error updating record: " . $mysqli->error; }

        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
            die;
        }

        } else {
        echo  'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
        }

        // $db->close();

    }

});

// ============================================= STOCKS
$router->get('account/inventory', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }
    include "app/vendor/db.php";

    // DELETE ALL PRODUCTS WITH NO NAME
    // $query =  $mysqli->query("DELETE FROM `products` WHERE `products`.`product_name` = '' AND `product_user_id` = '".$_SESSION['user_id']."';");

    $xcrud = Xcrud::get_instance();
    $xcrud->table('products_inventory');

    $xcrud->where('inventory_user_id = ', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('inventory_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('inventory_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->relation('inventory_product_id','products','product_id','product_name');
    $xcrud->relation('inventory_warehouse_id','warehouses','warehouse_id','warehouse_name');

    $xcrud->column_class('inventory_img', 'zoom_img');
    $xcrud->change_type('inventory_img', 'image', false, array('path' => '../storage/inventory/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'), // using 'thumbs' subfolder
    )));

    $xcrud->order_by('inventory_id','desc');
    $xcrud->unset_view();
    // $xcrud->unset_edit();
    // $xcrud->unset_add();
    $xcrud->unset_csv();

    $xcrud->label('inventory_img','Image')->label('inventory_warehouse_id','Warehouse')->label('inventory_product_id','Product')->label('product_store_id','Store')->label('inventory_stock','Stock')->label('inventory_buying_price','Buying Price')->label('inventory_selling_price','Selling Price')->label('inventory_color','Color')->label('inventory_size','Size');
    $xcrud->fields('inventory_img,inventory_product_id,inventory_warehouse_id,inventory_user_id,inventory_stock,inventory_buying_price,inventory_selling_price,inventory_color,inventory_size');
    $xcrud->columns('inventory_img,inventory_product_id,inventory_warehouse_id,inventory_user_id,inventory_stock,inventory_buying_price,inventory_selling_price,inventory_color,inventory_size');

    $transactions = $xcrud->nested_table('Transactions','inventory_id','products_inventory_transactions','inventory_transaction_id ');

    $transactions->fields('unit');


    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Inventory";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";

});

// PROUCTS
$router->get('account/categories', function() {

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table("categories");

    // WHERE CONDITION
    $xcrud->where('category_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('category_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('category_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->order_by('category_id','desc');
    $xcrud->columns('category_img,category_name,category_parent_id');

    $xcrud->relation('category_parent_id','categories','category_id','category_name','category_user_id = '.$_SESSION['user_id'].'');

    $xcrud->fields('category_img,category_name,category_parent_id,category_status,category_user_id');

    $xcrud->label('category_parent_id','Parent Name');

    $xcrud->column_class('category_img', 'zoom_img');
    $xcrud->change_type('category_img', 'image', false, array('path' => '../public/storage/categories/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'), // using 'thumbs' subfolder
    )));

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $xcrud->unset_csv();
    $title = "Categories";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";

});

// PROUCTS
$router->post('product/delete_image', function() {

    include "app/vendor/db.php";
    $query =  $mysqli->query("DELETE FROM `products_images` WHERE `image_id` = '".$_POST['product_image_id']."';");
    echo "deleted".$_POST['product_image_id'];

    unlink("storage/products/".$_POST['image_name']."");

});
