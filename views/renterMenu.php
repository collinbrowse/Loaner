    <div class="col-sm-2">
      <ul class="nav nav-pills nav-stacked">
        <li <?php if ($_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>>
          <a href="../">Home</a>
        </li>                 
        <li role="presentation" <?php if ($_SERVER['REQUEST_URI'] == '../views/renterProfile.php') echo 'class="active"'; ?> >
          <a href="account.php">Profile</a>
        </li>
        <li role="presentation" <?php if ($_SERVER['REQUEST_URI'] == '../views/renterRent.php') echo 'class="active"'; ?>>
          <a href="account.php?renterRent">Rent a Car</a>
        </li>
        <li role="presentation">
          <a href="#">Rental History</a>
        </li>
      </ul>
    </div>