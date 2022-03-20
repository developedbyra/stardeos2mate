<?php

require("app/services/getDataVideos.php"); /* Get Data Videos */
require("app/services/pagination.php"); /* Pagination */
require("app/services/profile.php"); /* Profile Data */
require("app/services/getDataAPI.php"); /* Get Data API */
require("app/services/convertVideo.php"); /* Convert Data */
require("app/services/getHTTPRequest.php"); /* Get HTTP Request */
require("app/controller/proxyController.php"); /* Proxy Controller */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardeos2Mate - Mirate los videos de Stardeos sin ANUNCIONS o PAGA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link rel="stylesheet" href="app/views/public/css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <?php

    /* Navigator */
    include("app/controller/helpers/navigator.php");

    /* Browser Channel */

    include("app/controller/helpers/browserChannel.php");

    /* Show get Data */

    include("app/controller/helpers/videosGet.php");


    /* Footer  */
    include("app/controller/helpers/footer.php");


    ?>
    <script src="app/views/public/js/copy-link.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>