  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/fond.jpg" alt="Projet">
      </div>
      <div class="name">
        <a href="#user"><img class="circle" src="img/manette2.jpg"></a>
        <a href="#name"><span class="white-text name">Martina Lorenzo</span></a>
        <a href="#email"><span class="white-text email">lmartina@gaming.tech</span></a>
        <a href="#name"><span class="white-text name">Ripot Quentin</span></a>
        <a href="#email"><span class="white-text email">qripot@gaming.tech</span></a>
      </div>
    </div></li>
    <li><a href="index.php"><i class="material-icons">arrow_forward</i>Présentation</a></li>
    <li><div class="divider"></div></li>
    <li><a href="Projet 1.php"><i class="material-icons">bookmark</i>Projet 1</a></li>
    <li><a href="Projet 2.php"><i class="material-icons">bookmark</i>Projet 2</a></li>
    <li><a href="Projet 3.php"><i class="material-icons">bookmark</i>Projet 3</a></li>
  </ul>
  <header>
    <div class="row">
        <div class="col s12 m12 l12 trans hide-on-small-only"></div>
        <div class="col s12 m12 l12 title ">
        <a href="#" data-target="slide-out" class="col l1 sidenav-trigger"><i class="material-icons">menu</i></a>
          <h1 class="col m8 l8 offset-l1 hide-on-small-only">Webfolio: Projets Gaming Campus</h1>
          <p class="hide-on-med-and-up col s8">Webfolio: Projets Gaming Campus</p>
          <a class="right cyan accent-1 waves-effect waves-light btn modal-trigger" href="#modal1">Nous Contacter</a>
          <div id="modal1" class="modal bottom-sheet">
            <div class="col s12 m12 l12 modal-content">
              <form class="col s6 offset-s3">
                <div class="input-field col s5">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Nom</label>
                </div>
                <div class="input-field col s5 offset-s1">
                  <i class="material-icons prefix">account_box</i>
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Prénom</label>
                </div>
                <div class="input-field col s11">
                  <i class="material-icons prefix">contact_mail</i>
                   <input id="email" type="email" class="validate">
                   <label for="email">Email</label>
                   <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                 </div>
                 <div class="input-field col s8">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                  <label for="textarea2">Message</label>
                </div>
                <button id="send" class="col l2 offset-l1 btn waves-effect waves-light send" type="submit" name="action">
                  <i class="material-icons left">send</i>
                  envoyer
                </button>
              </div>
              </form>
            </div>
        </div>
        <div class="col s12 m12 l12 trans hide-on-small-only"></div>
    </div>
  </header>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
