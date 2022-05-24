<div class="hero df aic jcc h100">
    <div class="box" style="width:400px">
        <h4 class="alert_title">
        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24" fill="none" stroke="#ff0076" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>    
        Email Verification</h4>
        <span class="mb-1 db">We have sent email for verification to your email please check and click on verification link</span>
        <form class="form" action="" method="">
        <p>If you have not received the email within 10 minutes please click on the below button to get link for email verification</p>
        <br> 
        <input type="hidden" id="email" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>">
        <button href="<?=root?>account/dashboard" class="btn btn-success w100 hide_button">Resend Verification Mail</button>
        <progress id="loading" class="linear mt-1"></progress>
        </form>
    </div>
</div>

<script>
  $(".form").submit(function (event) {

    // LOADING EFFECT
    document.getElementById("loading").style.display = "block";
    var mobile = $("#email").val();

    $.ajax({
    url: "<?=root?>account/resend_verification_email",
    type: 'POST',
    data: jQuery.param({ email: "<?=$_SESSION['email']?>"}) ,
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (response) {

        // alert(response.message);

        vt.success("Please check your mail inbox or spam folder",{ 
        title:"Verification Email Sent", 
        position: "bottom-center", 
        callback: function (){ // 
        } })

        document.getElementById("loading").style.display = "none";
        $('.hide_button').prop('disabled', true);

    },
    error: function () {
        alert("error");
    }
    }); 

    event.preventDefault();
  });

</script>

<?php // print_r($_SESSION['mobile']); ?>

<style>
  .dashboard{display:none !important;}
  form p { color: #000 !important; font-size: 1rem !important; }
  footer,.pages_links{display:none}
  body{background: var(--theme-bg);}
</style>