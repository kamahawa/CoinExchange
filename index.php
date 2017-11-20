<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <label>Create address wallet : </label>
                <input type="button" id="btn_create_address" value="Create" onclick="return createAddress();">
            </div>
            <div class="col-md-3 col-md-offset-3">
                <p id="output_address"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <label>Balance : </label>
                <input type="button" id="btn_create_address" value="Balance" onclick="return getBalance();">
            </div>
            <div class="col-md-3 col-md-offset-3">
                <p id="output_balance"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <label>Change USD to Bitcoin : </label>
                <input type="text" id="coin">
                <input type="button" id="btn_create_address" value="Change" onclick="return changeCoin();">
            </div>
            <div class="col-md-3 col-md-offset-3">
                <p id="output_coin"></p>
            </div>
        </div>
    </div>
</body>
</html>
