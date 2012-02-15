<?php
class User {
    
    private $id;
    private $login;
    private $password;
    private $level;
    
    function __construct($id=null,$login=null,$password=null,$level=null) {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->level = $level;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }


}
?>
