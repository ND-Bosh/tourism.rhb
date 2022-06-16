<?php
if (isset($_POST['valider'])) 
{
    // code...
if (isset($_POST['valider']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['hotel']))
{
    // code...
    if (!empty($_POST['valider']) and !empty($_POST['nom']) and !empty($_POST['prenom'])  and !empty($_POST['hotel'])  ) 
    {
        // code...
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $hotel = htmlspecialchars($_POST['hotel']);
        
        echo("<b>$prenom $nom </b>votre hôtel a été réservé avec succès.<br/> Bon sejour dans l'hôtel $hotel");
    }
}
}
?>