<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/screen.css" type="text/css" />
        <script src="./js/jquery.js"></script>
        <script src="./js/jfunctions.js"></script>
        <title>Vehicles</title>
    </head>
    <body>
        <?php      
            echo '<div id="wrapper">';
                echo '<h1>Vehicles</h1>';
                
                echo '<div id="navi">
                        <ul>
                            <li class="navi_cell" id="nav_auto"><a href="#">Autos</a></li>
                            <li class="navi_cell"  id="nav_lkw"><a href="#">LKW</a></li>
                            <li class="navi_cell" id="nav_bike"><a href="#">Motorräder</a></li>
                        </ul>
                      </div>';

                echo '<div class="content" id="content_auto">
                    <h2>Autos</h2>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, 
                    arcu.<br />In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                    justo. Nullam dictum felis eu pede mollis pretium.</p></div>';
                
                echo '<div class="content" id="content_lkw">
                    <h2>LKW</h2>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque 
                    rutrum. Aenean imperdiet. Etiam ultricies nisi vel <br /> augue. 
                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam 
                    rhoncus.</p></div>'; 
                
                echo '<div class="content" id="content_bike">
                    <h2>Motorräder</h2>
                    <p>Nam quam nunc, blandit vel, 
                    luctus pulvinar, hendrerit id, lorem. 
                    Maecenas nec odio et ante tincidunt tempus.<br />Donec vitae sapien ut libero 
                    venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros 
                    faucibus tincidunt.<br />Duis leo. Sed fringilla mauris sit amet nibh.</p></div>';
                
                echo '</div>';
        ?>
    </body>
</html>
