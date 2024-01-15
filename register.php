<?php
        $host = "e-srv-lamp.univ-lemans.fr";
        $user = "e2304432";
        $database = "e2304432";
        $password = "Uqv391bd";
        $connection = new mysqli($host,$user,$password,$database);
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Nom = $_POST["name"];
            $Nombre = $_POST["nombre"];
            $q = "INSERT INTO `'birthday-guests'`(Nom,Nombre) VALUES ('$Nom','$Nombre')";
            if($connection -> query($q)==TRUE){
                echo("L'invité a été ajouté");
            }
            else{
                echo($connection -> error);
            }
        }
        
        
    ?>