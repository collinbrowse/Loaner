
<!DOCTYPE html>
    <div class="container" >
      <div class="col-sm-10">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="text-white">Model</th>
              <th class="text-white">Make</th>
              <th class="text-white">Rating</th>
              <th class="text-white">City</th>
              <th class="text-white">State</th>
              <th class="text-white">Start Rental</th>
              <th class="text-white">End Rental</th>
            </tr>
          </thead>

          <tbody>
<!--For each row in the query that was returned-->
<?php foreach ($query as $row):?>
            <tr>
              <td><?php echo htmlentities($row['model'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['make'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['rating'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['city'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['state'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['start_rental'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['end_rental'], ENT_QUOTES, 'utf-8'); ?></td>
    <?php if (isset($_SESSION['user_id']) && $_SESSION['type'] == 'renter' && $row['status']== 'R'): ?>                
              <td>  
                <form action="return.php" method="post">
                  <input type="submit" name="car" value="Return This Car!">            
                  <input type="hidden" name="car_id" value="<?php echo htmlentities($row['car_id'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="status" value="NA">
                </form>
              </td>
    <?php endif; ?> 
            </tr>
<?php endforeach; ?>

          </tbody>
        </table>
      </div>
<?php if (isset($_SESSION['message'])): ?>
                <div class="row">
                    <p class="text-info text-center"><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
                </div>
<?php endif; ?>
    </div>
