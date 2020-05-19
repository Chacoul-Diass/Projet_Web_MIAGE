<?php
require('./pages/header.php');
?>

<ul class="nav-droite">
    <li class="nav-link">
        <a href="inscription.php">Inscription</a>
    </li>
    <li class="nav-link">
        <a href="connexion.php">Connexion</a>
    </li>
    
</ul>
</div>
</ul>
</div>
</nav>
</header>
<main>
    <section class="site-title">
        <div class="site-background">
            <h3>L'Education</h3>
            <h1>Plus Près de vous</h1>
            <button class="btn btn_dec"><a href="#">Decouvrir</a></button>
        </div>
    </section>
    <section class="site-main">
        <br>

        <div class="main-text">
            <div class="text">
                <h1><mark>Presentation du site</mark></h1>
                <p>
                    SCOLAR est un site de E-Learning cree dans le but d'aider quiconque à la volonté d'apprendre.
                    SCOLAR vous donne l'opportunité d'etre ce que vous voulez en vous donnant des certificats. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente aspernatur,
                    dicta labore nisi consectetur et earum delectus eos blanditiis ipsa voluptatem.
                </p>
            </div>
            <div>
                <video width="500" height="auto" controls style="border-radius: 10px;" class="video">
                    <source src="videos/explore.mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </section>
    <section class="site-temoin">
        <div class="temoingnage">

            <div class="photo-temoins ">
                <img width="400px" height="300px" src="images/banner.png" alt="quelle images">

            </div>
            <div class="temoins-text">
                <h2><mark> CE QUE NOS ETUDIANTS PENSENT</mark></h2>
                <p>
                    Tres bon site d'apprentissage qui donne plus d'information que possible
                </p>
            </div>
        </div>
    </section>
</main>
<?php
require('./pages/footer.php');
?>