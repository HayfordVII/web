<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="script.js" defer></script>
    
    <title>Log In</title>
  </head>
  <body>
    <section>

    </section>
      <form action="login.inc.php" class="form" method="post">
        <h1 class="text-center">Log In</h1>
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="uid" id="username" placeholder="Username/Email"/>
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="pwd" id="password" placeholder="Password"/>
          </div>
          <div class="btns-group">
              <input type="submit" name="submit" value="Submit" class="btn" />
          </div>




      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
          }
        }
      ?>  
      </div>
      
      
      
        
     
      

      
    </form>

  
  </body>
</html>