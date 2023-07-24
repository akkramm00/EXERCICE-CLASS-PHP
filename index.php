<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
// Dans cet exercice pratique, nous allons définir deux classes, Un eclasse Homme et une classe femme.
// Ces deux classes vont hériter de la classe Personne. Ces classes devront posséder les attributs Prenom et Age.
// De plus , ces deux classes devront implémenter la methode "sePresenter" qui donnera cves résultats :
// Je suis un Homme de $age anset je m'appele $prenom.
// Je suis une femme age de $age et je m'appelle $prenom.

// QUESTION : Dans un premier temps , on vba définir la class Personne.
class Personne {
  private string $age ;
  private string $Prenom ;

  public function getAge(){
    return $this-> age;
  }
  public function getPrenom() {
  return $this-> prenom ;
  }
  public function setAge() {
    $this -> age =$age ;
  }
  public function setPrenom() {
    $this -> prenom = $prenom ;
  }

  public function __construct (string $prenom, int $age) {
    $this -> setAge($age) ;
    $this -> setPrenom($prenom) ;
      }
}
?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>