<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="assets/hc.png" />
    <link href='https://css.gg/profile.css' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <title>Henri Chauvac</title>
</head>
<body>
   <!-- Navigation Bar -->
    <header>
        <nav id="nav">
           <div class="menu">
                <ul class="snip1241">
                    <li><a href="#home">menu</a></li>
                    <li><a href="#about">à propos</a></li>
                    <li><a href="#skills">compétences</a></li>
                    <li><a href="#projects">projets</a></li>
                    <li><a href="#recommendations">recommendations pro</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Main Page Secton -->
    
    <main>
       <!-- Full Screen Main Section -->
       
        <section id="home">
            <div class="text-home">
                <h1 class="wow animated fadeInRight">Je suis Henri Chauvac.</h1>
                <div class="wow padding animated fadeIn">
                    <p class="indic animated" >  1ère année d'informatique à Campus Academy.</p>
                    <a href="#" class="arrow-down"></a>
                </div>
            </div>
        </section>
        
        <!-- About Me Section -->
        
        <section id="about">
            <div class="text-about">
                <h1 class="wow animated fadeInUp">A Propos</h1>
                <p class="wow animated fadeInUp">Anciennement passé par EPITECH Rennes où j'y ai passé un an, je suis actuellement en Bachelor informatique à Campus Academy. 
                    J'ai acquis dans le cadre de mes études une bonne maîtrise du C, de solides compétences en HTML/CSS ainsi qu'en SQL et suis aussi très à l'aise avec la gestion des systèmes d'information ce qui me rend assez autonome. 
                    Passionné comme beaucoup par l'informatique, je suis rigoureux et déterminé à apprendre pour atteindre un haut niveau de compétences.</p>
                <a href="assets/CHAUVAC_Henri_CV.pdf" download class="wow button animated fadeIn">Mon CV</a>
                </div>
        </section>
        
        <!-- Skills Section -->
        
        <section id="skills">
            <div class="text-skills">
                <h1 class="wow animated fadeInUp">Compétences</h1>
                    <div class="wow grid animated fadeInUp">  
                        <div>
                            <h3>Techno</h3>
                            <img src="assets/linux.png" alt=""><p>GNU/Linux</p>
                            <br><br>
                            <img src="assets/git.png" alt=""><p>Git</p>
                            <br><br>
                            <img src="assets/sql.png" alt=""><p>SQL</p>
                            <br><br>
                            <img src="assets/wireshark.png" alt=""><p>Wireshark</p>
                        </div>
                        <div>
                           <h3>Langages</h3>
                            <img src="assets/html.png" alt=""><p>HTML/CSS</p>
                            <br><br>
                            <img src="assets/js.png" alt=""><p>Javascript</p>
                            <br><br>
                            <img src="assets/c.png" alt=""><p>C</p>
                            <br><br>
                            <img src="assets/python.png" alt=""><p>Python</p>
                        </div> 
                        <div>
                            <h3>Outils</h3>
                            <img src="assets/vscode.png" alt=""><p>Visual Studio</p>
                            <br><br>
                            <img src="assets/github.png" alt=""><p>Github</p>
                            <br><br>
                            <img src="assets/balsamiq.png" alt=""><p>Balsamiq</p>
                            <br><br>
                            <img src="assets/trello.png" alt=""><p>Trello</p>
                        </div>
                        <div>
                            <h3>Langues</h3>
                            <img src="assets/anglais.png" alt="" class="responsive"><p>Anglais</p>
                        </div>
                    </div>
            </div>
        </section>
        
        <!-- Projects Section -->
        
        <section id="projects">
            <div class="text-projects">
                <h1 class="wow animated fadeInUp">Projets</h1>
                <h3 class="wow animated fadeInUp">Projets Principaux</h3>
                <div class="wow animated fadeInUp">
                    <a href="javascript:void(0)"><img src="assets/p1.jpeg" alt=""></a>
                    <a href="javascript:void(0)"><img src="assets/p2.jpeg" alt=""></a>
                </div>
                <br><br><br>
                <a href="javascript:void(0)" class="wow button animated fadeIn">Voir Plus</a>
            </div>
        </section>

        <!-- Recommendations Section -->

        <section id="recommendations">
            <div class="text-recommendations">
                <h1 class="wow animated fadeInUp">Recommandation Pro.</h1>
                <p class="wow animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur culpa sint, sed a necessitatibus aliquid officia id recusandae sapiente, nostrum, eum cum? Voluptatum asperiores debitis dolores deserunt quam quisquam animi tenetur quibusdam minima eligendi, reprehenderit iste similique at assumenda porro doloremque atque accusamus quas libero.</p>
                <h4 class="wow animated fadeInUp">Prenom NOM, Enterprise</h4>
                <p class="wow animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur culpa sint, sed a necessitatibus aliquid officia id recusandae sapiente, nostrum, eum cum? Voluptatum asperiores debitis dolores deserunt quam quisquam animi tenetur quibusdam minima eligendi, reprehenderit iste similique at assumenda porro doloremque atque accusamus quas libero.</p>
                <h4 class="wow animated fadeInUp">Prenom NOM, Enterprise</h4>
            </div>
        </section>

        
        
        <!-- Contact Section -->
        
        <section id="contact">
            <div class="text-contact">
               <h1 class="wow animated fadeInUp">Me Contacter</h1>
                <form action="" method="post" id="form" class="wow animated fadeInUp">
                    <input class="input-text" type="text" name="prenom" placeholder="Prenom"><br>
                    <input class="input-text" type="text" name="nom" placeholder="Nom"><br>
                    <input class="input-text" type="email" name="email" placeholder="Email"><br><br>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
                    <div class="rgpd"><input type="checkbox">Accepte que mes données soient utilisées à des fins non commerciales</div>
                    <input class="submit-button" type="submit" name="envoi" value="Envoyer"></div>
                </form>
                <?php
                $host = "localhost";
                $user = "invite";
                $password = "invite_Password35";
                $db_name = "portfolio_contest";
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $mysqli = new mysqli($host, $user, $password, $db_name);
                if ($mysqli->connect_error) {
                    die("Connection failed: ".$mysqli->connect_error);
                }
                $mysqli->set_charset('utf8');
                $requete = "INSERT INTO formulaire (prenom, nom, email, message) VALUES('$prenom', '$nom', '$email', '$message')";
                if ($mysqli->query($requete) == TRUE) {
                    echo ' ';
                } else {    
                    echo "Error: ".$requete."<br>".$mysqli->error;
                }
$mysqli->close();
?>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    
    <footer>
        <a href="https://github.com/4wge"><img src="assets/githug.svg" alt=""><p>Github</p></a>
        <a href="https://fr.linkedin.com/in/henri-chauvac-809b54183"><img src="assets/linkedin.png" alt=""><p>Linkedin</p></a><br><br>
        <p>Copyright © 2020 Henri Chauvac - <a href="mentionslégales.html">Mentions légales</a></p>
    </footer>
</body>
</html>