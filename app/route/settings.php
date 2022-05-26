<?php

// ============================================= STORES
$router->get('account/stores', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table('stores');

    $xcrud->where('store_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('store_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('store_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->order_by('store_id','desc');
    $xcrud->unset_view();
    // $xcrud->unset_edit();
    // $xcrud->unset_add();
    $xcrud->unset_csv();

    $xcrud->relation('store_city_id','cities','city_id','city_name');
    $xcrud->relation('store_category_id','categories','category_id','category_name','categories.category_type = ""');

    // $xcrud->columns('store_img,store_featured,store_status,store_name,store_mobile,store_approval,store_views');
    $xcrud->fields('store_img,store_name,store_category_id,store_city_id,store_status,store_mobile,store_address,store_mobile,store_addres,store_views,store_desc,store_user_id');
    $xcrud->disabled('store_views');

    $xcrud->label('store_category_id','Category')->label('store_city_id','City')->label('store_desc','Description')->label('store_img','Image')->label('store_name','Name')->label('store_address','Addess')->label('store_mobile','Mobile')->label('store_status','Status')->label('store_views','Views')->label('store_approval','Approval')->label('store_featured','Featured');

    $xcrud->column_class('store_img', 'zoom_img');
    $xcrud->change_type('store_img', 'image', false, array('path' => '../../../public/storage/stores/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'),
    )));

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Stores";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";
});

// ============================================= STORES
$router->get('account/brands', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table('brands');

    $xcrud->where('brand_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('brand_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('brand_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->order_by('brand_id','desc');
    $xcrud->unset_view();
    // $xcrud->unset_edit();
    // $xcrud->unset_add();
    $xcrud->unset_csv();

    $xcrud->relation('brand_category_id','categories','category_id','category_name','categories.category_user_id = "'.$_SESSION['user_id'].'"');

    $xcrud->column_class('brand_img', 'zoom_img');
    $xcrud->change_type('brand_img', 'image', false, array('path' => '../../../public/storage/brands/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'), // using 'thumbs' subfolder
    )));

    $xcrud->columns('brand_img,brand_name,brand_category_id');
    $xcrud->fields('brand_img,brand_name,brand_category_id,brand_user_id');
    $xcrud->label('brand_img','Image')->label('brand_category_id','Brand Category');

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Brands";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";
});

// ============================================= WAREHOUSES
$router->get('account/warehouses', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table('warehouses');

    $xcrud->where('warehouse_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('warehouse_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('warehouse_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->order_by('warehouse_id','desc');
    $xcrud->unset_view();
    // $xcrud->unset_edit();
    // $xcrud->unset_add();
    $xcrud->unset_csv();

    $xcrud->relation('warehouse_city_id','cities','city_id','city_name');

    $xcrud->column_class('warehouse_img', 'zoom_img');
    $xcrud->change_type('warehouse_img', 'image', false, array('width' => 1000, 'path' => '../../../public/storage/wherehouses/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'), // using 'thumbs' subfolder
    )));

    $xcrud->label('warehouse_city_id','Warehouse CIty');

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Warehouse";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";
});

// ============================================= STORES
$router->get('account/domains', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table('domains');

    $xcrud->relation('domain_store_id','stores','store_id','store_name','stores.store_user_id = "'.$_SESSION['user_id'].'"');
    // $xcrud->relation('domain_store_id','stores','store_id','store_name');

    $xcrud->where('domain_user_id =', $_SESSION['user_id']);       // account id of main client
    $xcrud->change_type('domain_user_id','hidden');                // change account type to hidden
    $xcrud->pass_default('domain_user_id',$_SESSION['user_id']);   // pass default value of user account

    $xcrud->order_by('domain_id','desc');
    $xcrud->unset_view();
    // $xcrud->unset_edit();
    // $xcrud->unset_add();
    $xcrud->unset_csv();

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Domains";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";
});

// ============================================= STORES
$router->get('account/cities', function() {

    // AUTH LOOKUP
    if (isset($_SESSION['user_login']) == false) { header("Location: ".root."login"); }

    include "app/vendor/db.php";
    $xcrud = Xcrud::get_instance();
    $xcrud->table('cities');

    $xcrud->column_class('city_img', 'zoom_img');
    $xcrud->change_type('city_img', 'image', false, array('width' => 1000, 'path' => '../../../public/storage/cities/',

    'thumbs'=>array(
    array('width'=> 50, 'marker'=>'_s', 'folder' => 'thumbs'),
    array('width'=> 100, 'marker'=>'_m', 'folder' => 'thumbs'),
    array('width'=> 200, 'marker'=>'_l', 'folder' => 'thumbs'),
    array('width'=> 400, 'marker'=>'_xl', 'folder' => 'thumbs'),
    array('width' => 600, 'folder' => 'thumbs'), // using 'thumbs' subfolder
    )));

    $xcrud->order_by('city_id','desc');
    $xcrud->unset_view();
    $xcrud->unset_csv();

    $view = "app/views/xview.php";
    $xcrud->unset_title();
    $title = "Cities";
    $account_nav = 1;
    // $add_button = "";
    include "app/views/main.php";
});