<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fairedon.css">
</head>
<header class="header-area">
    <nav class="main-nav">
        <a href="indexvf.php" class="logo">
            <img src="logo.jpg">
        </a>
        <div class="navbarre">
            <ul class="nav">
                <li class="accueil"><a href="indexvf.php">accueil</a></li>
                <li><a href="apropos.php">A propos de nous</a></li>
                <li class=><a href="Actualités.php">Actualités</a></li>

                <li class="dropdown">
                    <a href="#" class="active">
                        <select onchange="window.location.href=this.value">
                            <option value="" disabled selected>J'agis avec UEDS</option>
                            <option value="fairedon.php">DONS matériel</option>
                            <option value="benevolat.php">Bénévolat</option>
                            <option value="don.php">DONS En nature</option>
                        </select>
                    </a>
                </li>
                <li class=><a href="contact.php">Contact </a></li>
            </ul>
        </div>
        <img src="menu.png" class='menu-trigger'>
        </a>
    </nav>
    </div>
</header>

<body>

    <br>   <br>
    <br>
    <br>
    <br>
    <br>

    <span class="t">Don en nature</span>
    <br>    <br>
    <br>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h3>Nom de l'Article:</h3>
        <input type="text" id="nomA" name="nomA" placeholder="Exemple(pantalon,livres,jouets...)" required></td>

        <h3>Nombre d'Articles:</h3>
        <input type="number" id="nombre" name="nombre" min="1" placeholder="1" required></td>

        <h3>Catégorie</h3>
        <br>

        <SELECT NAME="categorie">

            <OPTION VALUE="Vestimentaire"> Vestimentaire </OPTION>
            <OPTION VALUE="Alimentaire"> Alimentaire </OPTION>
            <OPTION VALUE="Meubles"> Meubles</OPTION>
            <OPTION VALUE="Linge maison"> Linge maison </OPTION>
            <OPTION VALUE="Scolarité"> Scolarité </OPTION>
            <OPTION VALUE="Jouets"> Jouets </OPTION>
            <OPTION VALUE="Médicaments"> Médicaments </OPTION>
        </SELECT> 
        <br>
        <br>


        <h3>Souhaitez-Vous :</h3>
        <br>
        <input type="radio" name="livraison" id="radioLivraison" value="Livrez-vous même">
        <div class="line">
            <label for="radioLivraison">Livrez-vous même</label>
        </div>
        <br>
        <div class="line">
            <input type="radio" name="livraison" id="radioRecuperation" value="On les récupéres">
            <label for="radioRecuperation">On les récupéres</label>
        </div>

        <div id="champSupplementaire" style="display: none;">
            <label for="champ">Veuillez entrer votre adresse :</label>
            <input type="text" name="champ" id="champ">
        </div>

        <script>
            var radioLivraison = document.getElementById("radioLivraison");
            var radioRecuperation = document.getElementById("radioRecuperation");
            var champSupplementaire = document.getElementById("champSupplementaire");

            radioLivraison.addEventListener("change", function () {
                champSupplementaire.style.display = "none";
            });

            radioRecuperation.addEventListener("change", function () {
                if (radioRecuperation.checked) {
                    champSupplementaire.style.display = "block";
                } else {
                    champSupplementaire.style.display = "none";
                }
            });
        </script>



        <h3>Message</h3>
        <TEXTAREA NAME="comment" ROWS=5 COLS=60 placeholder="Votre message personnalisé">
         
        </TEXTAREA>
        <div class="line">
            <h3>
                <br>
                Un don anonyme?
            </h3>
            <br>
            <label for="anonyme">
                <input type="Checkbox" name="anonyme" id="Checkbox" value="anonyme">

                <strong> Cochez cette case pour masquer les informations personnelles</strong>
            </label>
            
            </div>

        <div id="htmlCode">
            <div class="t">Information du donateur :</div>
            <label for="name"><h3>Nom :</h3></label>
            <input type="text" id="name" name="name">


            <label for="prenom"><h3>Prénom :</h3></label>
            <input type="text" name="prenom" id="prenom">

            <label for="email"><h3>E-mail :</h3></label>
            <input type="email" name="email" id="email">
            <label for="tel"><h3>Téléphone :</h3></label>
            <input type="text" id="tel" name="tel">

            <label for="Adresse"><h3>Adresse :</h3></label>
            <input type="text" name="Adresse" id="Adresse">
            <label for="name"><h3>Code postal :</h3></label>
            <input type="number" name="code" id="code" min="1000" max="9999">
        </div>
        <button type="submit" onclick="afficherMessage()">Envoyer votre don</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nomA= $_POST['nomA'];
    $nbr= $_POST['nombre'];
    $categorie=$_POST['categorie'];
    $Adresseliv= $_POST['champ'];
    $comment=$_POST['comment'];
    //partie donateur
    $name=$_POST['name'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['Adresse'];

    $tel=$_POST['tel'];
    $code=$_POST['code'];
    $mail=$_POST['email'];

    
    if (empty($Adresseliv)) {
        $Adresseliv="Pas de livraison";
  }

    if (empty($nomA)) {
    echo "nomA is empty";
    } else {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "client_asso";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);
    if (!empty($name) || !empty($prenom) || !empty($adresse) || !empty($code) || !empty($mail))
    {
    $sql2 = "INSERT INTO don2 (nomA, nombre, categorie, Adresseliv, comment,Nom, Prenom,Tel, Adresse, Code_pos, email) VALUES ( '$nomA', '$nbr','$categorie','$Adresseliv','$comment','$name', '$prenom','$adresse','$tel','$code','$mail')";
    $rs2 = mysqli_query($con, $sql2);
    }
    else{
    $sql = "INSERT INTO don2 (nomA, nombre, categorie, Adresseliv, comment) VALUES ( '$nomA', '$nbr','$categorie','$Adresseliv','$comment')";
    $rs = mysqli_query($con, $sql);
    }
    }
    // close connection
    mysqli_close($con);


    }

    ?>



    <script>
        // Get the checkbox element
        var checkbox = document.getElementById('Checkbox');

        // Get the HTML code element
        var htmlCode = document.getElementById('htmlCode');

        // Add an event listener to the checkbox
        checkbox.addEventListener('change', function () {
            // Check if the checkbox is checked
            if (checkbox.checked) {
                // Show the HTML code
                htmlCode.style.display = 'none';//'block';
            } else {
                // Hide the HTML code
                htmlCode.style.display = 'block';//'none';
            }
        });


    </script>
    <footer>
        <div class="footer-top">
            <h4>Ensemble nous changeons des vies</h4>
            <p> suivez nous : </p>  <a href="https://www.facebook.com/profile.php?id=100064683757417"> <img src="fb-icon.png">  </a>
        </div>
        <div class="footer-bottom">
            <span id="copyright"> Tous droits réservés © Association Un enfant,des sourires </span>
        </div>
    </footer>
</body>
</html>