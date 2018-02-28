<?php

$json = '[{"nome":"Jos\u00e9","idade":25},{"nome":"Renan","idade":47}]';

$data = json_decode($json, true);

var_dump($data);
