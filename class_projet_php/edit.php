<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer l'employe N°<?= $_GET['eid'] ?></title>
</head>
<body>
    <?php
        include './classes/employe.class.php';
        $employe= new employe;
        if (!empty($_POST)) {
            $employe->updateemploye($_POST['id'], $_POST['nom'], $_POST['tel'], $_POST['mail'], $_POST['motdepasse'],);
            header('Location:index.php?notif=update');
            exit();
        } else {
            $showemploye= $employe->showOneemploye($_GET['eid']);
            $data = $showemploye->fetch();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Editer l'employe</h3>
        </div>
        <fieldset>
            <legend>Mettre à jour l'employe N°<?= $_GET['eid'] ?></legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['eid'] ?>" name="eid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">nom</label>
                            <input type="text" value="<?= $data['nom'] ?>" required name="nom" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tel">tel</label>
                            <input type="text" value="<?= $data['tel'] ?>" required name="tel" class="form-control" id="tel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" value="<?= $data['email'] ?>" required name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="motdepasse">motdepasse</label>
                            <input type="text" value="<?= $data['motdepasse'] ?>" required name="motdepasse" class="form-control" id="motdepasse">
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