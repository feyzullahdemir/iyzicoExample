<?php

require_once('config.php');

$paymentId=$_POST['paymentId'];
$conversationData=$_POST['conversationData'];
$request = new \Iyzipay\Request\CreateThreedsPaymentRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setPaymentId($paymentId);
$request->setConversationData($conversationData);

$threedsPayment = \Iyzipay\Model\ThreedsPayment::create($request, Config::options());


//print_r($checkoutForm->getStatus());
echo "<pre>";
print_r($threedsPayment);
echo $status= $threedsPayment->getStatus();
echo "<br>";

if($status == 'success')
{
	echo "Ödeme işlemi tamamlandı."
}
elseif  {
	echo "Hatalı işlem";

	// code...
}





?>
