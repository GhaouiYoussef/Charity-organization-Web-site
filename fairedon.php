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
            <img src="logo.jpg" >
        </a>
        <div class="navbarre">
        <ul class="nav">
            <li class="accueil"><a href="indexvf.php" >accueil</a></li>
            <li><a href="apropos.php">A propos de nous</a></li>
            <li class=><a href="Actualités.php">Actualités</a></li>

<li class="dropdown">
<a href="#" class="active">
<select onchange="window.location.href=this.value" >
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

<body>

<br>   <br>   
<br>   
<br>   
<br>   
<br>   

    <span class="t">Détails du don</span>
    <br>    <br>
    <br>
<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
<h3>Montant :</h3>
<input type="number" id="amount" name="amount" min="0" step="0.01" required></td>


                <h3>Méthode de paiement :</h3>
                <br>
                <input type="radio" name="paiement" id="radiop" value="paiement en ligne">

                  <div class="line"> <label for="paiement en ligne"> paiement en ligne  </label>
                </div> 
                <br>
                <div class="line">
                    <input type="radio" name="paiement" id="radiop" value="paiement hors ligne">
                    <label for="paiement hors ligne"> paiement hors ligne</label>
                </div> 
<br>

<h3>Réccurence</h3>
<br>

  <SELECT NAME="reccurence" >
                        <OPTION VALUE="une fois"> une fois
                        <OPTION VALUE="Hebdomadaire"> Hebdomadaire
                        <OPTION VALUE="Mensuel"> Mensuel
                        <OPTION VALUE="Annuel"> Annuel
                    </SELECT>
                    <br>
                    <br>

                <h3>Campagnes</h3>
                <br>
                    <input type="text" name="campagne" maxlength="30" size="50" placeholder="Pas de campagne spécifique" />

                <h3>Message</h3>
                    <TEXTAREA NAME="comment" ROWS=5 COLS=60 placeholder="Votre message personnalisé">
         
</TEXTAREA>
<div class="line">
                <h3>     <br>
                    Un don anonyme?</h3>
                <br>    
                    <label for="anonyme">
                        <input type="Checkbox" name="anonyme" id="Checkbox" value="anonyme">

                        <strong> Cochez cette case pour masquer les informations personnelles</strong> </label>
                      
                    </div>
                    
                    <div id="htmlCode" >
    <div class="t"  >Information du donateur :</div>
                        <label for="name"><h3>Nom :</h3></label>
                        <input type="text" id="name" name="name" >


                        <label for="prenom"><h3>Prénom :</h3></label>
                        <input type="text" name="prenom" id="prenom"  >

                        <label for="email"><h3>E-mail :</h3></label>
                        <input type="email" name="email"  id="email" required >

                        <label for="Adresse"><h3>Adresse :</h3></label>
                        <input type="text" name="Adresse" id="Adresse" >
                        <label for="name"><h3>Code postal :</h3></label>
                        <input type="number" name="code" id="code" min="1000" max="9999" >
                        </div>
                        <button type="submit" onclick="afficherMessage()">Envoyer votre don</button>
                    </form>

</form>
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $amount= $_POST['amount'];
        $paiement= $_POST['paiement'];
        $reccurence=$_POST['reccurence'];
        $campagn= $_POST['campagne'];
        $comment=$_POST['comment'];
        //partie donateur
        $name=$_POST['name'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['Adresse'];
        $code=$_POST['code'];
        $mail=$_POST['email'];
        


       
        if (empty($amount)) {
          echo "amount is empty";
        } else {
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "client_asso";
      
          // creating a connection
          $con = mysqli_connect($host, $username, $password, $dbname);
          if (!empty($name) || !empty($prenom) || !empty($adresse) || !empty($code) || !empty($mail))
          {
            $sql2 = "INSERT INTO donations (amount, paiement, recurrence, campagne, comment,Nom, Prenom, Adresse, Code_pos, email) VALUES ( '$amount', '$paiement','$reccurence','$campagn','$comment','$name', '$prenom','$adresse','$code','$mail')";
            $rs2 = mysqli_query($con, $sql2);
          }
          else{
            $sql = "INSERT INTO donations (amount, paiement, recurrence, campagne, comment) VALUES ( '$amount', '$paiement','$reccurence','$campagn','$comment')";
            $rs = mysqli_query($con, $sql);
          }
          }
          // close connection
          mysqli_close($con);
      
        
        }
      
      ?>



                    <script>
                        const menuTrigger = document.querySelector(".menu-trigger")
                        const nav = document.querySelector(".navbarre")
                
                        menuTrigger.addEventListener('click',()=>{
                        nav.classList.toggle('media-menu')
                        })

    var radioButton = document.getElementById('radiop');
    radioButton.addEventListener('click', function() {
        window.open('paiementenligne.php', '_blank');});
    </script>

<script>
// Get the checkbox element
var checkbox = document.getElementById('Checkbox');

// Get the HTML code element
var htmlCode = document.getElementById('htmlCode');

// Add an event listener to the checkbox
checkbox.addEventListener('change', function() {
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