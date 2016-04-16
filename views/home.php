    <div class="container" >
      <div class="jumbotron"  style="background-image: url('views/car_background.jpg');" class="img-responsive">
          <h1>Car Rentals Made Easy</h1>
      </div>
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

    <div class="container">
      <form action="insert.php" method="post" class="form-horizontal" id="form_members" role="form">
        <legend>Add a Car</legend>
          <div class="form-group">
            <label for="model" class="col-sm-2">Model</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="model" id="model" placeholder="Car Model">
              </div>
            <label for="make" class="col-sm-2">Make</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="make" id="make" placeholder="Car Make">
              </div>
            <label for="year" class="col-sm-2">Year</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="year" id="year" placeholder="Car Year">
              </div>
            <label for="capacity" class="col-sm-2">Capacity</label>
              <fieldset>
              <div class="col-sm-4">
                <select class="form-control" name="seats" id="seats">
                  <option value="">Select a number of seats</option>
                  <option>2</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                </select>
              </div>
            </fieldset>
            <label for="mpg" class="col-sm-2">MPG</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Miles Per Gallon">
              </div>
            <label for="description" class="col-sm-2">Description</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="description" id="description" placeholder="What condition is the car in?">
              </div>
              <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
          </div>
        </div>
      </form>
      
    </div>
