                <?php 
                try {

                  $bdd= new PDO ("mysql:host=localhost;dbname=gexpert","mbodekama","usermbh.21");

                } catch (Exception $e) {

                  echo $e->getMessage();  
                }


                $requete =$bdd->prepare('SELECT * FROM produits WHERE categorie=1 LIMIT 21');
                $requete->execute();
                

                $prods =$requete->fetchAll();


                 ?>