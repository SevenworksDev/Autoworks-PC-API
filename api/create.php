<?php
      // Security: Check browsers User-Agent and if it does not match, Kill process.
      if ($_SERVER['HTTP_USER_AGENT'] !== getenv('User-Agent-Secret')) {
        die("-1");
      }
      // GET API Start
      echo mkdir('../user/'.$_GET['username']);
      echo copy('../templates/'.$_GET['pc'].'.html', '../user/'.$_GET['username'].'/index.html');
?> 