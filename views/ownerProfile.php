
<script src="views/datePicker.js"></script>
    <div class="col-sm-10">
      <form action="insert.php" method="post">
        <h3>Owner Profile</h3>
        
        <div class="col-sm-6">
          <div class="form-group">
              <label>Model</label>
              <input type="text" name="model" class="form-control">
          </div>
          <div class="form-group">
              <label>Make</label>
              <input type="text" name="make" class="form-control">
          </div>
          <div class="form-group">
              <label>Year</label>
              <input type="text" name="year" class="form-control">
          </div>           
          <div class="form-group">
              <label>Capacity</label>
              <fieldset>
                  <select  name="seats" class="form-control">
                    <option value="">Select a number of seats</option>
                    <option>2</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
              </fieldset>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="form-group">
              <label>MPG</label>
              <input type="number" name="mileage" min=0 class="form-control">
          </div>
          <div class="form-group">
              <label>Description</label>
              <input type="text" name="description" class="form-control">
          </div>
          <div class="form-group">
            <label>Date Available</label>
            <input type="text" name="startRental" placeholder="YYYY-MM-DD" class="from-control">
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="text" name="endRental" placeholder="YYYY-MM-DD" class="from-control">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="City" class="from-control">
          </div>
          
          <button type="submit" class="btn btn-warning" name="submit" >Submit</button>              
        </div>
      </form>
    </div>