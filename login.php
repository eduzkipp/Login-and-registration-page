<html>
<head>
    
    <title> 
    User login
    </title>
    
    <link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    
    <body>
    <div class="container">
        
        <div class="login-box">
        <div class="row">
      
            <div class="col-md-6 login-left">
            
            <h1>  User login</h1>
            
                <form action="validation.php" method="post">
                    
                    <div class="form-group">
                    <label> Username</label>
                        <input type="text" name="user" class="form-control" required>
                    
                    </div>
                     <div class="form-group">
                    <label> Password</label>
                        <input type="password" name="password" class="form-control" required>
                    
                    </div>
                    <button type="submit" class="btn btn-primary button"> Login</button>
                
                
                
                
                
                </form>
            </div>
            
            
             <div class="col-md-6 login-right">
            
            <h1>  User registration</h1>
            
                <form action="registration.php" method="post">
                    
                    <div class="form-group">
                    <label> Username</label>
                        <input type="text" name="user" class="form-control" required>
                    
                    </div>
                     <div class="form-group">
                    <label> Password</label>
                        <input type="password" name="password" class="form-control" required>
                    
                    </div>
                    <button type="submit" class="btn btn-primary button"> Register</button>
                
                
                
                
                
                </form>
            </div>
            
            
          

        
        </div>
            </div>
        
        </div>
    
    
    </body>


</html>