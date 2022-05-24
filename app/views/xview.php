<div class="getting_started">
    <?php include "views/accounts/sidebar.php"; ?>
    <div class="elements">
        <h4 class="alert_title  df jcsb">
        <span class="df aic gap10"> 
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000e4f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>   -->
        <?=$title?> </span>

        <!-- SHOW ADD BUTTON -->
        <?php if (isset($add_button)) { ?>
        <a class="btn btn-success gap10" href="<?=$add_button?>">
		Add Product
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
		</a>
        <?php } ?>

        </h4>

        <?php 
        echo $xcrud->render();
        // $xcrud->render('create');
        // $xcrud->render('edit', 1); // edit entry screen, '12' - primary key
        // $xcrud->render('view', 85); // view entry screen, '85' - primary key
        ?>
 
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.js"></script>

<style>
.xcrud{ scroll-behavior: initial; width: 100%; flex-wrap: wrap;}
.xcrud-list-container {width:100%}
.select2-container {min-width:450px}
.select2-container .select2-choice {border-radius:2px;height:36px;line-height:32px}
.select2-container .select2-choice .select2-arrow b { margin-top: 4px }
.select2-container .select2-choice .select2-arrow { border-radius: 0 0px 0px 0; }

</style>

<script>
jQuery(document).on("xcrudbeforerequest", function(event, container) {
    if (container) {
        jQuery(container).find("select").select2("destroy");
    } else {
        jQuery(".xcrud").find("select").select2("destroy");
    }
});
jQuery(document).on("ready xcrudafterrequest", function(event, container) {
    if (container) {
        jQuery(container).find("select").select2();
    } else {
        jQuery(".xcrud").find("select").select2();
    }
});
jQuery(document).on("xcrudbeforedepend", function(event, container, data) {
    jQuery(container).find('select[name="' + data.name + '"]').select2("destroy");
});
jQuery(document).on("xcrudafterdepend", function(event, container, data) {
    jQuery(container).find('select[name="' + data.name + '"]').select2();
});
</script>

<script>
    <?php 
    $url = explode('/', $_GET['url']);
    if (end($url) == "success") { ?>

    vt.success("Your prouduct has been added successfully",{ 
    title:"Product Added Successfully", 
    position: "top-center", 
    callback: function (){ // 
    } })
    <?php } ?>

    
    var hash = window.location.hash.substr(1);  
    if (hash == "success") {
        vt.success("Your prouduct has been added successfully",{ 
        title:"Product Added Successfully", 
        position: "top-center", 
        callback: function (){ // 
        } })
    }      
    // alert(hash);


</script>