
<!DOCTYPE html>
    <div class="container" >
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Model</th>
              <th>Make</th>
              <th>Year</th>
              <th>Capacity</th>
              <th>Gas Mileage</th>
              <th>Rating</th>
              <th>Description</th>
              <th>Start Rental</th>
              <th>End Rental</th>
              <th>City</th>
              <th>State</th>
<?php if (isset($_SESSION['user_id']) &&  $_SESSION['user_id'] == 'renter'): ?> 
              <th></th>
<?php endif; ?>                            
            </tr>
          </thead>

          <tbody> 
<?php foreach ($query as $row):?>
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
  <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 'renter'): ?>                
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
<?php endforeach; ?>
          </tbody>   
    </div>
