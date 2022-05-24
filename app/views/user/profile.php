<div class="container">
	<div class="row">
		<div class="col-3">
			<?php include "sidebar.php"; ?>
	    </div>
        <div class="col-9">
            <div class="page_head">
            <h4 class="sifar">My Profile</h4>
             </div>

             <form action="<?=root?>account/update-user" method="post">

                <div class="row">

                <div class="col-12">
                    <label for="" class="filled w100 mb-1">
                        <input type="text" placeholder=" " name="name" value="<?=$data->name?>" readonly>
                        <span>Full Name</span>
                    </label>
                </div>
        
                <div class="col-6">
                <label for="" class="filled w100 mb-1">
                        <input type="number" placeholder=" " name="mobile" value="<?=$data->mobile?>" readonly>
                        <span>Mobile Number</span>
                    </label>
                </div>

                <div class="col-6">
                <label for="" class="filled w100 mb-1">
                        <input type="email" placeholder=" " name="email" value="<?=$data->email?>" readonly>
                        <span>Email Address</span>
                    </label>
                </div>

                <!-- <div class="col-6">
                <label for="" class="filled w100 mb-1">
                        <input type="password" placeholder=" " name="password" value="<?php // =$data->password?>">
                        <span>Password</span>
                    </label>
                </div> -->

                <div class="col-6">
                <label for="" class="filled w100 mb-1">
                        <input type="text" placeholder=" " name="nic_no" value="<?=$data->nic_no?>">
                        <span>NIC Number</span>
                    </label>
                </div>

                <div class="col-6">
                <label for="" class="filled w100 mb-1">
                        <input type="text" placeholder=" " name="user_address" value="<?=$data->user_address?>">
                        <span>Address</span>
                    </label>
                </div>

                <div class="col-6">
                    <label for="" class="filled w100">
                        <select name="user_job_type" id="" class="user_job_type" style="padding-left:12px;">
                            <option value="">Select</option>
                            <option value="doctor">Doctor</option>
                            <option value="banker">Banker</option>
                            <option value="teacher">Teacher</option>
                            <option value="professor">Professor</option>
                            <option value="business_person">Business Person</option>
                            <option value="engineer">Engineer</option>
                            <option value="it_developer">IT Developer</option>
                            <option value="marketer">Marketer</option>
                            <option value="student">Student</option>
                            <option value="jobless">Jobless</option>
                            <option value="house_wife">House Wife</option>
                            <option value="driver">Driver</option>
                            <option value="guard">Guard</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="placeholder">User Occupation Type</div>
                        <span></span>
                    </label>
                </div>

                <div class="col-6 mb-1">
                    <label for="" class="filled w100">
                        <select name="" id="" class="user_city_id" style="padding-left:12px;" disabled>
                            
                        <?php 
                        if (isset($_SESSION['cities'])){ foreach ($_SESSION['cities'] as $l){ ?>
                        <option value="<?=$l->id?>"><?=$l->city_name?></option>    
                        <?php }} ?>

                        </select>
                        <div class="placeholder">User City</div>
                        <span></span>
                    </label>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success w100">
                        Update
                    </button>
                </div>

                </div>

            </form>

        </div>
    </div>
</div>

<?php 

if (isset($data->user_city_id)) { $city_id = $data->user_city_id;} else { $city_id = ""; }
if (isset($data->user_job_type)) { $user_job_type = $data->user_job_type;} else { $user_job_type = ""; }

?>

<script>

    <?php if (!empty($city_id)) { ?>
    $('.user_city_id option[value=<?=$city_id?>]').attr('selected', 'selected');
    <?php } ?>

    <?php if (!empty($user_job_type)) { ?>
    $('.user_job_type option[value=<?=$user_job_type?>]').attr('selected', 'selected');
    <?php } ?>

    <?php 
    $url = explode('/', $_GET['url']);
    if (end($url) == "update") { ?>

    vt.success("Your profile has been updated",{ 
    title:"Information Updated", 
    position: "top-center", 
    callback: function (){ // 
    } })

    <?php } ?>
</script>