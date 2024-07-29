<?php
    session_start();
    session_destroy();
    echo "<script>location='landing_page.php'</script>";
