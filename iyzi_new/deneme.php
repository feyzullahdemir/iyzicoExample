<?php
$token='64ea5585-bdcb-4d6d-8923-c125966fb543';
$sandbox='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg';
$pki_string="[locale=".$token.",conversationId=".$token.",token=".$token."]";

echo $pki_string;


$content = '{
    "locale": "tr",
    "conversationId": "123456789",
    "price": "1.0",
    "basketId": "B67832",
    "paymentGroup": "PRODUCT",
    "buyer": {
        "id": "BY789",
        "name": "John",
        "surname": "Doe",
        "identityNumber": "74300864791",
        "email": "email@email.com",
        "gsmNumber": "+905350000000",
        "registrationDate": "2013-04-21 15:12:09",
        "lastLoginDate": "2015-10-05 12:43:35",
        "registrationAddress": "Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1",
        "city": "Istanbul",
        "country": "Turkey",
        "zipCode": "34732",
        "ip": "85.34.78.112"
    },
    "shippingAddress": {
        "address": "Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1",
        "zipCode": "34742",
        "contactName": "Jane Doe",
        "city": "Istanbul",
        "country": "Turkey"
    },
    "billingAddress": {
        "address": "Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1",
        "zipCode": "34742",
        "contactName": "Jane Doe",
        "city": "Istanbul",
        "country": "Turkey"
    },
    "basketItems": [
        {
            "id": "BI101",
            "price": "0.3",
            "name": "Binocular",
            "category1": "Collectibles",
            "category2": "Accessories",
            "itemType": "PHYSICAL"
        },
        {
            "id": "BI102",
            "price": "'.$token.'",
            "name": "Game code",
            "category1": "Game",
            "category2": "Online Game Items",
            "itemType": "VIRTUAL"
        },
        {
            "id": "BI103",
            "name": "Usb",
            "price": "0.2",
            "category1": "Electronics",
            "category2": "Usb / Cable",
            "itemType": "PHYSICAL"
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
echo $content;


echo "<hr>";
$variable = 10;
$string1 = (string)$variable;
echo gettype($string1);
echo $string1;





echo "<hr>";
$price = 1 ;
$price1 = 1.5 ;
echo "$price+$price1";

echo "<hr>";

class checkoutForm {
      public $locale = "";
      public $conversationId  = "";
      public $token = "";
      public $price = "";
      public $basketId= "";
      public $paymentGroup="";
      public $buyer="";
      public $request_buyer_id="";
      public $request_buyer_name="";
      public $request_buyer_surname="";
      public $request_buyer_identityNumber="";
      public $request_buyer_email="";
      public $request_buyer_gsmNumber="";
      public $request_buyer_registrationDate="";
      public $request_buyer_lastLoginDate="";
      public $request_buyer_registrationAddress="";
      public $request_buyer_country="";
      public $request_buyer_zipCode="";
      public $request_buyer_ip="";
      public $request_buyer_city="";
      public function __construct($apiKey, $secretKey, $url) {
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey; 
        $this->url = $url;
        }
      public function ($locale)
      {
        $this ->locale = $locale;
      }






   }
 

$tokena ="asdasdasd";  

$b->request_buyer_id = "tr";
$b->request_buyer_name  = "asd";
$b->request_buyer_identityNumber = 123;
echo json_encode($b);


$e->locale = "tr";
$e->conversationId  = "asd";
$e->token = $tokena;
$e->price = 5 ;
$e->basketId = "B1230";
$e->buyer=(json_encode($b,true));
echo  json_encode($e);
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo "<br>";
echo json_encode([0=>"a", 1=>[$array], 9=>"c"]), "\n";











?>


