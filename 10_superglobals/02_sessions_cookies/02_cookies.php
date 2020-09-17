<?php

setcookie('name','Usher',time() - 60,'/');

echo "<pre>";
print_r( $_COOKIE );
echo "</pre>";
