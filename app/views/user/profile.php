<div class="getting_started">
    <?php include "app/views/user/sidebar.php"; ?>
    <div class="elements">

        <h4 class="alert_title df jcsb">
        <span class="df aic gap10">
         <?=$title?> </span>
        </h4>

        <hr>

        <?php

        require_once "app/vendor/db.php";
        $data = $mysqli->query('SELECT * FROM accounts WHERE id = "'.$_SESSION['user_id'].'"')->fetch_object();

        ?>

<div class="">
	<div class="row">

        <div class="col-9">

             <form action="<?=root?>account/update-user" method="post">

                <div class="row">

                <div class="col-6">
                    <label class="control">
                    <span>First Name</span>
                    <input required type="text" name="first_name" placeholder="Your First Name" value="<?=$data->first_name?>">
                    </label>
                </div>

                <div class="col-6">
                    <label class="control">
                    <span>Last Name</span>
                    <input required type="text" name="last_name" placeholder="Your Last Name" value="<?=$data->last_name?>">
                    </label>
                </div>

                <div class="col-6">
                    <label class="control">
                    <span>Mobile</span>
                    <input required type="text" name="mobile" placeholder="Mobile" value="<?=$data->mobile?>">
                    </label>
                </div>

                <div class="col-6">
                    <label class="control">
                    <span>Email</span>
                    <input required type="email" name="email" placeholder="Email" value="<?=$data->email?>" disabled>
                    </label>
                </div>

                <div class="col-6">
                    <label class="control">
                    <span>Password</span>
                    <input required type="password" name="password" placeholder="Password" value="<?php // $data->password?>">
                    </label>
                </div>

                <!-- <div class="col-6">
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
                </div> -->

                <div class="db mt-1"></div>
                <div class="col-6">
                    <button type="submit" class="btn btn-success w100">
                        Update
                    </button>
                </div>

                </div>

            </form>

        </div>
    </div>
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

    var hash = window.location.hash.substr(1);

    if (hash == "updated") {
        vt.success("Your profile has been updated",{
        title:"Information Updated",
        position: "bottom-center",
        callback: function (){ //
        } })
    }

</script>