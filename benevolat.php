<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="benevolat.css">
</head>
<body>
    <header class="header-area">
        <nav class="main-nav">
            <a href="indexvf.php" class="logo">
                <img src="logo.jpg" >
            </a>
            <div class="navbarre">
            <ul class="nav">
                <li class="accueil"><a href="indexvf.php" >accueil</a></li>
                <li><a href="apropos.php">A propos de nous</a></li>
                <li class=><a href="Actualités.php">Actualités</a></li>

<li class="dropdown">
    <a href="#" class="active">
    <select onchange="window.location.href=this.value">
      <option value="" disabled selected>J'agis avec UEDS</option>
      <option value="fairedon.php">DONS matériel</option>
      <option value="benevolat.php">Bénévolat</option>
      <option value="don.php">DONS En nature</option>
    </select></a>
  </li>
                <li class=><a href="contact.php">Contact </a></li> 
            </ul>  
        </div>      
            <img src="menu.png" class='menu-trigger'>
            </a>
        </nav>
</div>
</header>

    <main>

<br><br>
<br>
<br>


<em><h2> Prend de l'envol, Koun Bénévole</h2></em>
                <div class="t">Information du Bénévole :</div>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

                    <label for="name"><h3>Nom : </h3></label>
                    <input type="text" name="name" required>

                    <label for="prenom"><h3>Prénom :</h3></label>
                    <input type="text" name="prenom" required>

                    <label for="daten"><strong> Date de naissance:</strong></label>

<input type="date" id="daten" name="daten">

                    <label for="email"><h3>E-mail :</h3></label>
                    <input type="email" name="email" required>
                    <label for="name"><h3>Téléphone :</h3></label>
                    <input type="text" name="tel" required>

                    <label for="Adresse"><h3>Adresse :</h3></label>
                    <input type="text" name="Adresse" required>
                    <label for="name"><h3>Code postal :</h3></label>
                    <input type="number" name="code" min="1000" max="9999" required>
                

                    <h3>Dans quel volet voulez-vous vous engager comme bénévole</h3>
  <SELECT NAME="REQ">
<option value="rien"  disabled selected> Choisissez un volet </option>
                        <OPTION VALUE="Conseil d'administration"> Conseil d'administration
                        <OPTION VALUE="Organisation ou soutien des activités"> Organisation ou soutien des activités
                        <OPTION VALUE="Bénévolat occassionnel"> Bénévolat occassionnel
                    </SELECT>






                            <h3>Avez-vous une experience associative ?</h3>
                            <br>
                           <input type="radio" name="paiement" id="radiop" value="Oui">
            
                              <div class="line"> <label for="Oui"> Oui  </label>
                            </div> 
                            <br>
                            <div class="line">
                                <input type="radio" name="paiement" id="radiop" value="Non">
                                <label for="Non"> Non</label>
                            </div> 
                            <br>



                            <div class="line">
                                <h3>     <br>
                                    Comment avez-vous entendu parler de UEDS ?</h3>
                                <br>    
                                <input type="Checkbox" name="anonyme" id="Checkbox"value="Réseaux sociaux">
                                    <label for="fb">Réseaux sociaux </label>
                                        <br>  
                                        <input type="Checkbox" name="anonyme" id="Checkbox"value="Activités de UEDS">  
                                        <label for="ac">Activités de UEDS</label>
                                        <br> 
                                        <input type="Checkbox" name="anonyme" id="Checkbox"value="Bouche à oreille">   
                                        <label for="b">Bouche à oreille</label>
                                        <br> 
                                        <input type="Checkbox" name="anonyme" id="Checkbox"value="Kiosque d'informations">   
                                        <label for="K">Kiosque d'informations </label>
                                      
                                    </div>





                                    <br>
                                    <br>

                    <h3>Avez-vous des questions ou des commentaires?</h3>
                    <br>

                    <td colspan="2">
                        <TEXTAREA NAME="comment" ROWS=5 COLS=60 placeholder="Votre message personnalisé">
                        </TEXTAREA>
                        <br> 
                        <br> 

                <button type="submit">Envoyer votre condidature</button>
                </form>

 <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['name'];
        $prenom = $_POST['prenom'];
        $date=$_POST['daten'];
        $email = $_POST['email'];
        $tel=$_POST['tel'];
        $adresse=$_POST['Adresse'];
        $code=$_POST['code'];
        $volet=$_POST['REQ'];
        $experience=$_POST['paiement'];
        $parler=$_POST['anonyme'];
        $comment=$_POST['comment'];


       
        if (empty($name)) {
          echo "Name is empty";
        } else {
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "client_asso";
      
          // creating a connection
          $con = mysqli_connect($host, $username, $password, $dbname);
          $sql = "INSERT INTO benevolat (name,prenom,daten,email,tel,Adresse,Code,volet,experience,EntenduParler,commentaire) VALUES ( '$name', '$prenom','$date','$email','$tel','$adresse','$code','$volet','$experience','$parler','$comment')";
          $rs = mysqli_query($con, $sql);
          if(($rs)&& !empty($name)&& !empty($prenom)&& !empty($mail) && !empty($adresse) && !empty($tel) && !empty(code))
          {
              echo "Entries added!";
             
          }
        
          // close connection
          mysqli_close($con);
      
        
        }
      }
      ?>
    </main>

    <script>
        const menuTrigger = document.querySelector(".menu-trigger")
        const nav = document.querySelector(".navbarre")
 
        menuTrigger.addEventListener('click',()=>{
        nav.classList.toggle('media-menu')
        })
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