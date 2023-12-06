<?php 
include 'connect.php';

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `matieres` WHERE `PK_Matieres`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

           
             $CM=$row['Code_Matiere']; 

             $NM=$row['Nom_Matiere']; 

             $Cf=$row['Coef_Matiere']; 

             $Dpt=$row['Departement']; 

             $Smtr=$row['Semestre']; 

             $Opt=$row['Options']; 
            
             $NBHCI =$row['Nb_Heure_CI']; 

             $NBHTP=$row['Nb_Heure_TP']; 

             $TpL=$row['TypeLabo']; 

             $B=$row['Bonus']; 

             $Cg=$row['Categories']; 

             $SCg=$row['SousCategories']; 

             $DB=$row['DateDeb']; 

             $DF=$row['DateFin']; 

        } 
    }
}
if(isset($_POST['submit']))
{
    $CodeM=$_POST['CodeM'];
    $NomM=$_POST['NomM'];
    $CoefM=$_POST['CoefM'];
    $Dept=$_POST['Dept'];
    $Smstre=$_POST['Smstre'];
    $Optn=$_POST['Optn'];
    $NbrHrCI=$_POST['NbrHrCI'];
    $NbrHrTP=$_POST['NbrHrTP'];
    $TL=$_POST['TL'];
    $Bonus=$_POST['Bonus'];
    $Categ=$_POST['Categ'];
    $SousCateg=$_POST['SousCateg'];
    $DateDeb=$_POST['DateDeb'];
    $DateFin=$_POST['DateFin'];
 
    if($DateFin < $DateDeb){
        echo "La date de fin est inférieur à la date de début! ";
       
    }

    else{
        $sql = "UPDATE `matieres` SET 
                `Code_Matiere`='$CodeM',
                `Nom_Matiere`='$NomM',
                `Coef_Matiere`='$CoefM',
                `Departement`='$Dept',
                `Semestre`='$Smstre',
                `Options`='$Optn',
                `Nb_Heure_CI`='$NbrHrCI',
                `Nb_Heure_TP`='$NbrHrTP',
                `TypeLabo`='$TL',
                `Bonus`='$Bonus',
                `Categories`='$Categ',
                `SousCategories`='$SousCateg',
                `DateDeb`='$DateDeb',
                `DateFin`='$DateFin'
                WHERE `PK_Matieres`='$id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
}

    ?>

    

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerer Les Matieres </title>

        <!-- CSS -->
        <style>
           *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background-color:black;   
}
.container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:black;
    column-gap: 30px;
}
.form{
    position: absolute;
    max-width:40%;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: #FFF;
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
  width: 100%;
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

#create button:hover{
    background-color: #00cc00;
}

#read button:hover{
    background-color: #016dcb;
}

#update button:hover{
    background-color: #016dcb;
}

#delete button:hover{
    background-color: red;
}


        </style>
                
    </head>
    <body>
        <section class="container">
            <div class="form">
               
                    <header>Update Matière</header>
                    <form method="post">

                    <div class="column">
                        <div>
                            <label for="CodeM">Code Matière:</label>
                            <input type="text" id="CodeM" name="CodeM" maxlength="10" required value="<?php echo $CM; ?>">
                        </div>
                        <div>
                            <label for="NomM">Nom Matière:</label>
                            <input type="text" id="NomM" name="NomM" maxlength="50" value="<?php echo $NM; ?>">
                        </div>
                        <div>
                            <label for="CoefM">Coef Matière:</label>
                            <input type="number" id="CoefM" name="CoefM" value="<?php echo $Cf; ?>">
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <label for="Dept">Département:</label>
                            <input type="text" id="Dept" name="Dept" maxlength="55" value="<?php echo $Dpt; ?>">
                        </div>
                        <div>
                            <label for="Smstre">Semestre:</label>
                            <input type="text" id="Smstre" name="Smstre" maxlength="12" value="<?php echo $Smtr; ?>">
                        </div>
                        <div>
                            <label for="Optn">Option:</label>
                            <input type="text" id="Optn" name="Optn" maxlength="55" value="<?php echo $Opt; ?>">
                        </div>

                    </div>
                    <div class="column">
                        <div>
                            <label for="NbrHrCI">Nb Heure CI:</label>
                            <input type="number" id="NbrHrCI" name="NbrHrCI" value="<?php echo $NBHCI; ?>">
                        </div>
                        <div>
                            <label for="NbrHrTP">Nb Heure TP:</label>
                            <input type="number" id="NbrHrTP" name="NbrHrTP" value="<?php echo $NBHTP; ?>">
                        </div>
                        <div>
                            <label for="TL">TypeLabo:</label>
                            <input type="text" id="TL" name="TL" maxlength="13" value="<?php echo $TpL; ?>">
                        </div>
                    </div>
                    
                    <div class="column">
                        <div>
                            <label for="Bonus">Bonus:</label>
                            <input type="number" id="Bonus" name="Bonus" value="<?php echo $B; ?>">
                        </div>
                        <div>
                            <label for="Categ">Catègories:</label>
                            <input type="text" id="Categ" name="Categ" maxlength="35" value="<?php echo $Cg; ?>">
                        </div>
                        <div>
                            <label for="SousCateg">SousCatégories:</label>
                            <input type="text" id="SousCateg" name="SousCateg" maxlength="35" value="<?php echo $SCg; ?>">
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <label for="DateDeb">DateDeb:</label>
                            <input type="datetime-local" id="DateDeb" name="DateDeb" value="<?php echo $DB; ?>">
                        </div>
                        <div>
                            <label for="DateFin">DateFin:</label>
                            <input type="datetime-local" id="DateFin" name="DateFin" value="<?php echo $DF; ?>">
                        </div>
                    </div>

                        <div id="update">
                        
                            <button type="submit" name="submit">Submit</button>
                            
                        </div>
                        <div id="delete">
                        
                            <button type="reset">Reset</button>
                           
                        </div>
                    </form>
                  
    </body>
</html>


