<?php

require_once('config.php');

$request = new \Iyzipay\Request\RetrieveCardListRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setCardUserKey("card user key");

$cardList = \Iyzipay\Model\CardList::retrieve($request, Config::options());


# print response
echo "<pre>";
print_r($cardList);
?>