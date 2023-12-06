<?php 
include 'connect.php';
$sql = "SELECT * FROM matieres";

$result = $conn->query($sql);
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gerer Les Matieres </title>

        <!-- CSS -->
        <style>


header{
    font-size: 45px;
    font-weight: 800;
    color: #282828;
    text-align: center;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}

        </style>
                
    </head>
    <body>
      
               
        <header>Read Matière</header>
        <table >
            <thead>
                <tr>
                    <th>Code Matière</th>
                    <th>Nom Matière</th>
                    <th>Coef Matière</th>
                    <th>Département</th>
                    <th>Semestre</th>
                    <th>Option</th>
                    <th>Nb Heure CI</th>
                    <th>Nb Heure TP</th>
                    <th>TypeLabo</th>
                    <th>Bonus</th>
                    <th>Catègories</th>
                    <th>SousCatégories</th>
                    <th>DateDeb</th>
                    <th>DateFin</th>
                   <!-- <th>Action</th>-->
                </tr>
            </thead>
            <tbody> 

<?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

?>

            <tr>

            <td><?php echo $row['Code_Matiere']; ?></td>

            <td><?php echo $row['Nom_Matiere']; ?></td>

            <td><?php echo $row['Coef_Matiere']; ?></td>

            <td><?php echo $row['Departement']; ?></td>

            <td><?php echo $row['Semestre']; ?></td>

            <td><?php echo $row['Options']; ?></td>
            
            <td><?php echo $row['Nb_Heure_CI']; ?></td>

            <td><?php echo $row['Nb_Heure_TP']; ?></td>

            <td><?php echo $row['TypeLabo']; ?></td>

            <td><?php echo $row['Bonus']; ?></td>

            <td><?php echo $row['Categories']; ?></td>

            <td><?php echo $row['SousCategories']; ?></td>

            <td><?php echo $row['DateDeb']; ?></td>

            <td><?php echo $row['DateFin']; ?></td>

  

            <td>
            <a href="UpdateMatier.php?id=<?php echo $row['PK_Matieres']; ?>" class="button">Update</a>
            <a href="DeleteMatier.php?id=<?php echo $row['PK_Matieres']; ?>" class="button">Delete</a>
            </tr>                       
       
<?php       }

    }

?>                

</tbody>

</table>

    </body>
</html>