<?php

require_once("config.php");

if(isset($_POST['gönder']))
{

$name=$_POST['Name'];
$description=$_POST['Description'];
$price=$_POST['Price'];
$AddressIgnorable=$_POST['AddressIgnorable'];
$InstallmentRequest=$_POST['InstallmentRequest'];
$Limit=$_POST['Limit'];
$image=$_POST['image'];
$request_conversationId=$_POST['request_conversationId'];


$request = new \Iyzipay\Request\Iyzilink\IyziLinkSaveProductRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($request_conversationId);
$request->setName($name);
$request->setDescription($description);
$imagePath = __DIR__ . '/images/'.$image;
$request->setBase64EncodedImage(\Iyzipay\FileBase64Encoder::encode($imagePath));
$request->setPrice($price);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setAddressIgnorable($AddressIgnorable);
$request->setSoldLimit($Limit);
$request->setInstallmentRequest($InstallmentRequest);
$response = \Iyzipay\Model\Iyzilink\IyziLinkSaveProduct::create($request, Config::options());
echo "<pre>";
print_r($response);

}else {

	echo "Lütfen Formu doldurun";
	// code...
}