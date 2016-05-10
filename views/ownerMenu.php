   <div class="col-sm-2">
      <ul class="nav nav-pills nav-stacked">
        <li>
          <a href="../">Home</a>
        </li>                 
        <li <?php if ($_SERVER['REQUEST_URI'] == '/profile.php') echo 'class="active"'; ?> >
          <a href="../profile.php">Profile</a>
        </li>
        <li <?php if ($_SERVER['REQUEST_URI'] == '/addCar.php') echo 'class="active"'; ?>>
          <a href="../addCar.php">Add a car</a>
        </li>
        <li <?php if ($_SERVER['REQUEST_URI'] == '/carInventory.php') echo 'class="active"'; ?>>
          <a href="../carInventory.php">View Your Cars</a>
        </li>
      </ul>
    </div>