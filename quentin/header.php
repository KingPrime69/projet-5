
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
  </ul>
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
