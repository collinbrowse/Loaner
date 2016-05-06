<?php require('views/ownerMenu.php'); ?>
    <div class="col-sm-10">
      <form action="insert.php" method="post">
        <h3>Add a Car</h3>
        
        <div class="col-sm-6">
          <div class="form-group">
              <label>Make</label>
              <input type="text" name="make" class="form-control">
          </div>
          <div class="form-group">
              <label>Model</label>
              <input type="text" name="model" class="form-control">
          </div>
          <div class="form-group">
              <label>Year</label>
              <input type="text" name="year" class="form-control">
          </div>           
          <div class="form-group">
              <label>Seats</label>
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
              <label>MPG</label>
              <input type="number" name="mileage" min=0 class="form-control">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="form-group">
              <label>Description</label>
              <input type="text" name="description" class="form-control">
          </div>
          <div class="form-group">
            <label>Date Available</label>
            <input type="text" name="start_rental" placeholder="YYYY-MM-DD" class="form-control">
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="text" name="end_rental" placeholder="YYYY-MM-DD" class="form-control">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="City" class="form-control">
          </div>
          <br>
          <button type="submit" class="btn btn-warning" name="submit" >Submit</button>              
        </div>
      </form>
    </div>