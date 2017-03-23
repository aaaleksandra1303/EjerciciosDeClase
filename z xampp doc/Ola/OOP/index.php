<?php
    require 'form/user.php';
    require 'web/user.php';
    require 'form/person.php';

    use form\User as FormUser;
    use web\User as WebUser;
    use form\Person as FormPerson;

    $pepa = new FormUser('Pepa','Flores');
    $pepe = new FormUser('Pepa','Flores');
    $pepo = new FormUser('Pepa','Flores');

    var_dump($pepa);

    $pepi = new WebUser('Pepa','Flores');


 ?>