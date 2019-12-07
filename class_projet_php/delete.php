<?php
    include 'classes/employe.class.php';
    $employe = new employe;
    $employe->deleteemploye($_GET['eid']);
    header('Location:index.php?notif=delete');