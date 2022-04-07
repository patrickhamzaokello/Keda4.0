<?php
include("includes/includedFiles.php");
?>
<script>
$(".lds-facebook").hide();
$("#mainContent").show();
</script>


<div class="userDetails">

    <div class="usercontainer borderBottom">
        <h5>UPDATE EMAIL</h5>
        <input type="text" class="email" name="email" placeholder="Email address..."
            value="<?php echo $userLoggedIn->getEmail(); ?>">
        <span class="message"></span>
        <button class="settingbutton" onclick="updateEmail('email')">UPDATE EMAIL</button>

    </div>


    <div class="usercontainer">
        <h5>UPDATE PASSWORD</h5>
        <input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">
        <input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
        <input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
        <span class="message"></span>

        <button class="settingbutton" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">UPDATE
            PASSWORD</button>

    </div>


</div>

<script>
  var elmnt = document.getElementById("mainContent");
  
    elmnt.scrollTop = 0
</script>