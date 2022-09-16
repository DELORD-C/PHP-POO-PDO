<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="Envoyer">
</form>

<?php
//$_FILES est l'équivalent de $_POST mais pour les fichiers
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

if (isset($_FILES['photo'])) {
    $name = "Files/" . time() . " - " . $_FILES['photo']['name'];
    //on peut stocker le nom que l'on donne à l'image pour l'envoyer en base de donnée par exemple.
    move_uploaded_file($_FILES['photo']['tmp_name'], $name);
}