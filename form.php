<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un etudiant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
        <div class="title">
            <h1>SMI S6</h1>
            <p>Faculte des sciences dhar Mehraz Fes</p>
        </div>
        <p>
            <img src="7ff2d0f4-5071-452b-a586-346311ff31f3.jpg" alt="logiFSDM">
        </p> 
    </header>
    
       <div class="form">
           <div class="text">
            <div class="like"></div>
        
            
               <h2>Ajouter un etudiant</h2>
               <div class="line"></div>
               <form action="" id="studentForm">
                   <label for="code">Entres Code </label>
                   <input type="text" id="code" name="code" required>
                   
                   <label for="nom">Entres Nom </label>
                   <input type="text" id="nom" name="nom" required>
                   
                   <label for="prenom">Entres Prenom</label>
                   <input type="text" id="prenom" name="prenom" required>
                   
                   <label for="note">Entres Note</label>
                   <input type="text" id="note" name="note" min="0" max="20" required>
                   
                   <label for="filiere"> Filiere</label>
                   <select name="filiere" id="filiere" required>
                       <option value="SMI">Sciences Mathématiques et Informatique</option>
                       <option value="SMA">Sciences Mathématiques et Applications</option>
                       <option value="SMP">Sciences Mathématiques et physique</option>
                       <option value="SVI">Sciences de vie et Terre</option>
                    </select>
                    
                    <button type="submit">Envoyer</button>
                    <button type="reset">Annuler</button>
                </form>
                
            </div>
            <div class="line"></div>
        </div>
        <div class="lien">
        
            <ul>
                <li><a href="index.php">Accueil |</a></li>
                <li><a href="liste.php">Liste des etudiants |</a></li>
                <li><a href="form.php">Ajouter un etudiant</a></li>
            </ul>
            
        </div>
        <div class="line"></div>
        <footer>
            <p>
                > © Copyright: SMI 2021 -
                 Faculté des Sciences Dhar Mahraz, 
                 Fès
            </p>
            
    </footer>
</body>
</html>