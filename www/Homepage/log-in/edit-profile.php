<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php if (isset ($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        <form action="edit-p.inc.php" method='post' enctype='multipart/form-data'>
        
        <div class="form-group">
                <label for="profile_pic">Add profile Pic</label>
                <input type="file" class='form-control' name='profile_pic1'>
            </div>
            <div class="form-group">
                <label for="profile_pic">Add profile Pic</label>
                <input type="file" class='form-control' name='profile_pic2'>
            </div>
            <div class="form-group"> 
                <label for="profile_pic">Bio</label>
                <textarea name="" id="" cols="30" rows="10" name='bio'></textarea>
            </div>

            <div class="form-group">
                <label for="profile_pic">Upload CV</label>
                <input type="file" class='form-control' name='cv'>
            </div>

            <div class="form-group">
                <label for="profile_pic">Instagram</label>
                <textarea name="" id="" cols="10" rows="1" name='link1'></textarea>
            </div>
            
            <div class="form-group">
                <label for="profile_pic">GitHub</label>
                <textarea name="" id="" cols="10" rows="1" name='link2'></textarea>
            </div>

            <div class="form-group">
                <label for="profile_pic">Telegram</label>
                <textarea name="" id="" cols="10" rows="1" name='link3'></textarea>
            </div>
            
            <button type="submit" name='submit' class="">submit</button>

        </form> 
    </section>
   
</body>
</html>