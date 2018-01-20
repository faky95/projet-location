<?php
namespace  location\dao;
 class Utilisateur
 {
var $id;
var $Numeropiece;
 var $nomComplet;
 var $Prenom;
 var $Tel;
 var $login;
 var $Password;
 var $profil;

 

 private $bdd;

 /************CONNECTION*******************/ 

 private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'xavi',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
/************ADD USER*******************/ 
 public function addUser()
 {
    $this->getConnexion();
      $sql = "INSERT INTO utilisateur VALUES(null, :nomComplet, :login, :pwd, :profil, :etat)";
      $req = $this->bdd->prepare($sql);
     $data = $req->execute(array(
                           'nomComplet'=>$this->nomComplet,
                            'login'=>$this->login,
                            'password'=>$this->pwd,
                            'profil'=>$this->profil,
                            'etat'=>'-1',

                                ));
                     return $data;
                    }

/************LIST USER*******************/ 

public function listUser()
   {
   $this->getConnexion();
   $sql = "SELECT * FROM utilisateur";
   $donnees = $this->bdd->query($sql);
   return $donnees;
   }

   /************ACTIVATE DESACTIVER USER*******************/ 

   public function activatedesactivateUser($id,$etat)
      {
   $this->getConnexion();

        if ($etat==1) {
        $sql = "UPDATE utilisateur SET etat = '1' WHERE utilisateur.id ='$id'"; 
            $donnees = $this->bdd->query($sql);
        return $donnes;

        }
        else if ($etat==0) {
        $sql = "UPDATE utilisateur SET etat = '0' WHERE utilisateur.id ='$id'"; 
            $donnees = $this->bdd->query($sql);
        return $donnees;

        }
            else {
        $sql = "UPDATE utilisateur SET etat = '-1' WHERE utilisateur.id ='$id'"; 
            $donnees = $this->bdd->query($sql);
        return $donnees;

        }
    }

/************UPDATE PASSWORD*******************/ 

     public function UpdatePassword($id,$password)
       {
   $this->getConnexion();
   $this->listUser();
        $sql = "UPDATE utilisateur SET pwd = '$pwd' WHERE utilisateur.id ='$id'"; 
            $donnees = $this->bdd->query($sql);
        return $donnees;

       
        
   }

   /************LOGON*******************/ 

    public function logON($login,$pwd)
       {
   $this->getConnexion();
   $this->listUser();
         while($reponse = $donnees->fetch()){
             if ($reponse['login']==$login && $reponse['pwd']== $pwd)  {
               return $user;
             }
             else {
                 return null;
             }

            

       
        
   }


  }
 }
?>