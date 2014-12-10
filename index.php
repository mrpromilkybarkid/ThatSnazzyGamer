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
                <h1 style="text-align: center; text-shadow: 0px 1px 10px #111;"><a id="loadHome" style="text-decoration: none; color: White;" href="index.php">ThatSnazzyGamer</a></h1>
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
                <h6 style="text-align: center;"><a style="text-decoration: none; color: #bbb;" href="#home"> - ThatSnazzyGamer - Use The Arrow Keys To Change Sections - </a></h6>
            </div>
        </div>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/material.min.js"></script>
        <script src="js/ripples.min.js"></script>
        
        <script>
            
            $(document).ready(function() {
                
                var currentState = "home";
                
                $("#mainContent").html("Loading...");
                $("#mainContent").load("homeContent.php");
            
                $("#loadHomeContent").click(function() {
                    currentState = "home";
                    $("#contentContainer").hide("slide", { direction: "right" }, 499);
                    $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                    $("#contentContainer").effect("slide", 500);
                });

                $("#loadInfoContent").click(function() {
                    currentState = "info";
                    $("#contentContainer").hide("slide", { direction: "right" }, 499);
                    $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                    $("#contentContainer").effect("slide", 500);
                });

                $("#loadWorkContent").click(function() {
                    currentState = "work";
                    $("#contentContainer").hide("slide", { direction: "right" }, 499);
                    $("#mainContent").delay(500).queue(function(nxt) { $(this).load("workContent.php"); nxt(); });
                    $("#contentContainer").effect("slide", 500);
                });
                
                $("#next").click(function() {
                    if (currentState == "home") {
                        currentState = "info";
                        $("#contentContainer").hide("slide", { direction: "right" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                        $("#contentContainer").effect("slide", 500); 
                    } else if (currentState == "info") {
                        currentState = "work";
                        $("#contentContainer").hide("slide", { direction: "right" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("workContent.php"); nxt(); });
                        $("#contentContainer").effect("slide", 500);
                    } else if (currentState == "work") {
                        currentState = "home";
                        $("#contentContainer").hide("slide", { direction: "right" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                        $("#contentContainer").effect("slide", 500);
                    }
                });
                
                $("#prev").click(function() {
                    if (currentState == "home") {
                        currentState = "work";
                        $("#contentContainer").hide("slide", { direction: "left" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("workContent.php"); nxt(); });
                        $("#contentContainer").show("slide", { direction: "left" }, 499);
                    } else if (currentState == "info") {
                        currentState = "home";
                        $("#contentContainer").hide("slide", { direction: "left" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                        $("#contentContainer").effect("slide", 500);
                    } else if (currentState == "work") {
                        currentState = "info";
                        $("#contentContainer").hide("slide", { direction: "left" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                        $("#contentContainer").effect("slide", 500); 
                    }
                });
                
                $("body").keyup(function(e) {
                    if (event.which == 39) {
                        if (currentState == "home") {
                            currentState = "info";
                            window.location.hash = "info";
                            $("#contentContainer").hide("slide", { direction: "right" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                            $("#contentContainer").effect("slide", 500); 
                        } else if (currentState == "info") {
                            currentState = "work";
                            window.location.has = "work";
                            $("#contentContainer").hide("slide", { direction: "right" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("workContent.php"); nxt(); });
                            $("#contentContainer").effect("slide", 500);
                        } else if (currentState == "work") {
                            currentState = "home";
                            window.location.hash = "home";
                            $("#contentContainer").hide("slide", { direction: "right" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                            $("#contentContainer").effect("slide", 500);
                        }   
                    }
                });
                
                $("body").keyup(function(e) {
                   if (event.which == 37) {
                        if (currentState == "home") {
                            currentState = "work";
                            window.location.has = "work";
                            $("#contentContainer").hide("slide", { direction: "left" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("workContent.php"); nxt(); });
                            $("#contentContainer").show("slide", { direction: "left" }, 499);
                        } else if (currentState == "info") {
                            currentState = "home";
                            window.location.hash = "home";
                            $("#contentContainer").hide("slide", { direction: "left" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                            $("#contentContainer").effect("slide", 500);
                        } else if (currentState == "work") {
                            currentState = "info";
                            window.location.hash = "info";
                            $("#contentContainer").hide("slide", { direction: "left" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                            $("#contentContainer").effect("slide", 500); 
                        }   
                   }
                });

                $(function() {
                   $(document).tooltip(); 
                });
                
            });
            
        </script>
        
    </body>
</html>