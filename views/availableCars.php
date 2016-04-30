
<!DOCTYPE html>
    <div class="container" >
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Model</th     >
              <th>Make</th>
              <th>Year</th>
              <th>Capacity</th>
              <th>Gas Mileage</th>
              <th>Rating</th>
              <th>Description</th>
              <th> Hi</th>
              <th> Hi</th>
            </tr>
          </thead>

          <tbody> 
<?php foreach ($query as $row):?>
            <tr>
              <td><?php echo htmlentities($row['model'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['make'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['year'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['seats'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['mileage'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['rating'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['description'], ENT_QUOTES, 'utf-8'); ?></td>
              <td>
                <form action="rent.php" method="post">
                  <input type="submit" name="car_id" value="Rent This Car!">            
                  <input type="hidden" name="car_id" value="<?php echo htmlentities($row['car_id'], ENT_QUOTES, 'utf-8');?>">
                </form>
              </td>
              <td><?php echo $row['car_id'];?></td>
            </tr>
<?php endforeach; ?>
          </tbody>   
    </div>
