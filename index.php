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
                    echo '<h1 id="top_headline">Vehicles</h1>';

                    echo '<ul id="headlines"></ul>';

                    echo '<h2 id="bilder">Bilder</h2>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, 
                        arcu.<br />In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                        justo. Nullam dictum felis eu pede mollis pretium.</p>';
                    
                    echo '<ul class="slideshow">';
                        echo '<li><img src="./images/beach.jpg" alt="bild" /></li>';
                        echo '<li><img src="./images/bird.jpg" alt="bild" /></li>';
                        echo '<li><img src="./images/garden.jpg" alt="bild" /></li>';
                        echo '<li><img src="./images/sea.jpg" alt="bild" /></li>';                       
                    echo '</ul>';

                    echo '<h2>Beschreibung</h2>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque 
                        rutrum. Aenean imperdiet. Etiam ultricies nisi vel <br /> augue. 
                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam 
                        rhoncus.</p>'; 

                    
                                   
                echo '</div>';
        ?>
    </body>
</html>
