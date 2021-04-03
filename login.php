<!DOCTYPE html>
<html lang="en">

   <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
         <style>
            .index{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                
            }
            .bg-img{
                background-image: url(images/loginback.jpg);
                background-size: cover;
            }
            </style>
            <body>
            <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">Mission to Planet Earth: A Digital History</a>
                    </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
                        
                    </ul>
                </div>
            </div>
            </nav>
        <div class="bg-img">
        <div class="container">
       <div style="padding: 50px 0px 300px 0px">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    
                      <h4><b>LOGIN</b></h4>
                               
                        
                                <p class="text-warning"><i>Login to know NASA's Earth science</i><p>
                                <form role="form" action="login_script.php " method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+]+@[a-z0-9.-]+.[a-z]{2,3}$">
                                    
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="password" required="true" pattern=(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$>
                                       
                                    </div>
                                   <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <div>
                          <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                                    
                                </form><br/>
                    </div> </div>
                    </div>
        </div>
        </div>
                
              <footer class="index">
        <center>
        <div class="container">
            <p>Copyright © Ace the Case 2020</p>
            
        </div>
        </center>
    </footer>
    </body>
</html>