<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME | SPORTS STORE</title>
        <?php
            include 'includes/links.php';
        ?>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/check-if-added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        ?>
        
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h2 class=text-center>WELCOME '$email'</h2>";
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">CRICKET</div>
                            <div class="panel-body"><img src="img/cricket bat.jpg" class="img-responsive img-sport" alt="CRICKET BAT"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">CRICKET BAT</h4>
                                <p>Kookaburra Cricket Bat</p>
                                <p class="p-bold">Price : 10,999</p>
                                <?php if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">FOOTBALL</div>
                            <div class="panel-body"><img src="img/football.jpg" class="img-responsive img-sport" alt="FOOTBALL"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">FOOTBALL</h4>
                                <p>A Nice Football</p>
                                <p class="p-bold">Price : 1,999 </p>
                                 <?php if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">GOLF</div>
                            <div class="panel-body"><img src="img/golf.jpg" class="img-responsive img-sport" alt="GOLF KIT"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">GOLF KIT</h4>
                                <p>A Professional Golf Kit</p>
                                <p class="p-bold">Price : 17,999</p>
                                 <?php if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">BASKETBALL</div>
                            <div class="panel-body"><img src="img/basketball.jpg" class="img-responsive img-sport" alt="BASKETBALL"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">BASKETBALL</h4>
                                <p>A Good Basketball</p>
                                <p class="p-bold">Price : 1,999</p>
                                 <?php if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">BADMINTON</div>
                            <div class="panel-body"><img src="img/badminton.jpg" class="img-responsive img-sport" alt="BADMINTON"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">BADMINTON</h4>
                                <p>Nice Raquet</p>
                                <p class="p-bold">Price : 5,999 </p>
                                 <?php if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">BASEBALL</div>
                            <div class="panel-body"><img src="img/baseball.jpg" class="img-responsive img-sport" alt="BASEBALL"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">BASEBALL</h4>
                                <p>Baseball Bat</p>
                                <p class="p-bold">Price : 3,999</p>
                                 <?php if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">HOCKEY</div>
                            <div class="panel-body"><img src="img/hockey.jpg" class="img-responsive img-sport" alt="HOCKEY"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">HOCKEY</h4>
                                <p>Also helpful in fights.</p>
                                <p class="p-bold">Price : 3,999</p>
                                 <?php if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">TENNIS</div>
                            <div class="panel-body"><img src="img/tennis raquet.jpg" class="img-responsive img-sport" alt="TENNIS"> </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">TENNIS</h4>
                                <p>A Nice Game</p>
                                <p class="p-bold">Price : 13,999</p>
                                 <?php if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">VOLLEYBALL</div>
                            <div class="panel-body"><img src="img/volleyball.jpg" class="img-responsive img-sport" alt="VOLLEYBALL"> </div>
                            <div class="panel-footer">
                                <h4 class="p-bold">VOLLEYBALL</h4>
                                <p>COSCO volleyball</p>
                                <p class="p-bold">Price : 1,999</p>
                                 <?php if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                }
                                else{?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block"> Buy Now</button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>
    </head>
</html>