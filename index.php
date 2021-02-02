<?php
ob_start();

require "routes/web.php";

$content = ob_get_clean();

require "resource/views/landing/default.php";


