<?php require 'views/patials/head.php';?> 
<?php require 'views/patials/nav.php';?>
<?php require 'views/patials/header.php';?>

   <p>Create New Track</p>
   <form method="post" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px;">

        <label for="music" style="display: block; margin-bottom: 8px; font-weight: bold;">Track</label>
        <textarea
                type="text"
                name="music"
                style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;"
                placeholder="Enter a Track" 
                ><?= $_POST['music'] ?? ''?></textarea>
          <?php if (isset($errors['music'])): ?>
        <p><?=$errors['music'];?></p>
        <?php endif;?>
        <button type="submit" style="background-color: #cca8e9; color: #fff; padding: 10px; border: none; border-radius: 4px; cursor: pointer;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">Submit</button>
    </form>



<?php require 'views/patials/footer.php';?>