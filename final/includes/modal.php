<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center">LOGIN
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </h2>
            </div>
            <div class="modal-body">
                <form class="form" action="includes/login_script.php" method="POST">
                    <div class="form-group">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                    </div>
                    
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                    </div>
                    
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>