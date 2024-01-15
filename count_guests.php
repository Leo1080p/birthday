<?php
        $host = "e-srv-lamp.univ-lemans.fr";
        $user = "e2304432";
        $database = "e2304432";
        $password = "Uqv391bd";
        $connection = new mysqli($host,$user,$password,$database);
        $a = "SELECT * FROM `'birthday-guests'` ";
        $b = "SELECT SUM(Nombre) AS total_guests FROM `'birthday-guests'` ";
        $result1 = $connection -> query($a);
        $result2 = $connection -> query($b);
        while($row = $result2 ->fetch_assoc()){
            $total_guests = intval($row["total_guests"]);
            echo("Nombre d'invite actuel : ");
            echo($total_guests);
        }
        
?>