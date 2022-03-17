<?php


$buyer = [
    "id"=> 1,
    "name"=> 2,
    "surname"=> 3,
    "identityNumber"=> 4,
    "email"=> 5,
    "gsmNumber"=> 6,
    "registrationDate"=> 7,
    "lastLoginDate"=> 8,
    "registrationAddress"=> 9,
    "city"=> 0,
    "country"=> 00,
    "zipCode"=> 66,
    "ip"=> 88
];
echo "<pre>";
print_r($buyer);
echo "<pre>";
var_dump($buyer);

$denem = "deneme1";
$shippingAddress = [
        "address" => "asd",
        "zipCode"=> "34742",
        "contactName"=> "asddd",
        "city" => $denem,
        "country"=> "asdsad"
];

$billingAddress= 
[
        "address" => "asd",
        "zipCode"=> "34742",
        "contactName"=> "asddd",
        "city" => $denem,
        "country"=> "asdsad"
];
$basketItems = [
        
            "id"=> "BI101",
            "price"=> "0.5",
            "name"=> "Binocular",
            "category1"=> "Collectibles",
            "category2"=> "Accessories",
            "itemType"=> "PHYSICAL"
        
];

$enabledInstallments = [
        1,
        2,
        3,
        6,
        9
    ];
print_r($basketItems);
var_dump($basketItems);
$c->locale= "123";
$c->conversationId =12;
$c->price = 3;
$c->installment = 4;
$c->paymentChannel = 5;
$c->basketId = 6;
$c->paymentGroup = 7;
$c->buyer = $buyer;
$c->shipping = $shippingAddress;
$c->billingAddress = $billingAddress ;
$c->basketItems=[$basketItems];
$c->enabledInstallments=$enabledInstallments;
$c->callbackUrl ="google.com";
$c->currency = "Turkey";
$c->paidPrice = "1.2";
  
   
echo "<pre>";
echo json_encode($c);



$apiKey = "sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789";
$secretKey = "sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg";
$requestString = "[locale=tr,conversationId=".$request_conversationId.",price=".$totalprice.",basketId=".$rbasketId.",paymentGroup=PRODUCT,buyer=[id=".$request_buyer_id.",name=".$request_buyer_name.",surname=".$request_buyer_surname.",identityNumber=".$request_buyer_identityNumber.",email=".$request_buyer_email.",gsmNumber=".$request_buyer_gsmNumber.",registrationDate=2013-04-21 15:12:09,lastLoginDate=2015-10-05 12:43:35,registrationAddress=".$request_buyer_registrationAddress.",city=".$request_buyer_city.",country=".$request_buyer_country.",zipCode=".$request_buyer_zipCode.",ip=85.34.78.112],shippingAddress=[address=".$request_shippingAddress_address.",zipCode=".$request_shippingAddress_zipCode.",contactName=".$request_shippingAddress_contactName.",city=".$request_shippingAddress_city.",country=".$request_shippingAddress_country."],billingAddress=[address=".$request_billingAddress_address.",zipCode=".$request_billingAddress_zipCode.",contactName=".$request_billingAddress_contactName.",city=".$request_billingAddress_city.",country=".$request_billingAddress_country."],basketItems=[[id=".$request_basketItems1_id.",price=0.5,name=Binocular,category1=Collectibles,category2=Accessories,itemType=PHYSICAL]],callbackUrl=http://localhost:8888/iyzi_new/sonuc.php,currency=TRY,paidPrice=".$totalprice.",enabledInstallments=[1, 2, 3, 6, 9]]";

//iyzi alt yapısına ait olan PKI String (apiKey + secretKey + requestString) 
echo "<br>";
echo $pki_string = $apiKey."".$secretKey."".$requestString;
?>