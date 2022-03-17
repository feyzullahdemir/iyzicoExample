<?php 


 ?>
 
 <html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="UTF-8">
    <title>İyzico Ödeme</title>

</head>
<body>
<div class="row">
<b>Taksit Sorgulama</b>
<form action="taksitsorgu.php" method="POST">
            <fieldset>
                <legend>Kart Taksit Sorgulama</legend>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="binnumber">bınNumber</label>

                    <div class="col-sm-10">
                        <input type="text" name="binnumber" id="binnumber" class="form-control" value="554960">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="price">Price</label>

                    <div class="col-sm-10">
                        <input type="text" name="price" id="price" class="form-control" value="100">
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