<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apropos.css">

    <title>Document</title>
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
                <li><a href="apropos.php" class="active">A propos de nous</a></li>
                <li class=><a href="Actualités.php">Actualités</a></li>

<li class="dropdown">
    <a href="#">
    <select onchange="window.location.href=this.value">
      <option value="" disabled selected>J'agis avec UEDS</option>
      <option value="fairedon.php">DONS Matériel</option>
      <option value="benevolat.php">Bénévolat</option>
      <option value="benevolat.php">DONS En nature</option>
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


<br><br>






<div class="titre"> Qui sommes nous ? </div>


    <div id="slider">
        <img src="equipe.jpg" alt="kids" id="slide" style="width: 89%; height: 2%; margin-left: 1%;">
        <div id="precedent" onclick="ChangeSlide(-1)"> &lt; </div>
       <div id="suivant" onclick="ChangeSlide(1)">&gt;</div>
    </div>




    <article class="container">
 <strong>Un Enfant,Des Sourires</strong>
 est une association à but non lucratif, enregistrée sous le numéro de visa 2011r03096apsf1.
            <br> Elle est basée à l'Ariana et fondée en avril 2011 pour aider les enfants défavorisés et/ou sans soutien familial.
            <br> Au cœur de nos actions se trouve l'enfant, avec toute son innocence, sa fragilité, ses besoins d'amour, d'affection et de tendresse, ainsi que son désir de trouver des repères dans la vie.

L'association UEDS se consacre exclusivement aux enfants qui ne sont pas nés dans des foyers aisés et dont les parents n'ont pas les moyens de leur offrir une enfance heureuse.
<br> Elle s'attaque à la pauvreté, mais aussi à l'ignorance, l'inculture et l'irresponsabilité citoyenne pour offrir un meilleur avenir à ces enfants vulnérables.

<br> Guidée par l'amour et la compassion, UEDS travaille inlassablement pour offrir un avenir meilleur à ces enfants, en leur fournissant le soutien nécessaire pour surmonter les défis qui se présentent à eux.        

       
    </div>

</article>




    <div class="container1"> 
        <div class="card">
            <img src="vision.png" alt="kids" >
            <div class="description">
                <span>Vision</span>
                <p> combattre les problèmes tels que l'enfance volée, violée ou violentée et de promouvoir l'engagement associatif en tant que gage 
                    de citoyenneté et de responsabilité patriotique.
                </p>
            </div>
        </div>
    
        <div class="card">
            <img src="mission.png" alt="kids">
            <div class="description"> 
                <span>Mission</span>
                <p> garantir que chaque enfant ait accès à l'alimentation, à l'alphabétisation, aux soins médicaux et à la culture.
                    <br>
                Notre ambition est de contribuer à la création d'une nouvelle génération de Tunisiens en bonne santé, bien formés et prêts à relever les défis du 21ème siècle.
                </p>
            </div>
        </div>
    
        <div class="card">
            <img src="Valeurs.jpg.png" alt="kids">
            <div class="description">
                <span>Valeurs</span>

                <p>   <span class="majus">U</span>nité
                    <br>
                    <span class="majus">E</span>galité
                    <br>
                    <span class="majus">D</span>ignité
                    <br>
                    <span class="majus">S</span>olidarité </p>
                </div>
            </div>
        </div>





<footer>
    <div class="footer-top">
        <h4>Ensemble nous changeons des vies</h4>
        <p> suivez nous : </p>  <a href="https://www.facebook.com/profile.php?id=100064683757417"> <img src="fb-icon.png">  </a>  
    </div>
<div class="footer-bottom">
    <span id="copyright"> Tous droits réservés © Association Un enfant,des sourires </span>
 </div>
</footer>

    <script>
        const menuTrigger = document.querySelector(".menu-trigger")
        const nav = document.querySelector(".navbarre")
 
        menuTrigger.addEventListener('click',()=>{
        nav.classList.toggle('media-menu')
        })

        const slide = ["ecole.jpg", "kids.jpg","rouge.jpg", "equipe1.jpg","chef.jpg" ];
let numero = 0;

function ChangeSlide(sens) {

    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
setInterval("ChangeSlide(1)",3000)

</script>
</body>
</html>



























