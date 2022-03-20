<?php

function getDataAPI($channel_name, $page)
{

  $response = curlFile($channel_name, $page, "209.127.191.180", "9279", "bkhwlkba:757hyw3i42ls");
  return $response;
}
