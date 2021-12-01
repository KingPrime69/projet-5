<?php require_once "init.php"; ?>
<html>
<?php require_once "head.php"; ?>
  <body>
    <div class="bg">
    <?php require_once "header.php"; ?>
    <div class="row">
      <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 bg_main">
        <?php if(empty($_SESSION['user']['surname'])){
          ?>
          <div class="log">
          <form class="col s12" method="post" action="signup.php">
          <div class="input-field col s8 offset-l2">
            <i class="material-icons prefix cyan-text">account_circle</i>
            <input id="icon_prefix" class="cyan-text" type="text" name="surname">
            <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['surname'])){echo "Pseudo";}
              else{echo $_SESSION['user']['surname'];} ?></label>
          </div>
          <div class="input-field col s8 offset-l2">
            <i class="material-icons prefix cyan-text">email</i>
            <input id="icon_prefix" class="cyan-text" type="text" name="email">
            <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['email'])){echo "example@email.com";}
              else{echo $_SESSION['user']['surname'];} ?></label>
          </div>
          <div class="input-field col s8 offset-l2">
            <i class="material-icons prefix cyan-text">lock_outline</i>
            <input id="icon_prefix" class="cyan-text" type="password" name="password">
            <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['surname'])){echo "Mot de Passe";}
              else{echo "Mot de Passe";} ?></label>
          </div>
          <button id="send" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
            <i class="material-icons left">send</i>
            S'insricre
          </button>
        </form>
        <div class="connecte">
          <button id="connect" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text">
            <i class="material-icons left">send</i>
            se connecter
          </button>
        </div>
      </div>
        <div class="connect">
          <form class="col s12" method="post" action="login.php">
            <div class="input-field col s8 offset-l2">
              <i class="material-icons prefix cyan-text">account_circle</i>
              <input id="icon_prefix" class="cyan-text" type="text" name="surname">
              <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['surname'])){echo "Pseudo";}
              else{echo $_SESSION['user']['surname'];} ?></label>
            </div>
            <div class="input-field col s8 offset-l2">
              <i class="material-icons prefix cyan-text">lock_outline</i>
              <input id="icon_prefix" class="cyan-text" type="password" name="password">
              <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['surname'])){echo "Mot de Passe";}
              else{echo "Mot de Passe";} ?></label>
            </div>
            <button id="send" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
              <i class="material-icons left">send</i>
              se connecter
            </button>
          </form>
          <div class="subcribe">
            <button id="connect" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text">
              <i class="material-icons left">send</i>
              s'inscrire
            </button>
          </div>
          <?php
        }
          else{
            ?>
            <form class="col s12" method="post" action="change.php">
              <div class="input-field col s8 offset-l2">
                <i class="material-icons prefix cyan-text">account_circle</i>
                <input id="icon_prefix" class="cyan-text" type="text" name="surname">
                <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['surname'])){echo "Pseudo";}
                else{echo $_SESSION['user']['surname'];} ?></label>
              </div>
              <div class="input-field col s8 offset-l2">
                <i class="material-icons prefix cyan-text">email</i>
                <input id="icon_prefix" class="cyan-text" type="text" name="email">
                <label for="icon_prefix" class="cyan-text"><?php if(empty($_SESSION['user']['email'])){echo "example@email.com";}
                else{echo $_SESSION['user']['email'];} ?></label>
              </div>
              <div class="input-field col s8 offset-l2">
                <i class="material-icons prefix cyan-text">lock_outline</i>
                <input id="icon_prefix" class="cyan-text" type="password" name="password">
                <label for="icon_prefix" class="cyan-text">Mot de Passe</label>
              </div>
              <button id="send" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
                <i class="material-icons left">send</i>
                modifier
              </button>
              </form>
              <form class="col s12" action="disconnect.php" method="post">
                <button id="send" class="col l2 offset-l8 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
                  <i class="material-icons left">send</i>
                  Se déconnecter
                </button>
              </form>
        <?php  } ?>
      </div>
    </div>

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
