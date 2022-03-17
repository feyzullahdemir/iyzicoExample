<?php 


 ?>
 
 <html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="UTF-8">
    <title>İyzico Ödeme</title>

</head>
<body>
<div class="row">
<b>3d-Normale Ödeme Seçmeli</b>
<form action="karisiksonuc.php" method="POST">
            <fieldset>
                <legend>API Auth</legend>
                 <div class="form-group">
                    <label class="col-sm-4 control-label">3D Ödeme</label>

                    <input type="radio" name="force3D" value="true" id="force3D1">Evet
                    <input type="radio" name="force3D" value="false" id="force3D2" checked="checked">Hayır
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="installment">Installment</label>

                    <div class="col-sm-10">
                        <input type="text" name="installment" id="installment" class="form-control" value="1">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cardHolderName">cardHolderName</label>

                    <div class="col-sm-10">
                        <input type="text" name="cardHolderName" id="cardHolderName" class="form-control" value="John Doe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cardNumber">cardNumber</label>

                    <div class="col-sm-10">
                        <input type="text" name="cardNumber" id="cardNumber" class="form-control" value="5528790000000008">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="expireMonth">expireMonth</label>

                    <div class="col-sm-10">
                        <input type="text" name="expireMonth" id="expireMonth" class="form-control" value="12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="expireYear">expireYear</label>

                    <div class="col-sm-10">
                        <input type="text" name="expireYear" id="expireYear" class="form-control" value="2030">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cvc">cvc</label>

                    <div class="col-sm-10">
                        <input type="text" name="cvc" id="cvc" class="form-control" value="123">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">registerCardEnabled</label>

                    <input type="radio" name="registerCardEnabled" value="1" id="registerCardEnabled1">Evet
                    <input type="radio" name="registerCardEnabled" value="0" id="registerCardEnabled2" checked="checked">Hayır
                </div>

              
                
            </fieldset>

            <fieldset>
                <legend>Payment</legend>
                
                
                
                <div class="form-group">

                    <label class="col-sm-2 control-label" for="price">price</label>

                    <div class="col-sm-10">
                        <input type="text" name="request_price" id="price" data-validate="required" class="form-control" value="toplam tutar"  disabled>
                    </div>
                </div>
                <div class="form-group">


                    <label class="col-sm-2 control-label" for="paidPrice">paidPrice</label>

                    <div class="col-sm-10">
                        <input type="text" name="paidPrice" id="paidPrice" data-validate="required" class="form-control" value="alınan tutar"  disabled="">
                    </div>
                </div>
                <div class="form-group">


                    <label class="col-sm-2 control-label" for="currency">currency</label>

                    <div class="col-sm-10">
                        <input type="text" name="currency" id="currency" data-validate="required" class="form-control" value="TL" disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="basketId">basketId</label>

                    <div class="col-sm-10">
                        <input type="text" name="request_basketId" id="basketId" data-validate="required" class="form-control" value="B67832">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="paymentGroup">paymentGroup</label>

                    <div class="col-sm-10">
                        <input type="text" name="request_paymentGroup" id="paymentGroup" data-validate="required" class="form-control" value="PRODUCT" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="locale">locale</label>

                    <div class="col-sm-10">
                        <input type="text" name="request_locale" id="locale" class="form-control" value="tr">
                    </div>
                </div>

                

                <div>
                    <fieldset>
                        <legend>BasketItem 1</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemId">id</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_id" id="basketItemId" data-validate="required" class="form-control" value="BI103">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemPrice">price</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_price" id="basketItemPrice" data-validate="required" class="form-control" value="1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemName">name</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_name" id="basketItemName" data-validate="required" class="form-control" value="Kingston USB">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemType">itemType</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_itemType" id="basketItemType" data-validate="required" class="form-control" value="PHYSICAL" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemCategory1">category1</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_category1" id="basketItemCategory1" data-validate="required" class="form-control" value="Elektronik">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemCategory2">category2</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems1_category2" id="basketItemCategory2" data-validate="required" class="form-control" value="USB">
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div>
                    <fieldset>
                        <legend>BasketItem 2</legend>
                           <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemId">id</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_id" id="basketItemId" data-validate="required" class="form-control" value="BI102">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemPrice">price</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_price" id="basketItemPrice" data-validate="required" class="form-control" value="1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemName">name</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_name" id="basketItemName" data-validate="required" class="form-control" value="Kingston USB">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemType">itemType</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_itemType" id="basketItemType" data-validate="required" class="form-control" value="PHYSICAL" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemCategory1">category1</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_category1" id="basketItemCategory1" data-validate="required" class="form-control" value="Elektronik">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="basketItemCategory2">category2</label>

                            <div class="col-sm-10">
                                <input type="text" name="request_basketItems2_category2" id="basketItemCategory2" data-validate="required" class="form-control" value="USB">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <fieldset>
                    <legend>Buyer</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerId">id</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_id" id="buyerId" data-validate="required" class="form-control" value="BY789">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerName">name</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_name" id="buyerName" data-validate="required" class="form-control" value="John">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerSurname">surname</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_surname" id="buyerSurname" data-validate="required" class="form-control" value="Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerIdentityNumber">identityNumber</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_identityNumber" id="buyerIdentityNumber" data-validate="required" class="form-control" value="74300864791">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerEmail">email</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_email" id="buyerEmail" data-validate="required" class="form-control" value="email@email.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="buyerGsmNumber">gsmNumber</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_buyer_gsmNumber" id="buyerGsmNumber" data-validate="required" class="form-control" value="+905350000000">
                        </div>
                    </div>

                    <input type="hidden" name="request_buyer_registrationDate" id="buyerRegistrationDate" class="form-control" value="2013-04-21 15:12:09">

                    <input type="hidden" name="request_buyer_lastLoginDate" id="buyerLastLoginDate" class="form-control" value="2015-10-05 12:43:35">

                    <input type="hidden" name="request_buyer_registrationAddress" id="buyerRegistrationAddress" class="form-control" value="Maltepe">
                    <input type="hidden" name="request_buyer_city" id="buyerCity" class="form-control" value="Istanbul">
                    <input type="hidden" name="request_buyer_country" id="buyerCountry" class="form-control" value="Turley">
                    <input type="hidden" name="request_buyer_zipCode" id="buyerZipCode" class="form-control" value="34732">
                    <input type="hidden" name="request_buyer_ip" id="buyerIp" class="form-control" value="85.34.78.112">
                </fieldset>
                <fieldset>
                    <legend>Shipping address</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="shippingAddressAddress">address</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_shippingAddress_address" id="shippingAddressAddress" data-validate="required" class="form-control" value="Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="shippingAddressZipCode">zipCode</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_shippingAddress_zipCode" id="shippingAddressZipCode" data-validate="required" class="form-control" value="34742">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="shippingAddressContactName">contactName</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_shippingAddress_contactName" id="shippingAddressContactName" data-validate="required" class="form-control" value="Jane Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="shippingAddressCity">city</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_shippingAddress_city" id="shippingAddressCity" data-validate="required" class="form-control" value="Istanbul">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="shippingAddressCountry">country</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_shippingAddress_country" id="shippingAddressCountry" data-validate="required" class="form-control" value="Turkey">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Billing Address</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="billingAddressAddress">address</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_billingAddress_address" id="billingAddressAddress" data-validate="required" class="form-control" value="Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="billingAddressZipCode">zipCode</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_billingAddress_zipCode" id="billingAddressZipCode" data-validate="required" class="form-control" value="34742">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="billingAddressContactName">contactName</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_billingAddress_contactName" id="billingAddressContactName" data-validate="required" class="form-control" value="Jane Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="billingAddressCity">city</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_billingAddress_city" id="billingAddressCity" data-validate="required" class="form-control" value="Istanbul">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="billingAddressCountry">country</label>

                        <div class="col-sm-10">
                            <input type="text" name="request_billingAddress_country" id="billingAddressCountry" data-validate="required" class="form-control" value="Turkey">
                        </div>
                    </div>
                </fieldset>
          

                <input type="hidden" name="request_conversationId" id="conversationId" class="form-control" value="123456789">

                <button type="submit" name="gönder" class="btn btn-default">Başlat</button>
            </fieldset>
        </form>

        <?php

         ?>


         			

    </div>
    
</div>




</body></html>