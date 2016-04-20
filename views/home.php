<!-- DatePicker ability taken from the tutorial at formden.com
     link: https://formden.com/blog/date-picker-->

<div class="jumbotron" class="img-responsive">
  <div class="bootstrap-iso">
   <div class="container-fluid">
    <div class="row">
     
      <form method="post" action="availability.php">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="location">Location</label>
            <input type="email" class="form-control" id="location" placeholder="Where ?">
          </div>
        </div>
       
        <div class="col-md-2">
          <div class="form-group "> 
            <label class="control-label" for="checkIn">Check Out</label>  
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input class="form-control" id="checkIn" name="date" placeholder="MM/DD/YYYY" type="text"/>
              </div>
          </div>
        </div>
          
        <div class="col-md-2">
          <div class="form-group "> 
            <label class="control-label" for="checkOut">Check In</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input class="form-control" id="checkOut" name="date" placeholder="MM/DD/YYYY" type="text"/>
              </div>
          </div>
        </div>
    
        <div class="col-md-2">
          <div class="form-group">
            <label class="control-label" for="seats">Seats</label>
            <select id="seats" name="seats" class="form-control">
              <option value="2">2 Seats</option>
              <option value="4">4 Seats</option>
              <option value="5">5 Seats</option>
              <option value="6">6 Seats</option>
              <option value="7">7 Seats</option>
              <option value="8">8 Seats</option>
            </select>
          </div>
        </div>
    
        <div class="form-group">
          <label class="control-label " for="submit"></label> 
          <div>
           <button class="btn btn-primary " name="submit" type="submit">Submit</button>
          </div>
        </div>
        
      </form>
    </div>
   </div>
  </div>
</div>