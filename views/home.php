    <div class="container">
         
        <table class="table table-bordered table-striped">
          <thead class="bg-info">
            <tr>
              <th class="col-xs-3">
                <form action="sort.php" method="post">
                  <button type="submit" name="orderBY" value="student_id">Car</button>
                </form>
              </th>
              <th class="col-xs-3">
                <form action="sort.php" method="post">
                  <button type="submit" name="orderBY" value="first">Gas Mileage</button>
                </form>
              </th>
              <th class="col-xs-3">
                <form action="sort.php" method="post">
                  <button type="submit" name="orderBY" value="last">Year</button>
                </form>
              </th>
              <th class="col-xs-3">
                <form action="sort.php" method="post">
                  <button type="submit" name="orderBY" value="gender">Owner</button>
                </form>
              </th>
            </tr>
          </thead>
                    
          <tbody> 
<!--
          <div class="row">
<?php foreach ($query as $row):?>
        
            <tr>
              <td><?php echo htmlentities($row['car'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['mileage'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['year'], ENT_QUOTES, 'utf-8'); ?></td>
              <td><?php echo htmlentities($row['owner'], ENT_QUOTES, 'utf-8'); ?></td> 
              <td class="deleteButton">
                <form action="delete.php" method="post">
                  <input type="submit" value="Drop" name="DeleteUser" class="deleteButton">            
                  <input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>">
                </form>
              </td>
            </tr>
              
<?php endforeach; ?>
          </div>
          -->
        </tbody>
      </table>
        <!-- Let the user update the roster-->
      <form action="insert.php" method="post" class="newStudent"> 
         <fieldset>
           <legend>Enter another Car:</legend>
           Car <input type="text" name="first" placeholder="Car"> 
           Gas Mileage <input type="text" name="last" placeholder="Gas Mileage">
           Year <input type="text" name="gender" placeholder="Year">
           Owner <input type="text" name="grad" placeholder="Owner">
           <input type="submit" value="Add" name="InsertUser" class="submitButton">
         </fieldset>
       </form>
    </div>
