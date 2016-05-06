<?php require('views/ownerMenu.php'); ?>
    <div class="col-sm-10">
        <h3>Owner Profile</h3>
        <img src="views/pics/avatar.gif" alt="avatar" style="width:150px;height:150px;">
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label">First Name:</label>
              <div class="col-xs-3 controls"><?php echo htmlentities($_SESSION['firstName'], ENT_QUOTES, 'utf-8'); ?></div>
              <!-- col-sm-10 --> 
            </div>
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label">Last Name:</label>
              <div class="col-xs-3 controls"><?php echo htmlentities($_SESSION['lastName'], ENT_QUOTES, 'utf-8'); ?></div>
              <!-- col-sm-10 --> 
            </div>
            <div class="row mgbt-xs-0">
              <label class="col-xs-3 control-label">Age:</label>
              <div class="col-xs-3 controls"><?php echo htmlentities($_SESSION['age'], ENT_QUOTES, 'utf-8'); ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
    </div>