<?php
    require 'database.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT items.id, items.name, items.description, items.date_debut, items.date_fin, items.contexte, items.technologie,  items.competence, items.bilan, items.image, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio GABRIEL GOMEZ</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styleView.css">
    </head>
    
    <body>
        
         <h1 class="text-logo"> Description d'un Projet </h1>
        
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <form>
                      <div class="form-group">
                        <label>Nom:</label><?php echo '  '.$item['name'];?>
                      </div>
                      <div class="form-group">
                        <label>Description:</label><?php echo '  '.$item['description'];?>
                      </div>
                      <div class="form-group">
                        <label>Date début:</label><?php echo '  '.$item['date_debut'];?>
                      </div>
                      <div class="form-group">
                        <label>Date fin:</label><?php echo '  '.$item['date_fin'];?>
                      </div>
                      <div class="form-group">
                        <label>Contexte:</label><?php echo '  '.$item['contexte'];?>
                      </div>
                      <div class="form-group">
                        <label>Technologie:</label><?php echo '  '.$item['technologie'];?>
                      </div>
                      <div class="form-group">
                        <label>Competence:</label><?php echo '  '.$item['competence'];?>
                      </div>
                      <div class="form-group">
                        <label>Bilan:</label><?php echo '  '.$item['bilan'];?>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-danger" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                        <img src="<?php echo 'images/'.$item['image'];?>" alt="...">
                        
                          <div class="caption">
                            <p>Lien : </p>
                            <p>Lien : </p>
                            
                          </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>

