<?php
//create a class name hash, that hash class inharitaed by different hashing algorithon ,create object to person by person and enter username and password;

class Hash{
    protected $username;
    protected $password;
    public function __construct($username , $password)
    {
        $this -> username = $username;
        $this -> password = $password;
    }
}

class Hashmd5 extends Hash{
    public function HashValue(){
        echo PHP_EOL;
        echo "md5 hash : ".PHP_EOL;
        echo "username : ".md5($this->username).PHP_EOL;
        echo "password : ".md5($this->password);
    }
}

class HashSha1 extends Hash{
    public function HashValue(){
        echo PHP_EOL;
        echo "sha1 hash : ".PHP_EOL;
        echo "username : ". sha1($this->username).PHP_EOL;
        echo "password : ".sha1($this->password).PHP_EOL;
    }
}
class HashSha256 extends Hash{
    public function HashValue(){
        echo PHP_EOL;
        
        $sha256Hash = hash('sha256','username');
        echo $sha256Hash.PHP_EOL;

        if($sha256Hash == hash('sha256','username')){

            echo "valid";
        }
        else{
            echo "unvalid";
        }
    }
}
// $user1 = new Hashmd5("shuvo","shucofudf");
// $user1 -> HashValue();

// $user2 = new HashSha1("raisul islam",'raisul ismal djflksjflsjflsjdl');
// $user2 -> HashValue();

$user3 = new HashSha256("rahim","34jdlfjlsfjljf");
$user3 -> HashValue();



