<?php
if( isset($_SESSION['message']) ){
    echo "<h3>".$_SESSION['message']."</h3>";
    unset($_SESSION['message']);
}