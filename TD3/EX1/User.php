<?php
class User {
private $login;
private $password;
function __construct($login , $password) {
$this->login=$login;
$this->password = $password;
}
public function __get($attr) {
if (!isset($this->$attr)) return "erreur";
else return ($this->$attr);}
public function __set($attr,$value) {
$this->$attr = $value; }
public function __isset($attr) {
return isset($this->$attr ); }
public function __toString() {
$s="vous etre connecter avec : ".$this->login." ";
return $s;
}
public function connect(){
    if($this->login == "admin" && $this->password == "admin")
    return true;
    return false;
}
}
?>