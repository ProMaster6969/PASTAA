<html>
    <head>
            <link rel="stylesheet" href="Register.css?ts=<?=time()?>" type="text/css"/>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <title>Register</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    </head>
    <body>
     
    <?php
    include 'header.php';

    ?>
      <main>
          <div class="hero">
              <div class="form-box">
                  <div class="button-box">
                      <div id="btn"></div>
                      <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                      <button type="button" class="toggle-btn" onclick="register()">Register</button>
                  </div>
             
              <div class="social-icons">
                <a href="https://www.facebook.com/"> <img src="Photos/fb.png" ></a>
                <a href="https://twitter.com/login"> <img src="Photos/tw.png"></a>
                <a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession">
                <img src="Photos/gw.png"></a>
            </div>
          
          <form id="login" action="LoginVerify.php"class="input-group" method="post">
              <input type="text" class=" int input-field" name="name" placeholder="Name" required>
              
              <input type="password" class="int input-field" name="password"placeholder=" Password" required>
              <input type="checkbox" class="chech-box"><span>Remember Password</span>
              <button type="submit" name="submit-btn"id="submit"class="submit-btn" >log in</button>
          </form>
          <form id="register" action="LoginVerify.php"class="input-group" method="post">
            <input type="text" name="register-name" class=" register-input input-field" placeholder="Name" required>
            <input type="email"name="email" class=" register-input input-field" placeholder="Eamil" required>
            
            <input type="password" name="register-password"class=" register-input input-field" placeholder=" Password" required>
            <input type="checkbox" class="chech-box"><span>i agree to the terms and conditions</span>
            <button type="submit" name="register-btn"id="register-button" class="submit-btn">register</button>
        </form>
         
     
    </div>
</div>
</main>

    <?php
   include 'footer.php';
   ?>
  
     <script src="index.js"></script>
  
 </body>
</html>