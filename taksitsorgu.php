<?php
require_once('config.php');
if(isset($_POST['gönder']))
{
$binnumber=$_POST['binnumber'];
$request_conversationId=$_POST['request_conversationId'];
$price=$_POST['price'];



$request = new \Iyzipay\Request\RetrieveInstallmentInfoRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($request_conversationId);
$request->setBinNumber($binnumber);
$request->setPrice($price);

$installmentInfo = \Iyzipay\Model\InstallmentInfo::retrieve($request, Config::options());
echo "<pre>";
print_r($installmentInfo);
echo "<hr>";
echo $installmentInfo->getStatus();
echo "<hr>";

}
else {
	echo "Lütfen Formu Doldurun";
	// code...
}
?>