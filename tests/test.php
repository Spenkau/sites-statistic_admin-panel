<?php

require '/home/ganimed/.config/composer/vendor/phpseclib/phpseclib/phpseclib/Net/SFTP.php';

$sftp = new \phpseclib\Net\SFTP('www.example.com');

echo $sftp;
