<!DOCTYPE html>
<html>
<head>
  <title>Lister Les elements de la base de donnée</title>
  <META charset="utf-8"/>
</head>
<style type="text/css">

  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
  tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>
<body>
  <?php
   try{
    // Inclusion du script de connexion à la base
    require('connect_db.php');
    $requete = $connect->query("SELECT * from personne");
    ?>
    <table>
    <tr>
      <td colspan="6" id="entete" style="color: black"><center><b>Listes des clients</b></center> </td>
    </tr>
    <p><tr>
      <th>NOM</th>
      <th>PRENOM</th>
      <th>ADRESSE</th>
    </tr>
    </p>

    
      <?php
      // Boucle sur le resultat de la requete pour afficher la liste
             while($resultat = $requete->fetch()){
        ?>
                <tr>
              <p> 
                  <td><?php echo $resultat['nom']; ?></td>
                  <td><?php echo $resultat['prenom'];  ?></td>
                  <td><?php echo $resultat['adresse'];  ?></td>
                 </p>
                </tr>

        <?php
             }
         ?>
      
    </table>
    <?php
   }catch(PDOException $e){
         die('Erreur!!!'.$e->getMessage());
   }
   ?>

</body>
</html>