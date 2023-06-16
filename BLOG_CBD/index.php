<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBD Squire</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- link normal css -->
    <link rel="stylesheet" href="css/css_cbd.css">
</head>

<body>

    <?php include "header_nul.php"; ?>


    <?php 
    $url = $_GET['nom'];
    switch($url){

        case "pages/articles":
        include "pages/articles.php";
        break;

        case "pages/connexion.php":
        header("pages/connexion.php");
        exit();
        break;

        case "pages/contact.php":
        include "pages/contact.php";
        break;

        case "pages/creation_article.php":
        include "pages/creation_article.php";
        break;

        case "pages/exemple_article.php":
        include "pages/exemple_article.php";
        break;

        case "pages/inscription.php":
        header("pages/inscription.php");
        exit();
        break;

        case "pages/profil.php":
        include "pages/profil.php";
        break;

        default:
        include "pages/acceuil.php";
        break;
    }
    
    
    ?>

    <?php include "footer_nul.php"; ?>



</body>

</html>