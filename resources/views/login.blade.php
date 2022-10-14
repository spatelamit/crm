<!DOCTYPE html>
<html lang="en">
<head>
<title>SRTS CRM Login</title>
<!-- META SECTION -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;600;700;800;900&family=Montserrat:wght@100;300;500;600;700&family=Open+Sans:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@200;500;700&display=swap" rel="stylesheet"> 
<!-- END META SECTION -->
<!-- CSS INCLUDE -->

</head>

<body class="body_ashish">
<div >
  <div class="login_box">
    <div class="container_login">
    
    <div class="user_login_img">
     <img src="assets/img/no-image.png">
    </div>
    
      <div class="title">
       <h5> CRM login </h5>
        <p> Sign in to your account </p>
        </div>
      
      <!-- Web tracking -->
      <input type="hidden" class="form-control" name="url_path" id="url_path">
      <input type="hidden" class="form-control" name="ip_adreess" id="ip_adreess">
      <!-- end Web tracking -->
      
      <div data-matomo-form data-matomo-name="myformname" id="loginform">
        <form method="POST" action="{{ url('/login_action') }}" id="login_form">
          @csrf
          
          
          <div class="input_login">
          <input type="text" class="" name="username"
                                placeholder="Email Address or username" required>
          </div>                      
           
           
            <div class="input_login">                     
          <input type="password" class="" name="password" placeholder="Password" required>
          </div>
          
          
          <div class="text-right">
          
          <div class="width_20%">
          <label>
              <input type="checkbox" class="chek_box" name="app-checkbox-1" value="0">
              Remember me</label>
          </div>
          
          
            
          </div>
          <button type="submit" name="submit" class="btn-login">Sign
          In</button>
          
          <div class="Forget">
          <p data-track-content="" data-content-name="LognForm"
                                        data-content-piece="forget_password" data-content-target="forget_password"><a href="#">Forget Password</a></p>
           </div>                             
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
