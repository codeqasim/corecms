<div class="hero hero df aic jcc h100" style="height:100%">
<div class="w330">
<h2 class="box_heading">
<a class="brand df jcc aic" href="<?=root?>" style="gap:10px">
<img src="<?=root?>assets/img/icon.png" alt="" style="max-width:32px">
<p><strong><?=appname?></strong></p>
</a>
</h2>
<form onSubmit="loading();" autocomplete="off" class="box" method="post" action="<?=root?>forget-password">

<label class="control">
<span>Email Address</span>
    <input required type="email" name="email" placeholder="Email Address" value="<?php if ($dev == 1){ echo "compoxition@gmail.com"; } ?>">
</label>

<div class="row mb-1">
<div class="col-12">
<button class="btn btn-success w100 hide_button" type="submit">Reset Password</button>
</div>
</div>

<p>To reset your password please enter your email address and click on reset password</p>

<progress id="loading" class="linear mt-1"></progress>

</form>
</div>

</div>

<script>

var hash = window.location.hash.substr(1);

    // console.log(hash);
    if (hash == "invalid") {
    vt.error("Please enter correct email address",{
    title:"Invalid Email Address",
    position: "bottom-center",
    callback: function (){ //
        } })
    }

    if (hash == "success") {
    vt.success("Please check your email for new password",{
    title:"Password Reset Successfully",
    position: "bottom-center",
    callback: function (){ //
        } })

    $('.hide_button').prop('disabled', true);
    }

</script>

<style>
    form p { color: #000 !important; font-size: 1rem !important; }
    .pages_links, footer { display: none; }
</style>

<style>
    header,footer,.pages_links{display:none !important}
    body{padding:0px}
</style>