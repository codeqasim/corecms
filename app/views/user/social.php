
<div class="container">
	<div class="row">
		<div class="col-3">
			<?php include "sidebar.php"; ?>
	    </div>
        <div class="col-9">

		<div class="box w100">
		<h4 class="alert_title"> <strong>Social Verification</strong></h4>

        <form action="<?=root?>account/verification-center/social-update" method="post">
        
        <label for="" class="filled w100">
        <input type="text" placeholder=" " name="facebook" >
        <span>Facebook Link</span>
        </label>

        <label for="" class="filled w100">
        <input type="text" placeholder=" " name="twitter" >
        <span>Twitter Link</span>
        </label>

        <label for="" class="filled w100">
        <input id="longitude" type="text" placeholder=" " name="long" readonly>
        <span>Longitude</span>
        </label>

        <label for="" class="filled w100">
        <input id="latitude" type="text" placeholder=" " name="late" readonly>
        <span>Latitude</span>
        </label>

        <label for="" class="filled w100">
        <input type="text" placeholder=" " name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>" readonly>
        <span>MY IP</span>
        </label>

        <button class="btn btn-success w100" type="submit">Submit</button>

        </form>

        </div>

		</div>
            
        </div>
    </div>
</div>


<script>
    var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);

  $('#latitude').val(crd.latitude);
  $('#longitude').val(crd.longitude);

//   alert(crd.latitude);
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error, options);

<?php 
$url = explode('/', $_GET['url']);
if (end($url) == "social-update") { ?>

vt.success("Your social information has been updated",{ 
title:"Information Updated", 
position: "top-center", 
callback: function (){ // 
} }) 

<?php } ?>



</script>