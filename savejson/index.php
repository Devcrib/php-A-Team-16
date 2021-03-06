<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>

    <div class = "wrapper">
       <h3>REST API with JSON</h3>
       <span><i class="error"> </i></span>
        <div class = "inner-wrapper">
            <form method="POST" class="operate">
                <div class = "form-group">
                    <textarea name="json" value="" class = "form-control"></textarea>
                </div>
                <div class = "form-group">
                    <input type="submit" name = "submit" value = "Send" class = "btn btn-send">
                </div>
            </form>
        </div>
        <div class = "inner-url">
            <input type="text" value = "" style="width: 40%;" class = "form-url">
        </div>
    </div>
    <span id="output"></span>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/index.js"></script>
    </body>
</html>
