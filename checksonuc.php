<?php

require_once('config.php');

//echo $token = $_POST['token'];
$token = $_POST['token'];


$request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setToken($token);
$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

//print_r($checkoutForm->getStatus());
$odeme_durum = $checkoutForm->getStatus();
echo "<br>";
//$islem_no = $checkoutForm->getpaymentId();




if ($odeme_durum =="FAILURE") {

	echo "Başarısız Ödeme...";


} elseif ($odeme_durum =="success") {

	echo "Ödeme işlemi Tamamlandı ödeme durumu Şu şekilde :<br>";
	echo $durum = $checkoutForm->getpaymentStatus();
	echo "<hr>";
	if ($durum == 'INIT_BANK_TRANSFER') {
		echo "Ödeme işlemi Kontrol edilmesi bekleniyor.";
		
	}
	elseif ($durum == 'success') 
			
	{
		echo "Ödeme İşlemi Tamamlandı.";
		
	}
	else
	{
		echo "hata";
		echo $checkoutForm->geterrorMessage();
	}



}
?>
