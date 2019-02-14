<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire d'upload</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Upload en PHP</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <button class="btn btn-primary">Uploader</button>
            </form>

            <?php
                var_dump($_FILES);
                // On vérifie que le fichier a bien été uploadé
                if (!empty($_FILES['image'])) {
                    // On récupére le fichier temporaire
                    $tmpFile = $_FILES['image']['tmp_name'];
                    // On récupére le nom du fichier
                    $fileName = $_FILES['image']['name'];
                    // Générer un nom de fichier unique :
                    // chaton.jpg -> a3d45fe4_chaton.jpg
                    $fileName = substr(md5(time()), 0, 8) . '_' . $fileName;
                    // On déplace le fichier à l'endroit désiré
                    move_uploaded_file($tmpFile, __DIR__.'/upload/'.$fileName);
                }
            ?>
        </div>
    </body>
</html>
