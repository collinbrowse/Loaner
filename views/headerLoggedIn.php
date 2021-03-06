<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Loaner</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
      <link rel="stylesheet" href="views/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
      <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />  <!-- for the datepicker -->
      <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> <!-- for the datepicker -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> <!-- for the datepicker -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>
  <body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <script src="views/datePicker.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
<!-- Navigation Bar example taken from http://getbootstrap.com/components/#navbar-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Loaner</a>
        </div>
        
        <div class="nav navbar-nav navbar-right">
<?php if (isset($_SESSION['user_id'])): ?>
            <p class="navbar-text">Signed in as <?php echo htmlentities($_SESSION['user_id'], ENT_QUOTES, 'utf-8'); ?></p>
            <ul class="nav navbar-nav">
              <li><a role="button" class="btn btn-success btn-md" href="profile.php">Profile</a></li>
              <li><a role="button" class="btn btn-success btn-md" href="logout.php">Logout</a></li>
            </ul>
<?php endif; ?>            
          
        </div>
      </div>
    </nav>