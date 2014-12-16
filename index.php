<!doctype>
<html lang="en">
    <head>
        <title>ThatSnazzyGamer</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" type="text/css">
        <link rel="stylesheet" href="css/material.css" type="text/css" />
        <link rel="stylesheet" href="css/ripples.css" type="text/css" />
    </head>
    <style>
    </style>
    <body>

        <div class="jumbotron" style="margin-top: 0px; background-color: #3399FF;">
            <div class="container">
                <h1 style="text-align: center; text-shadow: 0px 1px 3px #222;"><a id="loadHome" style="text-decoration: none; color: White;" href="index.php">ThatSnazzyGamer</a></h1>
                <br />
                <div class="row">
                    <div class="col-md-offset-5">
                        <ul class="nav nav-tabs" style="background-color: #3399FF; border: none;">
                            <li><a id="loadHomeContent" href="#home">Home</a></li>
                            <li><a id="loadInfoContent" href="#info">Info</a></li>
                            <li><a id="loadWorkContent" href="#work">Work</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" id="contentContainer">
            <div class="well" id="mainContent">
            </div>
        </div>
        
        <div class="container" id="buttonContainer">
            <a title="Previous" id="prev" href="#prev" class="btn btn-info btn-fab btn-raised mdi-navigation-arrow-back"></a>
            <a title="Next" id="next" style="float: right;" href="#next" class="btn btn-info btn-fab btn-raised mdi-navigation-arrow-forward"></a>
        </div>
        
        <div class="jumbotron" style="margin-top: 0px; background-color: rgba(0, 0, 0, 0); box-shadow: 0 0 0 0;">
            <div class="container">
                <h6 style="text-align: center;"><a style="text-decoration: none; color: #bbb;" href="#home"> - ThatSnazzyGamer - </a></h6>
            </div>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/material.min.js"></script>
        <script src="js/ripples.min.js"></script>
        <script src="js/main.js"></script>
        
        <script>
        
            $(document).ready(function() {
                homeLoad();
            });
            
        </script>
        
    </body>
</html>