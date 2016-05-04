    <div class="col-sm-2">
      <ul class="nav nav-pills nav-stacked">
        <li>
          <a href="../">Home</a>
        </li>                 
        <li <?php if ($_SERVER['REQUEST_URI'] == 'profile.php') echo 'class="active"'; ?> >
          <a href="../profile.php">Profile</a>
        </li>
        <li <?php if ($_SERVER['REQUEST_URI'] == 'rentalCarSearch.php') echo 'class="active"'; ?>>
          <a href="../rentalCarSearch.php">Rent a Car</a>
        </li>
        <li>
          <a href="#">Rental History</a>
        </li>
      </ul>
    </div>
    
  