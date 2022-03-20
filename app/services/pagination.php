<?php

function paginationVideo($CountPages, $page)
{
  /* Actual Link */

  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    
  echo '<nav>
  <ul class="pagination pagination-sm">';
  for ($i = 1; $i <= $CountPages; $i++) {
    str_pad($i, 1, "0", STR_PAD_LEFT);
    if ($i == $page) {
      if (isset($_SESSION['channel'])) {
        echo '<li class="page-item active"><a class="page-link" href="'. $actual_link .'/index.php?page=' . $i . '&channel=' . $_SESSION["channel"] . '"> ' . $i . '</a></li>';
      } else {
        echo '<li class="page-item active"><a class="page-link" href="'. $actual_link .'/index.php?page=' . $i . '&channel=' . $_GET["channel"] . '"> ' . $i . '</a></li>';
      }
    } else {
      if (isset($_SESSION['channel'])) {
        echo '<li class="page-item"><a class="page-link" href="'. $actual_link .'/index.php?page=' . $i . '&channel=' . $_SESSION["channel"] . '"> ' . $i . '</a></li>';
      } else {
        echo '<li class="page-item"><a class="page-link" href="'. $actual_link .'/index.php?page=' . $i . '&channel=' . $_GET["channel"] . '"> ' . $i . '</a></li>';
      }
    }
  }
  echo '</ul>
  </nav>';
}
