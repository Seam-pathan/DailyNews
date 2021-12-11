<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $pwd2 = $_POST['pwd2'];
        $pwd3 = $_POST['pwd3'];

        $handle = fopen("EditorData.json", "r");
        $data = fread($handle, filesize("EditorData.json"));
        $data = explode("\n", $data);
        
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

       for($i=0; $i < count($data) - 1; $i++)
        {
            $update[$i] = json_encode($json[$i]);
        }
        
        $update = implode("\n", $update);

        $res = fwrite($handle1, $update ."\n");
        if ($res)
        {
          header("Location: ../view/ELogin.php");
        }
        else
        {
          echo "Login failed...";
        }
    }

?>