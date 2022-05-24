<nav class="account nav" style="display:none">
<div class="container-fluid">
<?php 

$url = explode("/", $_SERVER['REQUEST_URI']);
// print_r(end($url));
?>

<ul class="">
    <li><a <?php if (end($url) == "dashboard") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/dashboard">Dashboard</a></li>
    <li><a <?php if (end($url) == "inbox") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/inbox">Inbox</a></li>
    <li><a <?php if (end($url) == "vehicles") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/vehicles">My Vehicles</a></li>
    <li><a <?php if (end($url) == "trips") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/trips">My Trips</a></li>
    <li><a <?php if (end($url) == "profile") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/profile">Profile</a></li>
    <li><a <?php if (end($url) == "verification-center") {echo"style='font-weight:bold'"; echo "class='selected'";}?> href="<?=root?>account/verification-center">Verifications</a></li>
    <li class="fr"><a hred="#"><span id="clock"></span></a></li>
</ul>
</div>

</nav>

<script>
var iteration=0;function updateClock(){if(iteration<2){$("#clock").hide()}else{if($("#clock").is(":visible")==!1){$("#clock").fadeIn()}}
var currentTime=new Date();var currentHours=currentTime.getHours();var currentMinutes=currentTime.getMinutes();var currentSeconds=currentTime.getSeconds();var currentDate=currentTime.toDateString();var currentWeekday=currentDate.substring(0,3);var currentMonth=currentDate.substring(4,8);var currentYear=currentTime.getFullYear();var currentDay=currentTime.getDate();currentMinutes=(currentMinutes<10?"0":"")+currentMinutes;currentSeconds=(currentSeconds<10?"0":"")+currentSeconds;var timeOfDay=(currentHours<12)?"AM":"PM";currentHours=(currentHours>12)?currentHours-12:currentHours;currentHours=(currentHours==0)?12:currentHours;currentHours=(currentHours<10?"0":"")+currentHours
var currentTimeString=currentHours+":"+currentMinutes+":"+currentSeconds+" "+timeOfDay;$("#clock").html(currentTimeString);iteration++}
function AdjustPosition(){var width=$("#clock_wrap").width();var height=$("#clock_wrap").height();$("#clock_wrap").css("top","calc(calc(100vh - "+height+"px)/2)");$("#clock_wrap").css("left","calc(calc(100vw - "+width+"px)/2)")}
$('<img/>').attr('src','<?=root?>assets/img/favicon.png').on('load',function(){$(this).remove();setInterval('AdjustPosition()',50);setInterval('updateClock()',100)}) 
</script>

<style>
 .selected { background: rgb(4 4 4 / 30%); border-radius: 4px; height: 30px; }
</style>
