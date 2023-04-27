<?php
      // Security: Check browsers User-Agent and if it does not match, Kill process.
      if ($_SERVER['HTTP_USER_AGENT'] !== getenv('User-Agent-Secret')) {
        die("-1");
      }
      // GET API Start
      echo unlink('../user/'.$_GET['username'].'/index.html');
      echo rmdir('../user/'.$_GET['username']);
?>