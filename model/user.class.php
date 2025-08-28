<?php
class User {
  private $nom;
  private $prenom;
  private $email;
  private $ville;
  private $etat; 
  private $code;
  private $role;
  private $img;

  public function __construct($nom,$prenom,$email,$ville,$etat,$code,$role,$img)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->ville = $ville;
    $this->etat = $etat;
    $this->code = $code;
    $this->role = $role;
    $this->img = $img;
  }

  public function insert(){
    include "../includes/connect.php";
    $k=$con->prepare('INSERT INTO `user`(`nom`, `prenom`, `email`, `ville`, `etat`, `code`, `id_role`, `img`) VALUES (?, ?, ?, ?, ?,?,?,?)');
    //on Lie chaque marqueur à une valeur``
  //   $k->bindValue(':nom', $this->nom);
  //   $k->bindValue(':prenom',$this->prenom);
  //   $k->bindValue(':email', $this->email);
  //   $k->bindValue(':pswd',$this->pswd);
  //  $k->bindValue(':role',1);
   $k->execute(array(
    $this->nom,$this->prenom,$this->email,$this->ville,$this->etat,$this->code,$this->role,$this->img
   )

   );
  }
}
?>
    
}
