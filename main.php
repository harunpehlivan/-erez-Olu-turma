<?php
if (isset($_COOKIE["test_cerezi"]))
{
echo "çerez var";
}
else 
echo "çerez yok oluşturuluyor";
setcookie("test_cerezi","bu bir çerezdir", time() + (60*60*24));

?>