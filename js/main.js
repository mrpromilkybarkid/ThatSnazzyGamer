                var currentState = "home";
                
                function homeLoad() {
                    $("#mainContent").html("Loading...");
                    $("#mainContent").load("homeContent.php");
                }
            
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
                        $("#contentContainer").show("slide", { direction: "right" }, 499);
                    } else if (currentState == "info") {
                        currentState = "home";
                        $("#contentContainer").hide("slide", { direction: "left" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                        $("#contentContainer").show("slide", { direction: "right" }, 499);
                    } else if (currentState == "work") {
                        currentState = "info";
                        $("#contentContainer").hide("slide", { direction: "left" }, 499);
                        $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                        $("#contentContainer").show("slide", { direction: "right" }, 499);
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
                            $("#contentContainer").show("slide", { direction: "right" }, 499);
                        } else if (currentState == "info") {
                            currentState = "home";
                            window.location.hash = "home";
                            $("#contentContainer").hide("slide", { direction: "left" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("homeContent.php"); nxt(); });
                            $("#contentContainer").show("slide", { direction: "right" }, 499);
                        } else if (currentState == "work") {
                            currentState = "info";
                            window.location.hash = "info";
                            $("#contentContainer").hide("slide", { direction: "left" }, 499);
                            $("#mainContent").delay(500).queue(function(nxt) { $(this).load("infoContent.php"); nxt(); });
                            $("#contentContainer").show("slide", { direction: "right" }, 499);
                        }   
                   }
                });

                $(function() {
                   $(document).tooltip(); 
                });