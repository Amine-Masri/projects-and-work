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
    max-width: 430px;
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
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}

.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}
.field button{
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


.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}


        </style>
                
    </head>
    <body>
        <section class="container forms">
            <div class="form">
                <div class="form-content">
                    <header>Gerer Matieres</header>
                    <form action="#">
                      
                        <div class="field button-field" id="create">
                        <a href="CreateMatier.php">
                            <button type="button">Create Matiere</button>
                        </a>
                        </div>
                        <div class="field button-field"  id="read">
                        <a href="ReadMatier.php">
                            <button type="button">Read Matieres</button>
                            </a>
                        </div>
                        <div class="field button-field"  id="read">
                        <a href="SearchMatiers.php">
                            <button type="button">Search Matiere</button>
                            </a>
                        
                    </form>
                </div>   
    </body>
</html>