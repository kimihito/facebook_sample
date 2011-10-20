<?php
require 'src/facebook.php';
$facebook = new Facebook(array('appId' => '180403122041981',
							  'secret' => 'b9db835737e540a9641f808e09204642',
							  'cookie' => true,
						));
$session = $facebook->getSession();
$fb_uid = $facebook->getUser();
echo 'welcome, your fb_uid is ';
echo '<span style="color:red;">';
echo $fb_uid;
echo '</span>';
?>
