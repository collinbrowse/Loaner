<?php require('views/ownerMenu.php'); ?>
  <div class=container-fluid>
    <div class="col-sm-10">
      <!--Form so that the owner can add a car for listing-->
      <form action="insert.php" method="post">
        <h3 class="text-white">Add a Car</h3>
        <!--First column-->
        <div class="col-sm-6">
          <div class="form-group">
              <label class="text-white">Make</label>
              <input type="text" name="make" class="form-control">
          </div>
          <div class="form-group">
              <label class="text-white">Model</label>
              <input type="text" name="model" class="form-control">
          </div>
          <div class="form-group">
              <label class="text-white">Year</label>
              <input type="text" name="year" class="form-control">
          </div>           
          <div class="form-group">
              <label class="text-white">Seats</label>
              <fieldset>
                  <select name="seats" class="form-control">
                    <option>2</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
              </fieldset>
          </div>
          <div class="form-group">
              <label class="text-white">MPG</label>
              <input type="number" name="mileage" min=0 class="form-control">
          </div>
          <div class="form-group">
              <label class="text-white">Description</label>
              <input type="text" name="description" class="form-control">
          </div>
        </div>
        
       <!--Second Column-->
        <div class="col-sm-6">
          <div class="form-group">
            <label class="text-white">Date Available</label>
            <input type="text" name="start_rental" placeholder="YYYY-MM-DD" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-white">End Date</label>
            <input type="text" name="end_rental" placeholder="YYYY-MM-DD" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-white">City</label>
            <input type="text" name="city" placeholder="City" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-white">State</label>
            <input type="text" name="state" placeholder="State" class="form-control">
          </div>
          <div class="form-group">
              <label class="text-white">Posting Status</label>
              <fieldset>
                  <select name="status" class="form-control">
                    <option value="A">Available</option>
                    <option value="NA">Unavailable</option>
                  </select>
              </fieldset>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>              
        </div>
      </form>
    </div>
  </div>