<?php
 session_start();
 //redirect jika mempunya session
 if(isset($_SESSION['user'])){
     header('location:home.php');
 }
 ?>
 <!DOCTYPE html>
 <html>
     <head>
        <title>PHP Login Authentication OOP PABW</title>
     </head>
     <body>
         <h1>PHP Login Authentication OOP PABW</h1>
         <h3><span></span> Login</h3>
         <form method="POST" action="login.php">
         <div>
            <input placeholder="Username" type="text" name="username" autofocus required>
         </div>
         <div>
            <input placeholder="Password" type="password" name="password" required>
         </div>
            <button type="submit" name="login"><span></span> Login</button>
         </form>
             <?php
             if(isset($_SESSION['message'])){
             ?>
             <div>
             <?php echo $_SESSION['message']; ?>
             </div>
             <?php
             unset($_SESSION['message']);
             }
             ?>
     </body>
 </html>