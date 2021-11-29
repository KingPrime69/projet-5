<?php require_once "init.php"; ?>
<html>
<?php require_once "head.php"; ?>
  <body>
    <div class="bg">
    <?php require_once "header.php"; ?>
    <div class="row">
      <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 bg_main">
      <a class="right cyan accent-1 waves-effect waves-light btn modal-trigger" href="#modal1">S'inscrire</a>
      <div id="modal1" class="modal bottom-sheet">
        <div class="col s12 m12 l12 modal-content">
          <form class="col s6 offset-s3" method="post" action="signup.php">
            <div class="input-field col s10">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" name="surname">
              <label for="icon_prefix">pseudo</label>
            </div>
            <div class="input-field col s10">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type='email' name='email'>
              <label for="icon_prefix">email</label>
            </div>
            <div class="input-field col s10">
              <i class="material-icons prefix">lock_outline</i>
              <input id="icon_prefix" type='password' name='password'>
              <label for="icon_prefix">mot de passe</label>
            </div>
            <button id="send" class="col l2 btn waves-effect waves-light send" type="submit" name="Me connecter">
              <i class="material-icons left">send</i>
              envoyer
            </button>
          </div>
          </form>
        </div>
          <a class="right cyan accent-1 waves-effect waves-light btn modal-trigger" href="#modal2">Se connecter</a>
          <div id="modal2" class="modal bottom-sheet">
            <div class="col s12 m12 l12 modal-content">
              <form class="col s6 offset-s3" method="post" action="login.php">
                <div class="input-field col s10">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" name="surname">
                  <label for="icon_prefix">pseudo</label>
                </div>
                <div class="input-field col s10">
                  <i class="material-icons prefix">lock_outline</i>
                  <input id="icon_prefix" type='password' name='password'>
                  <label for="icon_prefix">mot de passe</label>
                </div>
                <button id="send" class="col l2 btn waves-effect waves-light send" type="submit" name="Me connecter">
                  <i class="material-icons left">send</i>
                  envoyer
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
