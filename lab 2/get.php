<?php
    var_dump($_GET);
    echo '<br>';
    if (isset($_GET['name']))
        echo 'Hello. My name is '.$_GET['name'].'<br>';
    if (isset($_GET['age']) && !empty($_GET['age']))
        echo 'Age = '.$_GET['age'].'<br>';

    if (!empty($_POST)){
        if (isset($_POST['name'])) echo $_POST['name'].'<br>';
        if (isset($_POST['female'])) echo $_POST['female'].'<br>';
        if (isset($_POST['desc'])) echo $_POST['desc'];
    }
?>