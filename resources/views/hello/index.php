<!-- #PHP-templates -->
<!-- #for displaying Date -->
<!-- <html>
    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size:15px; color:#787CB5;}
            h1 {font-size:100px; text-align:right; color:#474A8A;
                margin:0px 0px 0px 0px;}
        </style>
    </head>
    <body>
        <h1>Index</h1>
        <p>This is a sample page for php templates.</p>
        <p><?php echo $msg; ?></p>
        <p><?php echo date("Y年n月j日"); ?></p>

    </body>
</html> -->

<!-- #passing route parameter to templates -->

<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size:15px; color:#787CB5;}
            h1 {font-size:100px; text-align:right; color:#474A8A;
                margin:0px 0px 0px 0px;}
        </style>
    </head>
    <body>
        <h1>Index</h1>
        <p><?php echo $msg; ?></p>
        <p>ID=<?php echo $id ?></p>

    </body>
</html>


