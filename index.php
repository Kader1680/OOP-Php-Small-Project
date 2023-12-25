<style>
    body{background-color: black; color: white;}
    h2{color: red; text-align: center;}
    form{text-align: center;}
    .res{    background-color: #c6c6c6;
    border: 1px solid white;
    border-radius: 5px;
    color: black;
    padding: 10px;
    width: 40%;
    margin: auto;
    }
</style>
<div  style="display: grid; text-align:center; grid-template-columns:50% 50%">
    <div>
        <h2>Sign In as Admin</h2>
        <form action="" method="post">
            <input name="name" type="text" placeholder="enter name"> <br><br>   
            <input name="password" type="password" placeholder="enter password" ><br> <br>
            <input name="submit" type="submit" placeholder="submit" >
        </form>
        
    </div>


    <div>
        <h2>Sign In as Moderator</h2>
        <form action="" method="post">
            <input name="nameMem" type="text" placeholder="enter name" ><br> <br>
            <input name="passwordMem" type="password" placeholder="enter password" ><br> <br>
            <input name="gender" type="text" placeholder="enter gender" ><br> <br>
            <input name="years" type="number" placeholder="since you join us" ><br> <br>
            <input name="submitMember" type="submit" placeholder="submit" >
        </form>
    </div>
</div>
<?php
class User{
        private $name;
        private $password;
        public function set($name){
            $this->name = $name;
        }
        public function setpass($password){
            $this->password = $password;
        }
        public function get(){
            return $this->name;
        }

        public function getpass(){
            return $this->password;
        }
        public function display(){
            echo "this is for the display";
        }
}
class Member extends User{
    private $gender;
    private $years;
    public function setGdr($gender){
        $this->gender = $gender;
    }
    public function setyrs($years){
        $this->years = $years;
    }
    public function getGdr(){
        return $this->gender;
    }

    public function getyrs(){
        return $this->years;
    }
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $user = new User();
    $user->set($name);
    $user->setpass($password);
    echo "<div class = 'res'> UserName : ".$user->get()."</div>";
    echo "<div class = 'res'> Password : ".$user->getpass()."</div>"."<br>";

}
if (isset($_POST['submitMember'])) {
    $nameMem = $_POST['nameMem'];
    $passwordMem = $_POST['passwordMem'];
    $gender = $_POST['gender'];
    $years = $_POST['years'];
    $memeber1 = new Member();
    $memeber1->set($nameMem);
    $memeber1->setpass($passwordMem);
    $memeber1->setGdr($gender);
    $memeber1->setyrs($years);
    echo "<div class = 'res'> UserName : ".$memeber1->get()."</div>";
    echo "<div class = 'res'> Password : ".$memeber1->getpass()."</div>"."<br>";
    echo "<div class = 'res'> gender : ".$memeber1->getGdr()."</div>";
    echo "<div class = 'res'> years : ".$memeber1->getyrs()."</div>"."<br>";
}
?>



