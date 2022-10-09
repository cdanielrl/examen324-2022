<html>
<head>
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/login.js"></script>
</head>
<body>
<div class="field-column">
    <h5>Login</h5>
    <?php 
        if(isset($_SESSION["errorMessage"])) {
        ?>
        <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
        <?php 
        unset($_SESSION["errorMessage"]);
        } 
        ?>
</div>
    <form action="login.php" method="POST" id="formLogin" onsubmit="return validar();">
        <div class="field-column">
        <div>
          <label for="user_name">Usuario</label><span id="usuario_info" class="error-message" visi></span>
          </div>
          <div>
          <input name="user_name" id="user_name" type="text">
          </div>
          </div>
          <div class="field-column">
          <div>
          <label for="password">Contrase&ntilde;a</label><span id="pass_info" class="error-message"></span>
          </div>
          <div>
          <input name="password" id="password" type="password">
          </div>
          </div>
          <div class="field-column">
          <div>
          <input type="submit" name="login" value="Login" class="button"></span>
          </div>
    </div>
    </form>
</body>
</html>