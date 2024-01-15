<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <header class="important">
            <h1>Léo Alagheband</h1>
            <h1 class="titre">Birthday Party 20 février 2024 17h00!!!</h1>
            <h1>Thème: Halloween</h1>
        </header>
        <section>
            <header>
                <button onclick="displayExplanations()">En savoir plus</button>
                <p id="chut">Le thème choisi cette année est celui de Halloween afin de le respecter il sera demandé aux invités de venir dans un déguisement (de préference de monstre...). Merci à tous de faire cet effort pour que la soirée se passe bien. De plus il sera demandé aux invités de bien vouloir respecter les règles de courtoisie!</p>    
            </header>    
        </section>
        <a target="_blank" href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">Cliquez ici pour voir le lieu de la fête</a> 
        <form action="register.php" method="POST">
            <h2>Formulaire d'inscription</h2>
            <ul>
                <li>
                    <label for="name">Nom&nbsp;:</label>
                    <input type="text" id="name" name="name" />
                </li>
                <li>
                    <label for="nombre">Nombre&nbsp;:</label>
                    <input type="nombre" id="nombre" name="nombre" />
                </li>
            </ul>
            <button type="submit">Valider</button>
        </form>
        <?php include"count_guests.php";?>
        <script src="script.js"></script>
    </body>
</html>