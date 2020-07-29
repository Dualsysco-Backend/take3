
<?php
class form {
    public $user;
    public $pass;
   

    function set_name($user){
         $user = $_GET['username'];
         $this->user = $user;
      
    }
    
    function get_name() {
        return $this->user;
    }
    

    function set_pass($pass){
        $pass = $_GET['pass'];
        $this->pass = $pass;
    }

    function get_pass() {
        return $this->pass;
    }

}

$form = new form();
$form->set_name($_GET['username']);
$form->set_pass($_GET['pass']);

echo $form->get_name();
echo "<br>";
echo $form->get_pass();

?>