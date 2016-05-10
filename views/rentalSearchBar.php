
  <div class="container-fluid">
  
    <form method="post" action="../availability.php">
      <div class="col-sm-2">
        <div class="form-group">
          <label class="control-label text-white" for="city">City</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>
      </div>
     
     <div class="col-sm-2">
        <div class="form-group">
          <label class="control-label text-white" for="state">State</label>
          <input type="text" class="form-control" id="state" name="state" placeholder="State">
        </div>
      </div>
     
      <div class="col-sm-2">
        <div class="form-group "> 
          <label class="control-label text-white" for="checkIn">Start</label>  
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input class="form-control" id="checkIn" name="start_rental" placeholder="YYYY-MM-DD" type="text"/>
            </div>
        </div>
      </div>
        
      <div class="col-sm-2">
        <div class="form-group "> 
          <label class="control-label text-white" for="checkOut">Finish</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input class="form-control" id="checkOut" name="end_rental" placeholder="YYYY-MM-DD" type="text"/>
            </div>
        </div>
      </div>
  
      <div class="col-sm-2">
        <div class="form-group">
          <label class="control-label text-white" for="seats">Seats</label>
          <select id="seats" name="seats" class="form-control">
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
        </div>
      </div>
      
      <div class="col-sm-1">
        <div class="form-group">
          <label class="control-label text-white" for="submit"></label> 
          <div>
           <button class="btn btn-primary " name="submit" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form> 

  </div>
  
  

