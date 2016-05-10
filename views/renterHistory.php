
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
<?php foreach ($query as $row):?>
            <tr>
              <td><?php echo htmlentities($row['model'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['make'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['rating'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['city'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['state'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['start_rental'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['end_rental'], ENT_QUOTES, 'utf-8'); ?></td>
            </tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
