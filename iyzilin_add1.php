<?php 


 ?>
 
 <html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="UTF-8">
    <title>İyzico Ödeme</title>

</head>
<body>
<div class="row">
<b>Doğrudan ödeme</b>
<form action="iyzilinkadd2.php" method="POST">
            <fieldset>
                <legend>İyzi Link Add</legend>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="Name">Name</label>

                    <div class="col-sm-10">
                        <input type="text" name="Name" id="Name" class="form-control" value="John Doe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="Description">Description</label>

                    <div class="col-sm-10">
                        <input type="textarea" name="Description" id="Description" class="form-control" value="......">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="Price">Price</label>

                    <div class="col-sm-10">
                        <input type="text" name="Price" id="Price" class="form-control" value="5">
                    </div>
                </div>
           
           <div class="form-group">
                    <label class="col-sm-4 control-label">AddressIgnorable</label>

                    <input type="radio" name="AddressIgnorable" value="true" id="registerCardEnabled1">true
                    <input type="radio" name="AddressIgnorable" value="false" id="registerCardEnabled2" checked="checked">false
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">InstallmentRequest</label>

                    <input type="radio" name="InstallmentRequest" value="true" id="registerCardEnabled1">true
                    <input type="radio" name="InstallmentRequest" value="false" id="registerCardEnabled2" checked="checked">false
                </div>

               <div class="form-group">
                    <label class="col-sm-2 control-label" for="Limit">Limit</label>

                    <div class="col-sm-10">
                        <input type="text" name="Limit" id="Limit" class="form-control" value="1">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="image">İmage</label>

                    <div class="col-sm-10">
                         <input type="file" id="image" name="image">
                    </div>
                </div>

              
                
            </fieldset>
</div>

                <div>
            

                <input type="hidden" name="request_conversationId" id="conversationId" class="form-control" value="123456789">

                <button type="submit" name="gönder" class="btn btn-default">Başlat</button>
            </fieldset>
        </form>

        <?php

         ?>


         			

    </div>
    
</div>




</body></html>