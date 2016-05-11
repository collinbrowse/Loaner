
<?php require('views/renterMenu.php'); ?>
<!--Show the information that is associated with a user-->
    <div class="col-sm-10">
      <h3 class="text-white">Renter Profile</h3>
        <img src="views/pics/avatar.gif" alt="avatar" style="width:150px;height:150px;">
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label text-white">First Name:</label>
              <div class="col-xs-3 controls text-white"><?php echo htmlentities($_SESSION['firstName'], ENT_QUOTES, 'utf-8'); ?></div>
            </div>
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label text-white">Last Name:</label>
              <div class="col-xs-3 controls text-white"><?php echo htmlentities($_SESSION['lastName'], ENT_QUOTES, 'utf-8'); ?></div>
            </div>
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label text-white">Age:</label>
              <div class="col-xs-3 controls text-white"><?php echo htmlentities($_SESSION['age'], ENT_QUOTES, 'utf-8'); ?></div>
            </div>
          </div>
        </div>
    </div>
    