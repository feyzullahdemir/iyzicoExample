<?php

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


$rprice=$_POST['request_price'];
$paidPrice=$_POST['paidPrice'];
$currency=$_POST['currency'];
$enabledInstallments=$_POST['enabledInstallments'];
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

$totalprice="1.0";



//Json verileri ayarlanması ve iyzicoya gönderilmesi
$content = '{
    "locale": "tr",
    "conversationId": "'.$request_conversationId.'",
    "price": "'.$totalprice.'",
    "basketId": "'.$basketItems.'",
    "paymentGroup": "PRODUCT",
    "buyer": {
        "id": "'.$request_buyer_id.'",
        "name": "'.$request_buyer_name.'",
        "surname": "'.$request_buyer_surname.'",
        "identityNumber": "74300864791",
        "email": "email@email.com",
        "gsmNumber": "+905350000000",
        "registrationDate": "2013-04-21 15:12:09",
        "lastLoginDate": "2015-10-05 12:43:35",
        "registrationAddress": "'.$request_buyer_registrationAddress.'",
        "city": "'.$request_buyer_city.'",
        "country": "'.$request_buyer_country.'",
        "zipCode": "34732",
        "ip": "85.34.78.112"
    },
    "shippingAddress": {
        "address": "'.$request_shippingAddress_address.'",
        "zipCode": "34742",
        "contactName": "'.$request_shippingAddress_contactName.'",
        "city": "'.$request_shippingAddress_city.'",
        "country": "'.$request_shippingAddress_country.'"
    },
    "billingAddress": {
        "address": "'.$request_billingAddress_address.'",
        "zipCode": "34742",
        "contactName": "'.$request_billingAddress_contactName.'",
        "city": "'.$request_billingAddress_city.'",
        "country": "'.$request_billingAddress_country.'"
    },
    "basketItems": [
        {
            "id": "BI101",
            "price": "0.5",
            "name": "Binocular",
            "category1": "Collectibles",
            "category2": "Accessories",
            "itemType": "PHYSICAL"
        },
        {
            "id": "BI102",
            "price": "0.5",
            "name": "Game code",
            "category1": "Game",
            "category2": "Online Game Items",
            "itemType": "VIRTUAL"
        }
        
    ],
    "enabledInstallments": [
        1,
        2,
        3,
        6,
        9
    ],
    "callbackUrl": "http://localhost:8888/iyzi_new/sonuc.php",
    "currency": "TRY",
    "paidPrice": "1.2"
}';

//iyzi alt yapısına ait olan PKI String (apiKey + secretKey + requestString) 
$pki_string ='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId='.$request_conversationId.',price='.$totalprice.',basketId='.$basketItems.',paymentGroup=PRODUCT,buyer=[id='.$request_buyer_id.',name='.$request_buyer_name.',surname='.$request_buyer_surname.',identityNumber=74300864791,email=email@email.com,gsmNumber=+905350000000,registrationDate=2013-04-21 15:12:09,lastLoginDate=2015-10-05 12:43:35,registrationAddress='.$request_buyer_registrationAddress.',city='.$request_buyer_city.',country='.$request_buyer_country.',zipCode=34732,ip=85.34.78.112],shippingAddress=[address='.$request_shippingAddress_address.',zipCode=34742,contactName='.$request_shippingAddress_contactName.',city='.$request_shippingAddress_city.',country='.$request_shippingAddress_country.'],billingAddress=[address='.$request_billingAddress_address.',zipCode=34742,contactName='.$request_billingAddress_contactName.',city='.$request_billingAddress_city.',country='.$request_billingAddress_country.'],basketItems=[[id=BI101,price=0.5,name=Binocular,category1=Collectibles,category2=Accessories,itemType=PHYSICAL], [id=BI102,price=0.5,name=Game code,category1=Game,category2=Online Game Items,itemType=VIRTUAL]],callbackUrl=http://localhost:8888/iyzi_new/sonuc.php,currency=TRY,paidPrice=1.2,enabledInstallments=[1, 2, 3, 6, 9]]';
//$pki_string='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId=123456789,binNumber=542119]';
//Hashed PKI String: (base64(sha1_true(PKI String))
$base64 = base64_encode(sha1($pki_string, true));
echo $base64;



$rest = curl_init();
 //curl_setopt : Curl transfer seçeneği tanımlar
 curl_setopt($rest,CURLOPT_URL,"https://sandbox-api.iyzipay.com/payment/iyzipos/checkoutform/initialize/auth/ecom");
 curl_setopt($rest,CURLOPT_POST,1);
 curl_setopt($rest,CURLOPT_POSTFIELDS,$content);
 curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
 //Authorization String: ("IYZWS"+" "+apiKey+":"+Hashed PKI String)
 curl_setopt($rest,CURLOPT_HTTPHEADER ,array('Accept: application/json','Content-type: application/json','Authorization: IYZWS sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk:'.$base64 ,'x-iyzi-rnd: 123456789'));
 $response = curl_exec($rest);
 curl_close($rest);
 //true ile diziye çevirip içeride dizin elemanlarına erişim sağlayabilirz.
$resultJson = json_decode($response,true);
var_dump($resultJson);

//curl_setopt_array($rest, $curlConfig);
//echo curl_exec($rest);



}

?>
