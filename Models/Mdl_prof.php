<?php 
class Prof {
    private static $db;
    private static function setBd(){
        self::$db = new PDO("mysql:host=localhost;dbname=SupremacyGhosT;","GhosT","Sambatra");
        self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    /* Evitena oe misy erreur ana connexion amle base de donne */
    public function getDb(){
        if(self::$db == null){
            self::setBd();
        }
        return self::$db;
    }

    public function get_data(){
        $data_all = [];
        $req = $this->getDb()->prepare("SELECT * FROM SupremacyGhosT.personnes");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            array_push($data_all,$data);
        }
        $req->closeCursor();
        return $data_all;
    }
    public function set_data(string $nom,string $prenom,string $email){
        $req = $this->getDb()->prepare("INSERT INTO SupremacyGhosT.personnes(nom,prenom,email) VALUE (".$nom.",".$prenom.",".$email.")");
        $req->execute();
        $req->closeCursor();
    }
    public function delete_data(int $id){
        $req = $this->getDb()->prepare("DELETE FROM SupremacyGhosT.personnes WHERE id=".$id);
        $req->execute();
        $req->closeCursor();
    }
    public function ModifierProf(int $id,string $name,string $lastname,string $email){
        /* ovay le colonne anle table */
        $req = $this->getDb()->prepare("UPDATE SupremacyGhosT.personnes SET nom='".$name."',prenom='".$lastname."',email='".$email."WHERE id=".id);
        $req->execute();
        $req->closeCursor();
    }

}