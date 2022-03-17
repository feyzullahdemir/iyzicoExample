<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="UTF-8">
    <title>İyzico Ödeme</title>

</head>
<body>
<div class="row">
<b>Kart Saklama</b>
<form action="kartsaklamason.php" method="POST">
            <fieldset>
                <legend>Kart Saklama</legend>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="ConversationId">ConversationId</label>

                    <div class="col-sm-10">
                        <input type="text" name="ConversationId" id="ConversationId" class="form-control" value="123456789" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="Email">Email</label>

                    <div class="col-sm-10">
                        <input type="text" name="Email" id="Email" class="form-control" value="email@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="ExternalId">ExternalId</label>

                    <div class="col-sm-10">
                        <input type="text" name="ExternalId" id="ExternalId" class="form-control" value="deneme deneme">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="CardAlias">CardAlias</label>

                    <div class="col-sm-10">
                        <input type="text" name="CardAlias" id="CardAlias" class="form-control" value="card alias">
                    </div>
                </div>
              
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="CardHolderName">CardHolderName</label>

                    <div class="col-sm-10">
                        <input type="text" name="CardHolderName" id="CardHolderName" class="form-control" value="john doe">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="CardNumber">CardNumber</label>

                    <div class="col-sm-10">
                        <input type="text" name="CardNumber" id="CardNumber" class="form-control" value="5528790000000008">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="ExpireMonth">ExpireMonth</label>

                    <div class="col-sm-10">
                        <input type="text" name="ExpireMonth" id="ExpireMonth" class="form-control" value="12">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" for="ExpireYear">ExpireYear</label>

                    <div class="col-sm-10">
                        <input type="text" name="ExpireYear" id="ExpireYear" class="form-control" value="2030">
                    </div>
                </div>
                

             <button type="submit" name="gönder" class="btn btn-default">Başlat</button>    
            </fieldset>
</form>

