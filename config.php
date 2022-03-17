<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-OInnUVaq5h7rS306Ifa1OTgYdC1bOqyk');
        $options->setSecretKey('sandbox-JXNnEcyPyqYob8VzL67YhrOIJcPXyjdg');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');
        return $options;
    }
}