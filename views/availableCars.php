
<!DOCTYPE html>
    <div class="container" >
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="text-white">Model</th>
              <th class="text-white">Make</th>
              <th class="text-white">Year</th>
              <th class="text-white">Capacity</th>
              <th class="text-white">Gas Mileage</th>
              <th class="text-white">Rating</th>
              <th class="text-white">Description</th>
              <th class="text-white">Start Rental</th>
              <th class="text-white">End Rental</th>
              <th class="text-white">City</th>
              <th class="text-white">State</th>
<?php if (isset($_SESSION['user_id']) && $_SESSION['type'] == 'renter' && $isRenting == 0): ?> 
              <th class="text-white">Availability</th>
<?php endif; ?>                            
            </tr>
          </thead>
<?php if($query !=  null): ?> 
          <tbody> 
  <?php foreach ($query as $row):?>
    <?php if (isset($_SESSION['user_id']) && $_SESSION['type'] == 'renter' && $row['status']== 'A'): ?> 
            <tr>
              <td><?php echo htmlentities($row['make'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['model'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['year'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['seats'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['mileage'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['rating'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['description'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['start_rental'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['end_rental'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['city'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['state'], ENT_QUOTES, 'utf-8'); ?></td>
      <?php if (isset($_SESSION['user_id']) && $_SESSION['type'] == 'renter' && $isRenting == 0): ?> 
              <td>  
                <form action="rent.php" method="post">
                  <input type="submit" name="car" value="Rent This Car!">            
                  <input type="hidden" name="car_id" value="<?php echo htmlentities($row['car_id'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="start_rental" value="<?php echo htmlentities($row['start_rental'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="end_rental" value="<?php echo htmlentities($row['end_rental'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="state" value="<?php echo htmlentities($row['state'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="city" value="<?php echo htmlentities($row['city'], ENT_QUOTES, 'utf-8');?>">
                </form>
              </td>
      <?php endif; ?>
            </tr>
    <?php endif; ?>
  <?php endforeach; ?>
          </tbody>
<?php else: ?>
  <h1 class="alert alert-error text-white">
  <?php echo "There are no cars available according to your search. Please try another search"; ?>
  </h1>
<?php endif; ?>
    </div>
