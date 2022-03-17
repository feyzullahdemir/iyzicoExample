<?php

require_once('config.php');

if(isset($_POST['gönder']))
{

$installment=$_POST['installment'];
$cardHolderName=$_POST['cardHolderName'];
$cardNumber=$_POST['cardNumber'];
$expireMonth=$_POST['expireMonth'];
$expireYear=$_POST['expireYear'];
$cvc=$_POST['cvc'];
$registerCardEnabled=$_POST['registerCardEnabled'];

//Payment


//$rprice=$_POST['request_price'];
//$paidPrice=$_POST['paidPrice'];
$currency=$_POST['currency'];

$rbasketId=$_POST['request_basketId'];
$rpaymentGroup=$_POST['request_paymentGroup'];
$rlocale=$_POST['request_locale'];

//BasketItm1
$request_basketItems1_id=$_POST['request_basketItems1_id'];
$request_basketItems1_price=$_POST['request_basketItems1_price'];
$request_basketItems1_name=$_POST['request_basketItems1_name'];
$request_basketItems1_itemType=$_POST['request_basketItems1_itemType'];
$request_basketItems1_category1=$_POST['request_basketItems1_category1'];
$request_basketItems1_category2=$_POST['request_basketItems1_category2'];
//BasketItm2
$request_basketItems2_id=$_POST['request_basketItems2_id'];
$request_basketItems2_price=$_POST['request_basketItems2_price'];
$request_basketItems2_name=$_POST['request_basketItems2_name'];
$request_basketItems2_itemType=$_POST['request_basketItems2_itemType'];
$request_basketItems2_category1=$_POST['request_basketItems2_category1'];
$request_basketItems2_category2=$_POST['request_basketItems2_category2'];
//Buyer
$request_buyer_id=$_POST['request_buyer_id'];
$request_buyer_name=$_POST['request_buyer_name'];
$request_buyer_surname=$_POST['request_buyer_surname'];
$request_buyer_identityNumber=$_POST['request_buyer_identityNumber'];
$request_buyer_email=$_POST['request_buyer_email'];
$request_buyer_gsmNumber=$_POST['request_buyer_gsmNumber'];
$request_buyer_registrationDate=$_POST['request_buyer_registrationDate'];
$request_buyer_lastLoginDate=$_POST['request_buyer_lastLoginDate'];
$request_buyer_registrationAddress=$_POST['request_buyer_registrationAddress'];
$request_buyer_country=$_POST['request_buyer_country'];
$request_buyer_zipCode=$_POST['request_buyer_zipCode'];
$request_buyer_ip=$_POST['request_buyer_ip'];
$request_buyer_city=$_POST['request_buyer_city'];
//ShippingAdres
$request_shippingAddress_address=$_POST['request_shippingAddress_address'];
$request_shippingAddress_zipCode=$_POST['request_shippingAddress_zipCode'];
$request_shippingAddress_contactName=$_POST['request_shippingAddress_contactName'];
$request_shippingAddress_city=$_POST['request_shippingAddress_city'];
$request_shippingAddress_country=$_POST['request_shippingAddress_country'];
//BillingAdres
$request_billingAddress_address=$_POST['request_billingAddress_address'];
$request_billingAddress_zipCode=$_POST['request_billingAddress_zipCode'];
$request_billingAddress_contactName=$_POST['request_billingAddress_contactName'];
$request_billingAddress_city=$_POST['request_billingAddress_city'];
$request_billingAddress_country=$_POST['request_billingAddress_country'];

//hidden
$request_conversationId=$_POST['request_conversationId'];


$totalprice=$request_basketItems2_price+$request_basketItems1_price;

if($_POST['force3D']=='true')
{
# create request class
$request = new \Iyzipay\Request\CreatePaymentRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setPrice($totalprice);
$request->setPaidPrice($totalprice);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setInstallment($installment);
$request->setBasketId($rbasketId);
$request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
$request->setCallbackUrl("http://localhost:8888/iyzico/sonuc.php");

$paymentCard = new \Iyzipay\Model\PaymentCard();
$paymentCard->setCardHolderName($cardHolderName);
$paymentCard->setCardNumber($cardNumber);
$paymentCard->setExpireMonth($expireMonth);
$paymentCard->setExpireYear($expireYear);
$paymentCard->setCvc($cvc);
$paymentCard->setRegisterCard($registerCardEnabled);
$request->setPaymentCard($paymentCard);

$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId($request_buyer_id);
$buyer->setName($request_buyer_name);
$buyer->setSurname($request_buyer_surname);
$buyer->setGsmNumber($request_buyer_gsmNumber);
$buyer->setEmail($request_buyer_email);
$buyer->setIdentityNumber($request_buyer_identityNumber);
$buyer->setLastLoginDate($request_buyer_lastLoginDate);
$buyer->setRegistrationDate($request_buyer_registrationDate);
$buyer->setRegistrationAddress($request_buyer_registrationAddress);
$buyer->setIp($request_buyer_ip);
$buyer->setCity($request_buyer_city);
$buyer->setCountry($request_buyer_country);
$buyer->setZipCode($request_buyer_zipCode);
$request->setBuyer($buyer);

$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName($request_shippingAddress_contactName);
$shippingAddress->setCity($request_shippingAddress_city);
$shippingAddress->setCountry($request_shippingAddress_country);
$shippingAddress->setAddress($request_shippingAddress_address);
$shippingAddress->setZipCode($request_shippingAddress_zipCode);
$request->setShippingAddress($shippingAddress);

$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName($request_billingAddress_contactName);
$billingAddress->setCity($request_shippingAddress_city);
$billingAddress->setCountry($request_billingAddress_country);
$billingAddress->setAddress($request_shippingAddress_address);
$billingAddress->setZipCode($request_shippingAddress_zipCode);
$request->setBillingAddress($billingAddress);

$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId($request_basketItems1_id);
$firstBasketItem->setName($request_basketItems1_name);
$firstBasketItem->setCategory1($request_basketItems1_category1);
$firstBasketItem->setCategory2($request_basketItems1_category2);
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($request_basketItems1_price);
$basketItems[0] = $firstBasketItem;

$secondBasketItem = new \Iyzipay\Model\BasketItem();
$secondBasketItem->setId($request_basketItems2_id);
$secondBasketItem->setName($request_basketItems2_name);
$secondBasketItem->setCategory1($request_basketItems2_category1);
$secondBasketItem->setCategory2($request_basketItems2_category2);
$secondBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
$secondBasketItem->setPrice($request_basketItems2_price);
$basketItems[1] = $secondBasketItem;
$request->setBasketItems($basketItems);



# make request
$threedsInitialize = \Iyzipay\Model\ThreedsInitialize::create($request, Config::options());

# print result
print_r($threedsInitialize);
}
else
{

$request = new \Iyzipay\Request\CreatePaymentRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($request_conversationId);
$request->setPrice($totalprice);
$request->setPaidPrice($totalprice);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setInstallment($installment);
$request->setBasketId($rbasketId);
$request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);



$paymentCard = new \Iyzipay\Model\PaymentCard();
$paymentCard->setCardHolderName($cardHolderName);
$paymentCard->setCardNumber($cardNumber);
$paymentCard->setExpireMonth($expireMonth);
$paymentCard->setExpireYear($expireYear);
$paymentCard->setCvc($cvc);
$paymentCard->setRegisterCard($registerCardEnabled);
$request->setPaymentCard($paymentCard);

$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId($request_buyer_id);
$buyer->setName($request_buyer_name);
$buyer->setSurname($request_buyer_surname);
$buyer->setGsmNumber($request_buyer_gsmNumber);
$buyer->setEmail($request_buyer_email);
$buyer->setIdentityNumber($request_buyer_identityNumber);
$buyer->setLastLoginDate($request_buyer_lastLoginDate);
$buyer->setRegistrationDate($request_buyer_registrationDate);
$buyer->setRegistrationAddress($request_buyer_registrationAddress);
$buyer->setIp($request_buyer_ip);
$buyer->setCity($request_buyer_city);
$buyer->setCountry($request_buyer_country);
$buyer->setZipCode($request_buyer_zipCode);
$request->setBuyer($buyer);



$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName($request_shippingAddress_contactName);
$shippingAddress->setCity($request_shippingAddress_city);
$shippingAddress->setCountry($request_shippingAddress_country);
$shippingAddress->setAddress($request_shippingAddress_address);
$shippingAddress->setZipCode($request_shippingAddress_zipCode);
$request->setShippingAddress($shippingAddress);

$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName($request_billingAddress_contactName);
$billingAddress->setCity($request_shippingAddress_city);
$billingAddress->setCountry($request_billingAddress_country);
$billingAddress->setAddress($request_shippingAddress_address);
$billingAddress->setZipCode($request_shippingAddress_zipCode);
$request->setBillingAddress($billingAddress);

$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId($request_basketItems1_id);
$firstBasketItem->setName($request_basketItems1_name);
$firstBasketItem->setCategory1($request_basketItems1_category1);
$firstBasketItem->setCategory2($request_basketItems1_category2);
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($request_basketItems1_price);
$basketItems[0] = $firstBasketItem;

$secondBasketItem = new \Iyzipay\Model\BasketItem();
$secondBasketItem->setId($request_basketItems2_id);
$secondBasketItem->setName($request_basketItems2_name);
$secondBasketItem->setCategory1($request_basketItems2_category1);
$secondBasketItem->setCategory2($request_basketItems2_category2);
$secondBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
$secondBasketItem->setPrice($request_basketItems2_price);
$basketItems[1] = $secondBasketItem;
$request->setBasketItems($basketItems);



# make request
$payment = \Iyzipay\Model\Payment::create($request, Config::options());

# print response
echo "<pre>";
print_r($payment);


$status=$payment->getStatus();

echo "<hr>";
if($status == 'success')
{
	echo "Ödeme Başarılı";

}
else {
	echo "Başarısız ödeme";
}




}

}else
{
	echo "Lütfen Formu doldurun";
}
?>
