<?php
$etudiante = [
    ["Code" => "E1", "Nom" => "Moujahid", "Prenom" => "Moujahid", "Filiere" => "SMI", "Note" => 18],
    ["Code" => "E2", "Nom" => "Kaddour", "Prenom" => "Kaddou", "Filiere" => "SMP", "Note" => 15],
    ["Code" => "E3", "Nom" => "Omari", "Prenom" => "omar", "Filiere" => "SMA", "Note" => 13],
    ["Code" => "E4", "Nom" => "karimi", "Prenom" => "karim", "Filiere" => "SMI", "Note" => 10],
    ["Code" => "E4", "Nom" => "Hashmi", "Prenom" => "Hicham", "Filiere" => "SMP", "Note" => 8],
    ["Code" => "E6", "Nom" => "Marwani", "Prenom" => "Marwan", "Filiere" => "SMA", "Note" => 3]
];

define("Moy_reussite", 10);

function getListeParFiliere($filiere, $etudiante) {
    $etudianteReussis = [];
    foreach ($etudiante as $e) {
        if ($e["Filiere"] == $filiere && $e["Note"] >= Moy_reussite) {
            $etudianteReussis[] = $e;
        }
    }
    return $etudianteReussis;
}

function getMax($t) {
    return max($t);
}

function getMention($note) {
    if ($note >= 16) {
        return "TRES BIEN";
    } elseif ($note >= 14) {
        return "BIEN";
    } elseif ($note >= 12) {
        return "ASSEZ BIEN";
    } elseif ($note >= 10) {
        return "PASSABLE";
    } else {
        return "AJOURNE";
    }
}

$filiere = "SMI";
$listeEtudiante = getListeParFiliere($filiere, $etudiante);
$notes = array_column($listeEtudiante, "Note");
$NombreEtudianteReussis = count($listeEtudiante);
$MaxNote = getMax($notes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <h1>SMI S6</h1>
            <p>Faculte des sciences dhar Mehraz Fes</p>
        </div>
        <p>
            <img src="7ff2d0f4-5071-452b-a586-346311ff31f3.jpg" alt="logoFSDM">
        </p>
    </header>
    <div class="table">
        <div class="tab">
            <div class="like"></div>
            <h2>Liste des etudiants de la filiere : <?= $filiere ?></h2>
            <div class="line"></div>
            <p>Nombre des etudiants reussis : <?= $NombreEtudianteReussis ?></p>
            <p>Meilleure note : <?= $MaxNote ?></p>
            <div class="line"></div>
        </div>
        <?php
        echo "<table border='1'>";
        echo "<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Note</th><th>Filiere</th><th>Mention</th></tr>";
        foreach ($etudiante as $etudiant) {
            echo "<tr>";
            echo "<td>" . $etudiant["Code"] . "</td>";
            echo "<td>" . $etudiant["Nom"] . "</td>";
            echo "<td>" . $etudiant["Prenom"] . "</td>";
            echo "<td>" . $etudiant["Note"] . "</td>";
            echo "<td>" . $etudiant["Filiere"] . "</td>";
            echo "<td>" . getMention($etudiant["Note"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <div class="lien">
        
        <div class="line"></div>
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