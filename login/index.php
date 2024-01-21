<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

  </head>
  
  <body>
    <div class="container " id="signin">
      <div class="forms-container">
        <div class="signin-signup" >
          <form action="Sign_in.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="u"  required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="p"  required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
          <form action="Sign_up.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="u" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="number" placeholder="CIN" name="c" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="tel" placeholder="Telephone" name="t" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="e" required/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="p" required/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              The customer , the customer will be able to prusue the adipiscingof the company. You must out of reason. Something!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image"/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            The company itself is a very successful company .Our laborious to soten.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image"/>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
