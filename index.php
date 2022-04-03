<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Web</title>

</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=formations">Formations</a></li>
            <li><a href="index.php?page=services">Services</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <table align="center" width="50%" border="2">
        <tr>
            <td>
            <?php
                include_once('./includes/traitements.php');
            ?>
            </td>
        </tr>
        <tr>
            <td>Le pied de page</td>
        </tr>
    </table>

    <script>
       
    </script>
</body>
</html>