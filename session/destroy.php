<?php

    setcookie("username","",time()-3600);
    setcookie("password","",time()-3600);

    header("Location: ".$_SERVER['HTTP_REFERER'])

?>