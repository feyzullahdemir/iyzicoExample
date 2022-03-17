<?php




//$pki_string="sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId=123456789,token=".$token"]";
//$pki_string='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId=123456789,binNumber=542119]';
//$base64 = base64_encode(sha1($pki_string, true));



//echo $base64;
//echo $pki_string;
class Emp {
      public $locale = "";
      public $conversationId  = "";
      public $token = "";
   }
 
$tokena ='3f3e060b-7f3e-48c7-ad58-629ca3d73dc6';    
$e = new Emp();
$e->locale = "tr";
$e->conversationId  = "123456789";
$e->token = $tokena;
  

echo json_encode($e);




$pki_string='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId=123456789,token=3f3e060b-7f3e-48c7-ad58-629ca3d73dc6]';
//$pki_string='sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk123456789sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg[locale=tr,conversationId=123456789,binNumber=542119]';
$base64 = base64_encode(sha1($pki_string, true));
echo $base64;



$rest = curl_init();
 curl_setopt($rest,CURLOPT_URL,"https://sandbox-api.iyzipay.com/payment/iyzipos/checkoutform/auth/ecom/detail");
 curl_setopt($rest,CURLOPT_POST,1);
 curl_setopt($rest,CURLOPT_POSTFIELDS,json_encode($e));
 curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);
 curl_setopt($rest,CURLOPT_HTTPHEADER ,array('Accept: application/json','Content-type: application/json','Authorization: IYZWS sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk:'.$base64 ,'x-iyzi-rnd: 123456789'));
 $response = curl_exec($rest);
 curl_close($rest);
 echo "<pre>";
$resultJson = json_decode($response,true);
var_dump($resultJson);
echo "<hr>";
if($resultJson["status"] == "success")
{
    echo "Ödeme işlemi Tamamlandı";
}else {

    echo "Hatalı İşlem";
    // code...
}

?>