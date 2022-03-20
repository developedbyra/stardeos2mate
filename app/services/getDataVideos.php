<?php

function getData($response, $CountVideos)
{
  
  for ($i = 0; $i < $CountVideos; $i++) {
    $title = $response['videos'][$i]['title'];
    $thumbnail = $response['videos'][$i]['thumbnail'];
    $link = $response['videos'][$i]['files'][1]['fileUrl'];
    $labelVideo = $response['videos'][$i]['files'][0]['label'];
    $subscribersOnly = $response['videos'][$i]['subscribersOnly'];

    if ($title != null && $labelVideo != null && $link != null) {

      if ($subscribersOnly == "true") {
        echo '
                <div class="card mb-3" style="max-width: 540px auto;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="' . $thumbnail . '" class="img-fluid rounded-start" alt="' . $title . '">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">' . $title . ' <button type="button" class="btn btn-dark btn-sm disabled">Video Exclusivo <i class="bi bi-star"></i></button>                      </h5>
                      <p class="card-text">Calidad: ' . $labelVideo . 'p  <br>
                      </p>
                      <p class="card-text">
                      <small class="text-muted">
                      Copiar enlace y pegalo en VLC Player 
                      </small> <br>
                      ' . $link . '
                      </p>    
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              ';
      } else {
        echo '
                <div class="card mb-3" style="max-width: 540px auto;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="' . $thumbnail . '" class="img-fluid rounded-start" alt="' . $title . '">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">' . $title . '</h5>
                      <p class="card-text">Calidad: ' . $labelVideo . 'p  <br>
                      </p>
                      <p class="card-text">
                      <small class="text-muted">
                      Copiar enlace y pegalo en VLC Player
                      </small> <br>
                      ' . $link . '
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              ';
      }
    }
  }
}
