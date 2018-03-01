<?php

require_once ("..\config.php");

echo session_save_path();
echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {
    case 1:
        echo "as sessões estiverem desabilitadas.";
        break;

    case 2:
        echo "as sessões estiverem habilitadas, mas nenhuma existir.";
        break;

    case 3:
        echo "as sessões estiverem habilitadas, e uma existir.";
        break;
}
