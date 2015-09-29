<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
        <title>multiscroll.js - split multi-scrolling pages plugin</title>
        <meta name="author" content="Alvaro Trigo Lopez" />
        <meta name="description" content="multiscroll plugin by Alvaro Trigo. Create divided multi-scrolling pages with two splited vertical layouts or panels." />
        <meta name="keywords"  content="multiscroll,jquery,alvaro,trigo,plugin,divided,splitscreen,screen,panels,layouts,vertical,split,splited" />
        <meta name="Resource-type" content="Document" />


        <link rel="stylesheet" type="text/css" href="jquery.multiscroll.css" />		
        <link rel="stylesheet" type="text/css" href="examples.css" />	
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="vendors/jquery.easings.min.js"></script>
        <script type="text/javascript" src="jquery.multiscroll.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#myContainer').multiscroll({
                        sectionsColor: ['#14AF97', '#4BBFC3', '#B22BF9', '#E5A457', '#7BAABE'],
                        anchors: ['first', 'second', 'third', 'fourth', 'fifth'],
                        menu: '#menu',
                        navigation: true,
                        navigationTooltips: ['One', 'Two', 'Three', 'Fourth', 'Fifth'],
                        loopBottom: true,
                        loopTop: true
                    });
                });
            </script>
    </head>
    <body>


        <center><ul id="menu">
                <li data-menuanchor="first"><a href="#first">Technical</a></li>
                <li data-menuanchor="second"><a href="#second">Online</a></li>
                <li data-menuanchor="third"><a href="#third">Programming</a></li>
                <li data-menuanchor="fourth"><a href="#fourth">Non Technical</a></li>
                <li data-menuanchor="fifth"><a href="#fifth">Robotics</a></li>
            </ul></center>

        <div id="myContainer">

            <div class="ms-left" >
                <div class="ms-section" id="left1">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Technical Events</h1>

                </div>

                <div class="ms-section" id="left2">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Online Events</h1>
                </div>

                <div class="ms-section" id="left3">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Programming Events</h1>
                </div>

                <div class="ms-section" id="left3">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Non Technical Events</h1>
                </div>

                <div class="ms-section" id="left3">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Robotics Events</h1>
                </div>
            </div>

            <div class="ms-right">
                <div class="ms-section" id="right1">
                    <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href=""><img src="img/tech_wr.png" id="ev1"></a>
                        </div></center>
                    </div>
                     <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <a href=""><img src="img/tech_sym.png" id="ev2"></a>
                        </div>
                    </div>
                </div>

                <div class="ms-section" id="right2">
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href=""><img src="img/on_1.png" id="ev3"></a>
                        </div></center>
                   
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/on_2.png" id="ev4"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/on_3.png" id="ev5"></a>
                        </div>
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/on_4.png" id="ev5"></a>
                        </div>
                    </div>
                </div>

                <div class="ms-section" id="right3">
                   <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href=""><img src="img/pg_1.png" id="ev1"></a>
                        </div></center>
                    </div>
                     <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <a href=""><img src="img/pg_2.png" id="ev2"></a>
                        </div>
                    </div>
                </div>
                <div class="ms-section" id="right3">
                     <div class="row">
                         <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                             <a href=""><img src="img/nt_1.png" id="nt1"></a>
                        </div>
                   
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/nt_2.png" id="nt2"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href=""><img src="img/nt_3.png" id="nt3"></a>
                        </div></center>
                    
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/nt_4.png" id="nt4"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href=""><img src="img/nt_5.png" id="nt5"></a>
                        </div></center>
                    
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/nt_6.png" id="nt6"></a>
                        </div>
                    </div>
                </div>
                <div class="ms-section" id="right3">
                    <div class="row">
                         <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                             <a href=""><img src="img/r_1.png" id="nt1"></a>
                        </div>
                   
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/r_2.png" id="nt2"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href=""><img src="img/r_3.png" id="nt3"></a>
                        </div></center>
                    
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/r_4.png" id="nt4"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href=""><img src="img/r_6.png" id="ev2"></a>
                        </div></center>
                    
                    </div>
                </div>
            </div>	
        </div>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
