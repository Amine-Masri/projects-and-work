<?php 
include 'connect.php';
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


        $sql= "INSERT INTO `matieres` (Code_Matiere, Nom_Matiere, Coef_Matiere, Departement, Semestre,
        Options, Nb_Heure_CI, Nb_Heure_TP, TypeLabo, Bonus, Categories, SousCategories, DateDeb,DateFin) 
        VALUES ('$CodeM','$NomM', '$CoefM', '$Dept', ' $Smstre', '$Optn', '$NbrHrCI', ' $NbrHrTP', 
         '$TL', '$Bonus', '$Categ', '$SousCateg', '$DateDeb', '$DateFin')";
   
        $result=mysqli_query($conn,$sql);
        
       if($result){
           echo " Data inserted successfully";
       }
       else{
           die(" Connection failed: create.php" . mysqli_error($conn).$conn->connect_error);
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
        <title>Gerer Les Matiers </title>

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
               
                    <header>Create Matière</header>
                    <form method="post">

                    <div class="column">
                        <div>
                            <label for="CodeM">Code Matière:</label>
                            <input type="text" id="CodeM" name="CodeM" maxlength="10" required>
                        </div>
                        <div>
                            <label for="NomM">Nom Matière:</label>
                            <input type="text" id="NomM" name="NomM" maxlength="50" placeholder="exmeple: Math">
                        </div>
                        <div>
                            <label for="CoefM">Coef Matière:</label>
                            <input type="number" id="CoefM" name="CoefM">
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <label for="Dept">Département:</label>
                            <input type="text" id="Dept" name="Dept" maxlength="55">
                        </div>
                        <div>
                            <label for="Smstre">Semestre:</label>
                            <input type="text" id="Smstre" name="Smstre" maxlength="12">
                        </div>
                        <div>
                            <label for="Optn">Option:</label>
                            <input type="text" id="Optn" name="Optn" maxlength="55">
                        </div>

                    </div>
                    <div class="column">
                        <div>
                            <label for="NbrHrCI">Nb Heure CI:</label>
                            <input type="number" id="NbrHrCI" name="NbrHrCI">
                        </div>
                        <div>
                            <label for="NbrHrTP">Nb Heure TP:</label>
                            <input type="number" id="NbrHrTP" name="NbrHrTP">
                        </div>
                        <div>
                            <label for="TL">TypeLabo:</label>
                            <input type="text" id="TL" name="TL" maxlength="13">
                        </div>
                    </div>
                    
                    <div class="column">
                        <div>
                            <label for="Bonus">Bonus:</label>
                            <input type="number" id="Bonus" name="Bonus">
                        </div>
                        <div>
                            <label for="Categ">Catègories:</label>
                            <input type="text" id="Categ" name="Categ" maxlength="35">
                        </div>
                        <div>
                            <label for="SousCateg">SousCatégories:</label>
                            <input type="text" id="SousCateg" name="SousCateg" maxlength="35">
                        </div>
                    </div>

                    <div class="column">
                        <div>
                            <label for="DateDeb">DateDeb:</label>
                            <input type="datetime-local" id="DateDeb" name="DateDeb">
                        </div>
                        <div>
                            <label for="DateFin">DateFin:</label>
                            <input type="datetime-local" id="DateFin" name="DateFin">
                        </div>
                    </div>

                        <div id="update">
                        <a href="CreateMatier.php">
                            <button type="submit" name="submit">Submit</button>
                            </a>
                        </div>
                        <div id="delete">
                        <a href="CreateMatier.php">
                            <button type="reset">Reset</button>
                            </a>
                        </div>
                    </form>
                  
    </body>
</html>


