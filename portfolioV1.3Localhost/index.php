<!DOCTYPE html>

<html>
    
    <!--lien bootstrap, javascript, css ,type langue avec accent google, ajax; et logo et titre de portfolio sur onglet-->
    
    <head>
        
        <title>Portfolio GABRIEL GOMEZ</title>
        <link rel="icon" type="image/" href="images/logoG.PNG" />
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/Script.js"></script>
        <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
        
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="60">
    
        <!---------------barre de navigation menu du portfolio-------------->
        
        <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" rel="home" href="#home"><img alt="logo" src="images/logoG.png" class="img-circle" id="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#about">Présentation</a></li>
                            <li><a href="#experience">Compétences</a></li>
                            <li><a href="#portfolio">Projets</a></li>
                            <li><a href="#recommandations">Sites</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
        </nav>

        <!------------------------- image de fond avec logo et fleche pour acceder au contenue portfolio ---------------->
        
        <section id="home" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="images/logoG.PNG" alt="logo" class="img-circle">
            </div>

                <div class="heading">
                    <h1>GOMEZ Gabriel</h1>
                    <h3>Développeur Web fullstack junior</h3>
                    <br>
                    <p id="voir1">Voir mon portfolio</p>
                    <a href="#about">
                        <span class="glyphicon glyphicon-menu-down"></span>
                    </a> 
                </div>
            
            <script>
            $(document).ready(function(){
                
                $('#voir1').hide();
                $('.glyphicon-menu-down').mouseenter(function(){
                    $('#voir1').show();
                });
                $('.glyphicon-menu-down').mouseleave(function(){
                    $('#voir1').hide();
                });
                
            });
        </script>
             
        </section>
         
        <!------------------------- Presentation avec lien CV en PDF ------------------------>
        
        <section id="about" class="container-fluid">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Présentation</h2>
            </div>
            <p>Après l'obtention de mon BAC ES et apres avoir fait une année de DUT Gestion logistique et transport, <br>j'ai décidé de me réorienter vers l'informatique puisque je suis passionné par les nouvelles technologies.<br>C'est pourquoi j'ai choisi le BTS SIO option Solutions Logicielles Applications Métiers dans le but de devenir développeur de sites internet.<br> Suite à cette formation, je me rends compte que ce domaine me correspond et je souhaite poursuivre sur une licence.
            <br> Actuellement je suis en 2ème année de BTS SIO option SLAM au lycée Saint Vincent à Senlis (60 Oise ).    
            </p>
            <div class="heading">
                <a href="doc/CV_G.pdf" title="Voir ou telecharger mon CV" class="button1">Curriculum vitaé / <span class="glyphicon glyphicon-download"></span> 56,0 Ko</a>
            </div>        
        </section>
     
        <!-------------------- Section monter des competence ------------------>
        
         <section id="experience">
        
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Compétence</h2>
                </div>
                <ul class="timeline">
                      <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Symfony</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Octobre 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>UCAPE</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>IONIC</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Octobre 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>GSB pharmacie</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>WordPress</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small>Avril-Mai 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>GL-organisation</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>PHP et SQL</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small>Mars-Mai 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Portfolio 1.3</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Python</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small>Février-Mars 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Mastermind</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Csharp</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Septembre-Mai 2018</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Gestion theatre</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Bootstrap</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Janvier-fevrier 2018 </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Portfolio 1.2</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Jquery</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Novembre-Decembre 2017</p>
                                </div>
                                <div class="timeline-body">
                                    <p>site top 5</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Javascript</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Octobre-Novembre 2017</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Le jeu du serpent</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>HTML et CSS</h3>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> Septembre-Octobre 2017</p>
                                </div>
                                <div class="timeline-body">
                                    <p>portfolio 1.0</p>
                                </div>
                            </div>
                        </div>
                    </li>
                   
                </ul>
            </div>
            
        </section>
        
        <!--------------- Presentation des différents projet avec liens pour accéder aux pages du projet ---------->
    
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Mes Projets</h2>
                </div>
                
            <?php
				require 'database.php';
			 
                echo '<nav>
                        <ul class="nav nav-pills">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM categories');
                $categories = $statement->fetchAll();
                foreach ($categories as $category) 
                {
                    if($category['id'] == '1')
                        echo '<li role="presentation" class="active"><a href="#'. $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                    else
                        echo '<li role="presentation"><a href="#'. $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                }

                echo    '</ul>
                      </nav>';

                echo '<div class="tab-content">';

                foreach ($categories as $category) 
                {
                    if($category['id'] == '1')
                        echo '<div class="tab-pane active" id="' . $category['id'] .'">';
                    else
                        echo '<div class="tab-pane" id="' . $category['id'] .'">';
                    
                    echo '<div class="row">';
                    
                    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                    $statement->execute(array($category['id']));
                    while ($item = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/' . $item['image'] . '" alt="Screen_projet">
                                    
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        
                                        <a class="btn btn-default" href="view.php?id='.$item['id'].'" title="Voir la fiche de ce projet"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                                    </div>
                                </div>
                            </div>';
                    }
                   
                   echo    '</div>
                        </div>';
                }
                Database::disconnect();
                echo  '</div>';
            ?>
                
            </div>
        </section> 
        
        <!-------------Presentation des sites utiliser avec un carrousel -------------->
     
        <section id="recommandations">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Les sites de formation en ligne (MOOC)</h2>
                </div>
               	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>
                         <li data-target="#myCarousel" data-slide-to="3"></li>  
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="images/Logoudemy.PNG" class="img-responsive" style="margin:0px auto;"/>     
                        </div>
                         <div class="item">
                           <img src="images/logo-developez.com.png" class="img-responsive" style="margin:0px auto;" />      
                        </div>
                         <div class="item">
                           <img src="images/codeacademylogo.png" class="img-responsive" style="margin:0px auto;" />    
                        </div>
                         <div class="item">
                           <img src="images/logoOP.png" class="img-responsive" style="margin:0px auto;" />    
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                
                </div>
            </div>
        </section>
        
        <!--------------------- Formulaire contact avec php ---------------->
        
        <?php

        /*Initialisation*/

        $firstname = $name = $email = $phone = $message = "";
        $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
        $isSuccess = false;
        $emailTo = "gabriyel.gmz@gmail.com";

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
        	$firstname = verifyInput($_POST["firstname"]);
        	$name = verifyInput($_POST["name"]);
        	$email = verifyInput($_POST["email"]);
        	$phone = verifyInput($_POST["phone"]);
        	$message = verifyInput($_POST["message"]);
        	$isSuccess = true;
        	$emailText = "";

			if (empty($firstname))
        	{
            	$firstnameError = "Erreur";
            	$isSuccess = false; 
        	} 
        	else
        	{
            	$emailText .= "Firstname: $firstname\n";
        	}

        	if (empty($name))
        	{
            	$nameError = "Erreur";
            	$isSuccess = false; 
        	} 
        	else
        	{
            	$emailText .= "Name: $name\n";
        	}

        	if(!isEmail($email)) 
        	{
            	$emailError = "Erreur";
            	$isSuccess = false; 
        	} 
        	else
        	{
            	$emailText .= "Email: $email\n";
        	}

        	if (!isPhone($phone))
        	{
            	$phoneError = "Erreur";
            	$isSuccess = false; 
        	}
        	else
        	{
            	$emailText .= "Phone: $phone\n";
        	}

        	if (empty($message))
        	{
            	$messageError = "Erreur";
            	$isSuccess = false; 
        	}
        	else
        	{
            	$emailText .= "Message: $message\n";
        	}

        	if($isSuccess) 
        	{
            	$headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            	mail($emailTo, "Un message de votre site", $emailText, $headers);
            	$firstname = $name = $email = $phone = $message = "";
        	}
        }


        /*Verification telephone*/
         function isPhone($var) 
    	{
        	return preg_match("/^[0-9 ]*$/",$var);
    	}

    	/*Verification email*/
        function isEmail($var) 
    	{
        	return filter_var($var, FILTER_VALIDATE_EMAIL);
    	}

    	/*Securite*/
        function verifyInput($var) 
    	{
      		$var = trim($var);
      		$var = stripslashes($var);
      		$var = htmlspecialchars($var);
      		return $var;
    	}

        ?>


        <section id="contact">
        	<div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Contact</h2>
            </div>
                
           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom *</label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                                <p class="comments"><?php echo $firstnameError; ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom *</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name; ?>">
                                <p class="comments"><?php echo $nameError; ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email *</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email; ?>">
                                <p class="comments"><?php echo $emailError; ?></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError; ?></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"><?php echo $message; ?></textarea>
                                <p class="comments"><?php $messageError; ?></p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>    
                        </div>
                        <p class="thank-you" style="display: <?php if($isSuccess){echo 'block'; } else{echo 'none';} ?>">Votre message a bien été envoyé</p>
                    </form>
                </div>
           </div>
        </div>
        </section>          

        <!----------- bas de page avec image de fond ------------>
        
        <footer class="text-center">
            <p id="voir2">Revenir en haut de la page</p>
            <a href="#about">
                <span class="glyphicon glyphicon-menu-up"></span>
            </a>
            
            <h5>2019 PORTFOLIO 1.3</h5>
        </footer>
        
    </body>
    
</html>