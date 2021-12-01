<?php require_once "init.php"; ?>
<html>
<?php require "head.php"; ?>
 <body>
   <div class="bg">
     <div class="row">
    <?php require "header.php"; ?>
    <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 bg_main">
    <h1>Liste des utilisateurs</h1>
    <h2>Règles de modification</h2>
    <p class="center">réecrire toutes les données qui ne sont pas modifier</p>
    <h3 class="col s1 offset-l1 top">ID</h3>
    <h3 class="col s3 top">Pseudo</h3>
    <h3 class="col s3 top">Email</h3>
    <h3 class="col s3 top">Commande</h3>
    <?php
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $user){ ?>
      <div class="bloc_user col s10 offset-l1">
        <form class="" action="modif.php" method="post">
          <div class="input-field col s1">
            <input id="icon_prefix" class="cyan-text" type="text" name="id">
            <label for="icon_prefix" class="cyan-text"><?php echo $user['id']?></label>
          </div>
        <div class="input-field col s4">
          <i class="material-icons prefix cyan-text">account_circle</i>
          <input id="icon_prefix" class="cyan-text" type="text" name="surname">
          <label for="icon_prefix" class="cyan-text"><?php echo $user['surname']?></label>
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix cyan-text">mail</i>
          <input id="icon_prefix" class="cyan-text" type="text" name="email">
          <label for="icon_prefix" class="cyan-text"><?php echo $user['email']?></label>
        </div>
        <button id="send" class="col l2 offset-l1 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
          <i class="material-icons left">send</i>
          modifier
        </button>
      </form>
      <form class="" action="delete.php" method="post">
        <button id="send" class="col l2 offset-l1 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
          <i class="material-icons left">clear</i>
          supprimer
        </button>
      </form>
      </div>
      <?php } ?>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
 </body>
</html>
