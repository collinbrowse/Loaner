
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          <h4>Login</h4>
        </div>
        <div class="modal-body">
          <form action="authenticate.php" method="post" class="well">
            <div class="form-group">
              <label for="username"> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password"> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
              <input type="hidden" name="task" value="login">
              <button type="submit" class="btn btn-success btn-block"> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">Cancel</button>
          <p>Not a member? <a href="register.php">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


