<?php 
$address = $_SERVER['REMOTE_ADDR'];

if(strpos($address, '192.168')!== false){
echo'<iframe src="http://192.168.2.252:3000/public/dashboard/94b4e3c6-c2a9-480d-96c3-9eb527b4317b" frameborder="0" width="100%"
    height="67%" allowtransparency></iframe>';
}else{
    echo'<iframe src="http://thmc.ddns.net:3000/public/dashboard/94b4e3c6-c2a9-480d-96c3-9eb527b4317b" frameborder="0" width="100%"
        height="67%" allowtransparency></iframe>';
}
?>