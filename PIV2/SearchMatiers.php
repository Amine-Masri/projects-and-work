<?php 
include 'connect.php';

    $searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
    $searchCriteria = isset($_POST['criteria']) ? $_POST['criteria'] : 'column_name';
    if (!empty($searchTerm)) {
        $sql = "SELECT * FROM matieres WHERE $searchCriteria LIKE '%$searchTerm%'";
        $result = $conn->query($sql);

    }

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
           *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}




header{
    font-size: 45px;
    font-weight: 800;
    color: #282828;
    text-align: center;
}
form{
    margin-top: 30px;
}

form label {
    font-family:  monospace, sans-serif;
    font-weight: bold;
  display: block;
  font-size: 15px;
  margin-bottom: 7px;
}
form input {
font-family:  monospace, sans-serif;
  height: 45px;
  padding: 10px;
  width: 30%;
  font-size: 15px;
  outline: none;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #bfbfbf;
}
.column {
  display: flex;
  column-gap: 15px;
}

button{
    width: 20%;
      padding: 10px 0;
      margin: 10px auto 5px;
      border-radius: 5px; 
      border: none;
      font-size: 14px;
      font-weight: 600;
    color: #fff;
    background-color:#240090;
    transition: all 0.3s ease;
    cursor: pointer;
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
        <section class="container">
            <div class="form">
               
                    <header>Search Matière</header>
                    <form method="post">

                    Search <input type="text" name="search"><br>
                    
Column: <select name="criteria">
	<option value="Code_Matiere">Code Matière</option>
	<option value="Nom_Matiere">Nom Matière</option>
	<option value="Coef_Matiere">Coef Matière</option>
    <option value="Departement">Departement</option>
	<option value="Semestre">Semestre</option>
	<option value="Options">Options</option>
    <option value="Nb_Heure_CI">Nb_Heure_CI</option>
	<option value="Nb_Heure_TP">Nb_Heure_TP</option>
	<option value="TypeLabo">TypeLabo</option>
    <option value="Bonus">Bonus</option>
	<option value="Categories">Categories</option>
	<option value="SousCategories">SousCategories</option>
    <option value="DateDeb">DateDeb</option>
	<option value="DateFin">DateFin</option>
	
	</select><br>
<button type="submit" name="submit">Submit</button>

                    </form>
                  
                             
       
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
    else {
        echo "0 records";
    }
    

?>                

</tbody>
            <tbody> 
    </body>
</html>


