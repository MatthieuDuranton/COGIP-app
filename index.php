<?php

require("models/index.php");

if (isset($_GET["action"])){
    if($_GET["action"]=='nomDeLaFonction'){
        nomDeLaFonction();
    }
}
