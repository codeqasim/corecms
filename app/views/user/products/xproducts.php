


<input class="modal-state" id="modal-1" type="checkbox" />
<div class="modal">
  <label class="modal__bg" for="modal-1"></label>
  <div class="modal__inner">
    <label class="modal__close" for="modal-1"></label>

    <?php // include "app/views/user/products/add_product.php" ?>

</div>
</div>

<input class="modal-state" id="modal-2" type="checkbox" />
<div class="modal">
  <label class="modal__bg" for="modal-2"></label>
  <div class="modal__inner">
    <label class="modal__close" for="modal-2"></label>
    <h2>Sleppy sloth</h2>
    <p><img src="https://i.imgur.com/TPx9zYo.gif" alt="" />Aliquam in sagittis nulla. Curabitur euismod diam eget risus venenatis, sed dictum lectus bibendum. Nunc nunc nisi, hendrerit eget nisi id, rhoncus rutrum velit. Nunc vel mauris dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam fringilla quis nisi eget imperdiet.</p>
  </div>
</div>



<div class="getting_started">
    <?php include "app/views/user/sidebar.php"; ?>
    <div class="elements">

        <h4 class="alert_title df jcsb">
        <span class="df aic gap10">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000e4f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"/></svg>   -->
        <?=$title?> </span>

        <!-- <label class="btn btn-success gap10" for="modal-1">
        Add Product
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </label> -->

        <a class="fadeout" href="<?=root?>account/products/add">
        <label class="btn btn-success gap10">
        Add Product
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </label>
		</a>

        </h4>

        <?php
        echo $xcrud->render();
        // $xcrud->render('create');
        // $xcrud->render('edit', 1); // edit entry screen, '12' - primary key
        // $xcrud->render('view', 85); // view entry screen, '85' - primary key
        ?>

    </div>
</div>




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
    // console.log(hash);
    if (hash == "success") {
        vt.success("Product items updated successfully",{
        title:"Items updated",
        position: "bottom-center",
        callback: function (){ //
        } })
    }

    if (hash == "deleted") {
        vt.error("Selected item has been deleted",{
        title:"Item deleted successfully",
        position: "bottom-center",
        callback: function (){ //
        } })
    }
    // alert(hash);


</script>