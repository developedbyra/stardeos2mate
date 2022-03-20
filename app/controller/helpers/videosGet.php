<div class="container">
  <?php
  $channel_name = $_POST["channel"]; /* Channel Name: Method Post */
  $_SESSION["channel"] = $channel_name; /* Cache Name Channel on SESSION variable */
  $page = $_GET['page']; /* Get Number Page Default: Page 1 */

  /* Get Data API */
    $response = getDataAPI($channel_name, $page);

  /* Data */
  $CountVideos = $response['meta']['total']; /* Count Videos */
  $CountPages = $response['meta']['last']; /* Count Pages */
  $error = $response["error"]; /* Error API */

  /* Profile Channel */
  profileData($response, $channel_name, $CountVideos, $error);
  
  /* Get Data Videos */
  getData($response, $CountVideos);

  /* Pagination */
  paginationVideo($CountPages, $page);
  
  ?>
</div>