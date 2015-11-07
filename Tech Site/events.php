<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
       
        

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
                        sectionsColor: ['#14AF97', '#4BBFC3', '#B22BF9', '#E5A457', '#7BAABE', '#722525'],
                        anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
                        menu: '#menu',
                        navigation: true,
                        navigationTooltips: ['One', 'Two', 'Three', 'Fourth', 'Fifth', 'Sixth'],
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
                  <li data-menuanchor="sixth"><a href="#sixth">Other Events</a></li>
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
                <div class="ms-section" id="left5">
                    <a href="index.php"><img src="img/logoFU.png" id="lg1" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
                    <h1>Other Events</h1>
                </div>
            </div>

            <div class="ms-right">
                <div class="ms-section" id="right1">
                    <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UOdTdGdDM1QW56OUdCSXU4Y05yRVNLNmY2WVJn/view?usp=sharing_eid"><img src="img/tech_wr.png" id="ev1"></a>
                        </div></center>
                    </div>
                     <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UOODVrTDgzS1FkS1k/view"><img src="img/tech_sym.png" id="ev2"></a>
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
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UOOEx3N0NyZ1E3dTA/view"><img src="img/on_4.png" id="ev5"></a>
                        </div>
                    </div>
                </div>

                <div class="ms-section" id="right3">
                   <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UOTVJJa1BtakJ4bjM4RjVpb2JfcXI2SFJQbHZr/view"><img src="img/pg_1.png" id="ev1"></a>
                        </div></center>
                    </div>
                     <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UOU1JVajJZQkw3V0xtbmk0MGhONzBvbTR4ZGhB/view"><img src="img/pg_2.png" id="ev2"></a>
                        </div>
                    </div>
                </div>
                <div class="ms-section" id="right3">
                     <div class="row">
                         <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                             <a href="https://drive.google.com/file/d/0BwBztmHSb0UOODlvV1M2R1BrQ0Z4VXp3dElWamdkclY2YnBN/view"><img src="img/nt_1.png" id="nt1"></a>
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
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UOTmt0Z0t5RFNDYjFHdWctR3p2YVUxbng1MVEw/view?usp=sharing_eid"><img src="img/nt_4.png" id="nt4"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UOLW1fNVBaUG9ELURRLTJVYXJEZU9SMmNXN0NB/view"><img src="img/nt_5.png" id="nt5"></a>
                        </div></center>
                    
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href="https://mail.google.com/mail/u/0/#inbox/14c1eab8619287ce"><img src="img/nt_6.png" id="nt6"></a>
                        </div>
                    </div>
                </div>
                <div class="ms-section" id="right3">
                    <div class="row">
                         <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                             <a href="https://drive.google.com/file/d/0BwBztmHSb0UOQldtZlVCN0hUWDBFYjg0X1FoaDdlbDhvXzBr/view?usp=sharing_eid"><img src="img/r_1.png" id="nt1"></a>
                        </div>
                   
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UOTjNHbHNWOHVqRWllbG4tMGdZbUcwb2ExY2JB/view?usp=sharing_eid"><img src="img/r_2.png" id="nt2"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UObmNSenkzdlFMbW5xUXRlU3k2Y1M1MllXcDNR/view"><img src="img/r_3.png" id="nt3"></a>
                        </div></center>
                    
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href=""><img src="img/r_4.png" id="nt4"></a>
                        </div>
                    </div>
                     <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UOWEZBNmJoS0poVW1zOGptaVJqenR4Z1AzMDg4/view?usp=sharing_eid"><img src="img/r_6.png" id="ev2"></a>
                        </div></center>
                    
                    </div>
                </div>
                  <div class="ms-section" id="right5">
                    <div class="row">
                         <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                             <a href="https://drive.google.com/file/d/0BwBztmHSb0UOOHBVTDhJN1ZsWTcwbkN4MFlobTNwN3V0RG1z/view"><img src="img/ot_1.png" id="nt1"></a>
                        </div>
                   
                        <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                            <a href="https://drive.google.com/file/d/0BwBztmHSb0UON3dfdzBzbS1sMUxKam5FUG5Gdk9hUWJWMmJn/view"><img src="img/ot_2.png" id="nt2"></a>
                        </div>
                    </div>
                                       <div class="row">
                        <center> <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <a href="https://drive.google.com/file/d/0BwBztmHSb0UOcm9QUU5LV3R2dk90bklBaGFQWGpCRkpNZzM0/view"><img src="img/ot_3.png" id="ev2"></a>
                        </div></center>
                    
                    </div>
                </div>
            </div>	
        </div>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
