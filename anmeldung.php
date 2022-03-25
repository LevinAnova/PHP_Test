<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>BioStrohTech GmbH - ges&uuml;nder Leben mit Technik</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
        <div id="menu">
                <ul>
                        <li><a href="index.html">Startseite</a></li>
                        <li><a href="produkte.html">Unsere Produkte</a></li>
                        <li class="current_page_item"><a href="formular.html">Anmeldeformular</a></li>
                        <li><a href="obenende.html">Obenende</a></li>
                        <li><a href="splitting.html">Splitting</a></li>
               </ul>
        </div>
        <!-- end #menu -->
        <div id="header">
                <div id="logo">
                        <h1><a href="www.strohschnieder.de">BioStrohTech   </a></h1>
                        <p> ges&uuml;nder Leben mit Technik</a></p>
                </div>
        </div>
        <!-- end #header -->
        <div id="page">
        <div id="page-bgtop">
        <div id="page-bgbtm">
                <div id="content">
                       <?php 
                $firma = $_POST["Firma"];
                $geschlecht = $_POST["geschlecht"];
                $vorname = $_POST["Vorname"];
                $nachname = $_POST["Nachname"];
                $strasse = $_POST["Strasse"];
                $plz = $_POST["PLZ"];
                $ort = $_POST["Ort"];
                $land = $_POST["Land"];
                $gebi = $_POST["gebi"];
                $abteilung = $_POST["Abteilung"];
                $email = $_POST["Email"];
                $agb = $_POST["agb"];
                $bestaetigt = $_POST["Bestaetigt"];
                $info = $_POST["info"];

                echo $firma;
                echo "<br>"; 
                echo $geschlecht;
                echo "<br>";
                if ($geschlecht =="m") {echo "Hallo Herr 😁".$vorname." ".$nachname."! Du hast dich erfolgreich angemeldet ";}
                elseif ($geschlecht == "f") {
                        echo "Hallo Frau 😒 ".$vorname." ".$nachname."! Du hast dich erfolgreich angemeldet ";
                }
                else{
                        echo "Sie haben kein Geschlecht angegeben";
                }
                echo "<br>"; 
                echo "Du wohnst in der ".$strasse." in ".$plz. " ".$ort."";
                echo "<br>"; 
                echo "<br>";
                echo $info;

        	        ?>
                <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                        <ul>
                                <li>
                                        <div id="search" >
                                        <form method="get" action="#">
                                                <div>
                                                        <input type="text" name="s" id="search-text" value="" />
                                                        <input type="submit" id="search-submit" value="GO" />
                                                </div>
                                        </form>
                                        </div>
                                        <div style="clear: both;">&nbsp;</div>
                                </li>
                                <li>
                                        <h2>... Danke!</h2>
                                        <p>Danke, dass Sie Interesse an unserem Unternehmen zeigen. Besuchen Sie uns doch mal pers&ouml;nlich oder schauen Sie bei einer unserer n&auml;chsten Wohlt&auml;tigkeitsveranstaltungen herein!</p>
                                </li>
                                <li>
                                        <h2>Arbeitsbereiche</h2>
                                        <ul>
                                                <li><a href="#">Landwirtschaft</a></li>
                                                <li><a href="#">Forstwirtschaft</a></li>
                                                <li><a href="#">Medizin</a></li>
                                                <li><a href="#">Biotechnologie</a></li>
                                                <li><a href="#">Raumfahrt</a></li>
                                                <li><a href="#">Schaftechnik</a></li>
                                        </ul>
                                </li>

                        </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
        </div>
        </div>
        </div>
        <!-- end #page -->
</div>
        <div id="footer">
                <p>Copyright (c) 2011 strohi.de. Alle Rechte vorbehalten. Design by Herrn Heuk&uuml;rzer.</p>
        </div>
        <!-- end #footer -->
</body>
</html>