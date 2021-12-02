<?php require_once "init.php"; ?>
<!DOCTYPE html>
  <html>
  <?php require_once "head.php"; ?>
    <body>
      <div class="bg">
        <?php require_once "header.php"; ?>
        <main>
          <div class="row">
            <div class="col l10 offset-l1 bg_main">
              <div class="col s12 m10 l10 offset-l1">
                <h2 class="header">Projet 1 : Initiation à l'Algorithmie</h2>
                <div class="col s10 m12 l12 init">
                  <div class="card horizontal">
                    <div class="carousel carousel-slider center">
                      <a class="col s12 button btn transparent z-depth-0 carousel-slider">
                        <i class="blue-grey waves-effect waves-light material-icons left show" id="pre_algo">arrow_back</i>
                        <i class="blue-grey waves-effect waves-light material-icons right show" id="next_algo">arrow_forward</i>
                      </a>
                      <div class="carousel-item grey darken-4 white-text" href="#one!">
                        <img class="col s12 m8 l8" src="img/fond1.jpg" alt="projet">
                        <h2>Initiation</h2>
                        <p class="white-text">Lors de ce projet nous avons d'abord appris l'Algorithmie.
                        Nous avons donc assimilé différentes notions, 4 plus particulièrement.
                        Nous avons les Variables, Les Conditions, Les Boucles ainsi que les Fonctions.</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#two!">
                        <img class="col s12 m8 l8" src="img/fond2.jpg" alt="projet">
                        <h2>Variables</h2>
                        <p class="white-text">Les variables sont des "boîtes" dans lesquelles le programme va pouvoir stocker des données. Le contenu d'une variable pourra être affiché, modifié, supprimé ou juste utilisé par le programme grâce au nom de la variable.
                        Ici nous verrons les types de données ainsi que l'initialisation d'une variable</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#three!">
                        <img class="col s12 m8 l8" src="img/fond3.jpg" alt="projet">
                        <h2>Conditions</h2>
                        <p class="white-text">Une condition est une expression booléenne. L'instruction n'est exécutée que si cette l'expression booléenne est évaluée à VRAI.
                        Ici nous verrons la fonction "Si" et comment elle marche.</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#four!">
                        <img class="col s12 m8 l8" src="img/fond4.jpg" alt="projet">
                        <h2>Boucles</h2>
                        <p class="white-text">Pour répéter une instruction plusieurs fois, on peut utiliser une structure itérative : boucle. Il existe plusieurs types de « boucles » : Tant Que (while),Pour (for),Pour Chaque (foreach)
                        Ici nous verrons la boucle "tant que"</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#five!">
                        <img class="col s12 m8 l8" src="img/fond5.jpg" alt="projet">
                        <h2>Fonctions</h2>
                        <p class="white-text">Une fonction est une portion de code informatique nommée, qui accomplit une tâche spécifique. Procédure & fonction : Il existe une différence entre ces deux appellations bien qu'elles se mettent en place plus ou moins de la même manière.
                        Ici nous verrons une fonction ainsi que comment elle marche.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m10 l10 offset-l1">
                <h2 class="header">Projet 1 : Découverte Python</h2>
                <div class="col s10 m12 l12 py">
                  <div class="card horizontal">
                    <div class="carousel carousel-slider center">
                      <a class="col s12 button btn transparent z-depth-0 carousel-slider">
                        <i class="blue-grey waves-effect waves-light material-icons left show" id="pre_py">arrow_back</i>
                        <i class="blue-grey waves-effect waves-light material-icons right show" id="next_py">arrow_forward</i>
                      </a>
                      <div class="carousel-item grey darken-4 white-text" href="#one!">
                        <img class="col s12 m8 l8" src="img/fond6.jpg" alt="projet">
                        <h2>Python</h2>
                        <p class="white-text">Python est un langage de programmation qui peut s'utiliser dans de nombreux contextes et s'adapter à tout type d'utilisation grâce à des bibliothèques spécialisées. Il est cependant particulièrement utilisé comme langage de script pour automatiser des tâches simples mais fastidieuses, comme un script qui récupérerait la météo sur Internet ou qui s'intégrerait dans un logiciel de conception assistée par ordinateur afin d'automatiser certains enchaînements d'actions répétitives (voir la section Adoption).</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#two!">
                        <img class="col s12 m8 l8" src="img/fond7.jpg" alt="projet">
                        <h2>Variables, Calculs</h2>
                        <p class="white-text">Dans cette partie nous pouvons voir un exemple d'initiation de variable ainsi que different Calculs</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#three!">
                        <img class="col s12 m8 l8" src="img/fond8.jpg" alt="projet">
                        <h2>Conditions, Signes</h2>
                        <p class="white-text">Dans cette partie nous pouvons voir un exemple de Conditions ainsi que tout les différents signes</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#four!">
                        <img class="col s12 m8 l8" src="img/fond9.jpg" alt="projet">
                        <h2>Comparaison Multiples</h2>
                        <p class="white-text">Dans cette partie nous pouvons voir un exemple de comparaison multiples</p>
                      </div>
                      <div class="carousel-item grey darken-4 white-text" href="#four!">
                        <img class="col s12 m8 l8" src="img/fond10.jpg" alt="projet">
                        <h2>Boucle</h2>
                        <p class="white-text">Dans cette partie nous pouvons voir un exemple de Boucle While</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php require "caroussel.php"; ?>
              <div class="col s12 m10 l10 offset-l1">
                <h2 class="header">Projet 1 : Codage du jeu "c'est plus, C'est moins"</h2>
                <div class="col s10 m12 l12 ou">
                  <div class="card horizontal">
                    <div class="carousel carousel-slider center">
                      <a class="col s12 button btn transparent z-depth-0 carousel-slider">
                        <i class="blue-grey waves-effect waves-light material-icons left show" id="pre_ou">arrow_back</i>
                        <i class="blue-grey waves-effect waves-light material-icons right show" id="next_ou">arrow_forward</i>
                      </a>
                      <div class="carousel-item grey darken-4 white-text" href="#one!">
                        <img class="col s12 m8 l8" src="img/fond15.jpg" alt="projet">
                        <h2>Présentation Projet</h2>
                        <p class="white-text">Le but du projet est de crée un <br>
                          "C'est Plus, C'est Moins" <br>
                          en langage python. <br>
                          Vous pouvez voir ci-dessus <br>
                          les différentes consignes données.</p>
                        </div>
                        <div class="carousel-item grey darken-4 white-text" href="#two!">
                          <img class="col s12 m8 l8" src="img/fond11.jpg" alt="projet">
                          <h2>Initiation</h2>
                          <p class="white-text">Dans cette partie du projet <br>
                            nous pouvons voir l'initialisation <br>
                            de toutes les variables qui nous servirons <br>
                            dans le programme plus tard</p>
                          </div>
                          <div class="carousel-item grey darken-4 white-text" href="#three!">
                            <img class="col s12 m8 l8" src="img/fond12.jpg" alt="projet">
                            <h2>Init Joueur</h2>
                            <p class="white-text">Dans cette partie du projet <br>
                              nous pouvons voir l'initialisation joueur. <br>
                              d'abord la machine demande à l'utilisateur <br>
                              s'il veut changer de pseudo (autre que "joueur 1") <br>
                              puis s'il demande à l'utilisateur de choisir son pseudo</p>
                            </div>
                            <div class="carousel-item grey darken-4 white-text" href="#four!">
                              <img class="col s12 m8 l8" src="img/fond13.jpg" alt="projet">
                              <h2>Niveau de difficulté</h2>
                              <p class="white-text">Dans cette partie du projet <br>
                                nous pouvons voir les différents <br>
                                niveau de difficulté <br>
                                il y en a 4 (facile, moyen, difficule, extrême) <br>
                                La machine demande donc à l'utilisateur de choisir</p>
                              </div>
                              <div class="carousel-item grey darken-4 white-text" href="#five!">
                                <img class="col s12 m8 l8" src="img/fond14.jpg" alt="projet">
                                <h2>Vérification de Victoire</h2>
                                <p class="white-text">Dans cette partie du projet <br>
                                  nous pouvons voir la vérification de Victoire <br>
                                  Nous avons 7 essaies au total pour trouver <br>
                                  le bon chiffre, lorsque nous écrivons <br>
                                  un chiffre la machine nous renvoie <br>
                                  plus haut, plus bas ou gagné si le chiffre est trouvé</p>
                                </div>
                              </div>
                            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </main>

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
    </body>
  </html>
