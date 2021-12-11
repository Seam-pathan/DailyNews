<?php

use function PHPSTORM_META\type;

if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
              $username = $_POST['username'];
		$pwd = $_POST['pwd'];
              $pwd2 = $_POST['pwd2'];
              $pwd3 = $_POST['pwd3'];

        $handle = fopen("AdminData.json", "r");
        $data = fread($handle, filesize("AdminData.json"));
        $data = explode("\n", $data);
        // echo implode("\n", $data);
        
        
        
        $isValid = false;


        for($i=0; $i < count($data) - 1; $i++)
        {
    	   $json[$i] = json_decode($data[$i]);

    	   if($username === $json[$i]->username && $pwd === $json[$i]->pwd )
            {
                   $json[$i]->pwd=$pwd2;
                   echo "matched";
            }

        }
       //  $json = implode("\n", $json);
       for($i=0; $i < count($data) - 1; $i++)
        {
            $update[$i] = json_encode($json[$i]);
        }
        
        $update = implode("\n", $update);

        $res = file_put_contents('AdminData.json', $update);
        if ($res)
        {
    	  header("Location: Login.php");
        }
        else
        {
    	  echo "Login failed...";
        }
    }

?>