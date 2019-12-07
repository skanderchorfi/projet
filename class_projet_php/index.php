<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des employes</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des employes</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'employe ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'employe modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'employe supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <a href="create.php" class="btn btn-primary">Nouveau employe</a>
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>EID</th>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>motdepasse</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/employe.class.php';
                    $employe= new employe;
                    $listemploye = $employe->readAllemploye();
                    $data = $listemploe->fetchAll();
                    foreach($data as $employeData):
                    ?>
                        <tr>
                            <td><?= $employeData['eid'] ?></td>   
                            <td><?= $employeData['nom'] ?></td>   
                            <td><?= $employeData['tel'] ?></td>   
                            <td><?= $employeData['email'] ?></td>   
                            <td><?= $employeData['motdepasse'] ?></td>   
                            
                            <td>
                                <a href='edit.php?eid=<?= $emplyeData['eid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;
                                <a href='delete.php?eid=<?= $emplyeData['eid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
