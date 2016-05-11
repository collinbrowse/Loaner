<!--Modal that allows a user to enter credentials to sign in-->         
            <div class="row">
                <div class="col-sm-6">
                    <h3>Signup</h3>
                    <form action="authenticate.php" method="post" class="well">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" min="18" max="65" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type of Account</label>
                            <fieldset>
                                <select  name="type" class="form-control">
                                  <option value='renter'>Renter</option>
                                  <option value='owner'>Owner</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <input type="hidden" name="task" value="register">
                        <button type="submit" class="btn btn-default">Register</button>
                    </form>
                </div>
<?php if (isset($_SESSION['message'])): ?>
                <div class="row">
                    <p class="text-info text-center text-white"><?php echo $_SESSION['message']; unset($_SESSION['message']);?></p>
                </div>
<?php endif; ?>
            </div>
