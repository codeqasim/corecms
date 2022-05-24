<div class="hero hero df aic jcc h100" style="height:100%">
<div class="w330">
<h2 class="box_heading">
<a class="brand df jcc aic" href="<?=root?>" style="gap:10px">
<img src="<?=root?>assets/img/icon.png" alt="" style="max-width:32px">
<p><strong><?=appname?></strong></p>
</a>
</h2>
<form onSubmit="loading();" autocomplete="off" class="box" method="post" action="<?=root?>forget-password">

<p><strong>Forget Password</strong></p>

<label class="filled w100"> 
    <input required type="number" name="mobile" placeholder=" " value="<?php if ($dev == 1){ echo "03311442244"; } ?>"> 
    <span>Mobile Number</span> 
</label>

<div class="row mb-1">
<div class="col-12">
<button class="btn btn-success w100 hide_button" type="submit">Reset Password</button>
</div>
</div>

<progress id="loading" class="linear mt-1"></progress>

<p>To reset your password please enter your mobile number and click on reset password</p>

</form>
</div>

</div>

<?php $url = explode('/', $_GET['url']); ?>

<script>
    <?php 
    if (end($url) == "invalid") { ?>
    vt.error("Please enter correct mobile number",{ 
    title:"Invalid Mobile Number", 
    position: "top-center", 
    callback: function (){ // 
    } })

    <?php } ?>

    <?php 
    if (end($url) == "success") { ?>
    vt.success("Please check your email for new password",{ 
    title:"Password Reset Successfully", 
    position: "top-center", 
    callback: function (){ // 
    } })

    $('.hide_button').prop('disabled', true);

    <?php } ?>

</script>

<style>
    form p { color: #000 !important; font-size: 1rem !important; }
    .pages_links, footer { display: none; }
</style>