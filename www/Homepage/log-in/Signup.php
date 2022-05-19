


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js" defer></script>
    
    <title>SIGN UP|EMPLOYER</title>
  </head>
  <body>
    <section>

    
      <form action="signup.inc.php" class="form" method="post">
        <h1 class="text-center">Sign Up</h1>
        <!-- Progress bar -->
        <div class="progressbar">
          <div class="progress" id="progress"></div>

          <div class="progress-step progress-step-active" data-title="Intro"></div>
            
            
          
          <div class="progress-step" data-title="Contact"></div>
          <div class="progress-step" data-title="Location"></div>
          <div class="progress-step" data-title="Password"></div>


          

        </div>

        <!-- Steps -->
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="username">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="uid" id="username" />
          </div>
          <div class="input-group">
            <label for="position">Course</label>
            <select name = "course">
              <option>--- --- </option>
              <option>Cybersecurity</option>
              <option>Data Science</option>
              <option>Graphic Design </option>
              <option>Networking</option>
              <option>Software Dev </option>
              <option>Web Dev</option>
            </select>
          </div>
          <div class="">
            <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
          </div>

          
        </div>

        <!-- 2nd Step -->
        <div class="form-step">
          <div class="input-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>

        <!-- 3rd Step -->
        <div class="form-step">
          <div class="input-group">
            <label for="">Location </label>
            <input type="text" name="location" id="Location" placeholder="Town, City, Region"/>
          </div>
          <div class="input-group">
            <label for="workstation">WorkStation</label>
            <select name="workstation">
              <option>--- ---</option>
              <option>Home</option>
              <option>Office</option>
              <option>Both</option>
            </select>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>

        <!-- 4th Step -->
        <div class="form-step">
          
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="pwd" id="password" />
          </div>
          <div class="input-group">
            <label for="confirmPassword">Confirm Password</label>
            <input
              type="password"
              name="pwdrepeat"
              id="confirmPassword"
            />
          </div>
          <div class="input-group">
            <label for="position">User Type</label>
            <select name="usertype">
              <option>--- --- </option>
              <option>Employer</option>
              <option>Intern</option>
            </select>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <input type="submit" name="submit" value="Submit" class="btn" />
          </div>
        </div>

      <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
              echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
              echo "<p>Choose a proper email</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
              echo "<p>Passwords doesn't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
              echo "<p>Something went wrong!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
              echo "<p>You have signed up!</p>";
            }
          }
        ?>
       
      </form>
       
      
    </section>

  
  </body>
</html>