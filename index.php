<?php

if(isset($_POST["valider"])){
    $email = $_POST["email"];
    if($file = fopen("test.txt", "a")){
        fwrite($file,$email);
        fclose($file);
    }else{
        echo "BUGGED";
    }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester si votre email a était piraté</title>
</head>
<body>
    <h1>Tester si votre email a était piraté</h1>
    <table>
        <form action="" method="post">
        <tr><th>email</th><td><input type="text" name="email" id="email" value="" required/></td></tr>
        <tr><td><input type="submit" name="valide" id="valide" value="Tester" /></td></tr>
        </form>
    </table>    
    
</body>
</html>
