        <nav class="navbar navbar-fixed-top navbar-inverse navbar-style">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data- toggle="collapse" data-targer="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand navbar-color">Sports Store</a>

                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['email'])){    
                        ?>
                        <li><a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php 
                        } else { include 'modal.php';
                        ?>
                        <li><a href="about.php" class="nav-link"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li><a href="contact.php" class="nav-link"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <li><a href="signup.php" class="nav-link"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php }                        
                        ?>
                    </ul>
                </div>
            </div>
        </nav>