<div class="hero df aic jcc h100">
<div class="">
<h2 class="box_heading">
<a class="brand df jcc aic" href="<?=root?>" style="gap:10px">
<img src="<?=root?>assets/img/icon.png" alt="" style="max-width:32px">
<p><strong><?=appname?></strong></p>
</a>
</h2>
<form onSubmit="loading();" autocomplete="off" class="box" method="post" action="<?=root?>login">

<div class="row">
<div class="col-12">

<label class="control">
<span>Email Address</span>
    <input required type="email" name="email" placeholder=" " value="<?php if ($dev == 1){ echo "compoxition@gmail.com"; } ?>">
</label>

</div>

<div class="col-12">
<label class="control">
<span>Password</span>
    <input required type="password" name="password" placeholder=" " value="<?php if ($dev == 1){ echo "03311442244"; } ?>">
</label>
</div>
</div>

<div class="row">
<div class="col-6">
<button class="btn btn-success w100 h50" type="submit">Login</button>
</div>
<div class="col-6">
<a href="<?=root?>signup" class="btn w100 h50">Signup</a>
</div>

<div class="col-12 forgetpass">
    <label for="remember">
        <input type="checkbox" name="remember" id="remember" value="1">
        <span>Remember me</span>
    </label>
    <a href="<?=root?>forget-password">Forget Password?</a>
</div>
</div>

<progress id="loading" class="linear mt-1"></progress>

</form>

</div>
</div>

<script>
    <?php
    $url = explode('/', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if (end($url) == "invalid") { ?>

    vt.error("Please enter correct email and password",{
    title:"Invalid Login Credentials",
    position: "bottom-center",
    callback: function (){ //
    } })

    <?php } ?>

    <?php
    $url = explode('/', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    if (end($url) == "logout") { ?>

    vt.success("You have logout your account successfully",{
    title:"Logout Successfully",
    position: "bottom-center",
    callback: function (){ //
    } })

    <?php } ?>

</script>

<style>
    header,footer,.pages_links{display:none}
    body{background: var(--theme-bg);}
</style>