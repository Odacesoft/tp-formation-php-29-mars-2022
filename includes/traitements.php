<?php

    if(isset($_GET['page']) && ($_GET['page'])!='')
    {
        $page=strtolower(trim($_GET['page']));

    }else{
        $page='accueil';
    }

    switch ($page) {
        case 'accueil':
                include_once('./pages/accueil.php');
            break;
        case 'formations':
                include_once('./pages/formations.php');
            break;
        case 'services':
                include_once('./pages/services.php');
            break;
        case 'contact':
                include_once('./pages/contact.php');
            break;
        default:
                include_once('./pages/accueil.php');
            break;
    }
