
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/fond.jpg" alt="Projet">
      </div>
      <div class="name">
        <a><img class="circle" src="img/manette2.jpg"></a>
        <a href="account.php"><?php if(empty($_SESSION['user']['surname'])){echo "Vous n'êtes pas connecter";}else{echo "Compte de "."{$_SESSION['user']['surname']}";}?></a>
      </div>
    </div></li>
    <li><a href="index.php"><i class="material-icons">arrow_forward</i>Présentation</a></li>
    <li><div class="divider"></div></li>
    <li><a href="Projet 1.php"><i class="material-icons">bookmark</i>Projet 1</a></li>
    <li><a href="Projet 2.php"><i class="material-icons">bookmark</i>Projet 2</a></li>
    <li><a href="Projet 3.php"><i class="material-icons">bookmark</i>Projet 3</a></li>
    <?php
    if(!empty($_SESSION['user'])){
      if($_SESSION['user']['surname'] == 'admin'){
        ?>
        <li><div class="divider"></div></li>
        <li><a><i class="material-icons">arrow_forward</i>Pannel Admin</a></li>
        <li><div class="divider"></div></li>
        <li><a href="Pannel_admin.php"><i class="material-icons">bookmark</i>User</a></li>
        <?php
      }
    }
    ?>
    <?php
    if(!empty($_SESSION['user'])){
      ?>
      <li><a class="cyan accent-1 waves-effect waves-light btn modal-trigger black-text" href="#modal1">Nous Contacter</a></li>
      <?php
    }
    ?>
  </ul>
  <div class="row">
    <div id="modal1" class="modal bottom-sheet">
      <div class="col s12 m12 l12 modal-content">
        <form class="col s6 offset-s4" method="post" action="mail.php">
          <div class="input-field col s8 ">
            <i class="material-icons prefix cyan-text">account_box</i>
            <label class="cyan-text" for="Surname"><?php echo $_SESSION['user']['surname']; ?></label>
          </div>
          <div class="input-field col s8 ">
            <i class="material-icons prefix cyan-text">contact_mail</i>
            <label class="cyan-text" for="Surname"><?php echo $_SESSION['user']['email']; ?></label>
          </div>
          <div class="input-field col s8">
            <i class="material-icons prefix cyan-text">email</i>
            <input id="icon_prefix" class="cyan-text" type="text" name="object">
            <label for="icon_prefix" class="cyan-text">Objet</label>
          </div>
          <div class="input-field col s8">
            <i class="material-icons prefix cyan-text">mode_edit</i>
            <textarea id="textarea2" class="materialize-textarea cyan-text" data-length="120" name="textarea2"></textarea>
            <label for="textarea2" class="cyan-text">Message</label>
          </div>
          <button id="send" class="col l3 btn cyan accent-1 waves-effect waves-light btn black-text" type="submit" name="Me connecter">
            <i class="material-icons left">send</i>
            envoyer
          </button>
        </div>
      </form>
    </div>
  </div>
  <header>
    <div class="row">
      <div class="col s12 m12 l12 trans hide-on-small-only"></div>
      <div class="col s12 m12 l12 title ">
        <a href="#" data-target="slide-out" class="col l1 sidenav-trigger"><i class="material-icons">menu</i></a>
          <h1 class="col m8 l8 offset-l1 hide-on-small-only">Webfolio: Projets Gaming Campus</h1>
          <p class="hide-on-med-and-up col s8">Webfolio: Projets Gaming Campus</p>
        <div class="col s12 m12 l12 trans hide-on-small-only"></div>
      </div>
    </div>
  </header>
