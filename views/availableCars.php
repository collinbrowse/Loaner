
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
            </tr>
<?php endforeach; ?>
          </tbody>   
    </div>
