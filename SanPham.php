<H1></H1>
<div class="connect">
    <?php
    if (empty(session_id()) && !headers_sent()) {
      session_start();
    }
    include("connectdb.php");
    ?>
  </div>   