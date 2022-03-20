<?php

function profileData($response, $channel_name, $CountVideos, $error) { 

    /* Profile Channel */

    $creatorName = $response['videos'][1]['creator']["username"];
    $creatorAvatar = $response['videos'][1]['creator']["avatar"];
    $creatorID = $response['videos'][1]['creator']["id"];
    $creatorRoles = $response['videos'][1]['creator']["roles"][0];
    $creatorRoles2 = $response['videos'][1]['creator']["roles"][1];
    $creatorSubs = $response['videos'][1]['channelId']['subscriberCount'];
  
    if (isset($channel_name)) {
      if($creatorName != null) {

        echo '
        <h1>Canal encontrado</h1>
        <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="' . $creatorAvatar . '" class="img-fluid rounded-start" width="200" alt="' . $creatorName . '">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">' . $creatorName . ' ('.$creatorID.')</h5>
              <p class="card-text">Roles: '. $creatorRoles . ', '. $creatorRoles2 . '</p>
              <p class="card-text"><small class="text-muted">Subscriber Count: ' . number_format($creatorSubs) . '</small></p>
            </div>
          </div>
        </div>
      </div>';
      }
  
      if (isset($channel_name) && $response == null) {
        echo "<small>No hemos encontrado el canal, vuelva a intentar.<small><br><br>";
      } else {
        if ($CountVideos > 0) {
          echo "<h1>Videos encontrados ($CountVideos)</h1>";
        }
        if (isset($_POST['channel'])) {
          echo '<small>Buscaste el canal de <strong>' . $_POST["channel"] . '</strong></small><br><br>';
        }
      }
    }else {

      if (isset($channel_name) && $response == null) {
        echo "<small>No hemos encontrado el canal, vuelva a intentar.<small><br><br>";
      } else {
        if ($CountVideos > 0) {
          echo "<h1>Videos encontrados ($CountVideos)</h1>";
        }
        if (isset($_POST['channel'])) {
          echo '<small>Buscaste el canal de <strong>' . $_POST["channel"] . '</strong></small><br><br>';
        }
      }
    }
  }



?>