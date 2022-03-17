<?php
require_once('config.php');


  // code...
if(isset($_POST['gönder']))
{

$ConversationId=$_POST['ConversationId'];
$Email=$_POST['Email'];
$ExternalId=$_POST['ExternalId'];
$CardAlias=$_POST['CardAlias'];
$CardHolderName=$_POST['CardHolderName'];
$CardNumber=$_POST['CardNumber'];
$ExpireMonth=$_POST['ExpireMonth'];
$ExpireYear=$_POST['ExpireYear'];



$request = new \Iyzipay\Request\CreateCardRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($ConversationId);
$request->setEmail($Email);
$request->setExternalId($ExternalId);
$cardInformation = new \Iyzipay\Model\CardInformation();
$cardInformation->setCardAlias($CardAlias);
$cardInformation->setCardHolderName($CardHolderName);
$cardInformation->setCardNumber($CardNumber);
$cardInformation->setExpireMonth($ExpireMonth);
$cardInformation->setExpireYear($ExpireYear);
$request->setCard($cardInformation);

$card = \Iyzipay\Model\Card::create($request, Config::options());

    # print result
echo "<pre>";
print_r($card);
$status=$card->getStatus();
$cardUserKey=$card->getcardUserKey();
$d=$card->getbinNumber();

if($status == 'success')
{ echo "Kart Başarıyla eklenmiştir. BinNumber Şu şekildedir -> ".$d;

$request = new \Iyzipay\Request\RetrieveCardListRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setCardUserKey($cardUserKey);

$cardList = \Iyzipay\Model\CardList::retrieve($request, Config::options());
echo "<pre>";
print_r($cardList);
$cardat = $cardList->getStatus();

if($cardat == 'success')
{
  echo "tamamdır";
}
else {
  echo "Hatalı İşlem";
}

}else {
  echo "Hatalı işlem";
}


}else {


echo "Lütfen Formu Doldurun";
  // code...
}


?>
