<?php require('views/ownerMenu.php'); ?>
    <div class="container" >
      <div class="col-sm-10">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Model</th>
              <th>Make</th>
              <th>Rating</th>
              <th>City</th>
              <th>State</th>
              <th>Availability</th>
            </tr>
          </thead>

          <tbody> 
<?php foreach ($query as $row):?>
            <tr>
              <td><?php echo htmlentities($row['model'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['make'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['rating'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['city'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['state'], ENT_QUOTES, 'utf-8'); ?></td>
    <?php if ($row['status']=='NA'): ?>                
              <td>  
                <form action="changeStatus.php" method="post">
                  <input type="submit" name="makeAvailable" value="Make Car Available">            
                  <input type="hidden" name="car_id" value="<?php echo htmlentities($row['car_id'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="status" value="A">
                </form>
              </td>
    <?php endif; ?>
    <?php if ($row['status']=='A'): ?>                
              <td>  
                <form action="changeStatus.php" method="post">
                  <input type="submit" name="makeUnavailable" value="Make Car Unavailable">            
                  <input type="hidden" name="car_id" value="<?php echo htmlentities($row['car_id'], ENT_QUOTES, 'utf-8');?>">
                  <input type="hidden" name="status" value="NA">
                </form>
              </td>
    <?php endif; ?>
        <?php if ($row['status']=='R'): ?>                
              <td>Car is Currently Rented Out</td>
    <?php endif; ?> 
            </tr>
<?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>