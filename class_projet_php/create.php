<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau employe</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
            include './classes/employe.class.php';
            $employe = new employe;
            $employe->addNewemploye($_POST['nom'], $_POST['tel'], $_POST['email'], $_POST['motdepasse']);
            header('Location:index.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau employe</h3>
        </div>
        <fieldset>
            <legend>Nouveau employe</legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">nom</label>
                            <input type="text" required name="nom" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="text" required name="tel" class="form-control" id="tel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" required name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="motdepasse">motdepasse</label>
                            <input type="text" required name="motdepasse" class="form-control" id="motdepasse">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>