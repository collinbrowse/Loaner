<!-- DatePicker ability taken from the tutorial at formden.com
     link: https://formden.com/blog/date-picker-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />  <!-- for the datepicker -->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> <!-- for the datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> <!-- for the datepicker -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="views/datePicker.js"></script>


<div class="jumbotron"  style="background-image: url('views/car_background.jpg');" class="img-responsive">
  <h1>Car Rentals Made Easy</h1>
</div>
  <div class="bootstrap-iso">
   <div class="container-fluid">
    <div class="row">
     
      <form method="post">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="location">Location</label>
            <input type="email" class="form-control" id="location" placeholder="Where ?">
          </div>
        </div>
       
        <div class="col-md-2">
          <div class="form-group "> 
            <label class="control-label " for="checkIn">Check In</label>  
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
            <label class="control-label " for="date">Check Out</label>
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
            <label class="control-label" for="guest">Seats</label>
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
          <label class="control-label " for="checkIn"></label> 
          <div>
           <button class="btn btn-primary " name="submit" type="submit">Submit</button>
          </div>
        </div>
      </form>
     </div>
    </div>
   </div>
  </div>
  