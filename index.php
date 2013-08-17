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
                        <p id="text_bilder">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, 
                        arcu.<br />In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                        justo. Nullam dictum felis eu pede mollis pretium.</p>';
                    echo '<p id="image_box">';
                        echo '<ul id="images">'."\n";
                            echo '<li><img src="./images/bird.jpg" alt="Naturbild einer Möwe" class="box_image"/>
                                </li>'."\n";
                            echo '<li><img src="./images/beach.jpg" alt="Ein einsamer Strand" class="box_image"/>
                                </li>'."\n";
                            echo '<li><img src="./images/garden.jpg" alt="Garten mit Schaukel" class="box_image"/>
                                </li>'."\n";
                            echo '<li><img src="./images/sea.jpg" alt="Steg am Meer" class="box_image"/>
                                </li>'."\n";
                        echo '</ul>'."\n";
               
                        echo '<a href="" id="back"><<<</a> | 
                            <a href="" id="forward">>>></a>
                            <span id="describer"></span>';
                    echo '</p>';
                    
                    echo '<h2>Beschreibung 1</h2>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque 
                        rutrum. Aenean imperdiet. Etiam ultricies nisi vel <br /> augue. 
                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam 
                        rhoncus.</p>'; 

                    echo '<h2>Beschreibung 2</h2>
                        <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper 
                        nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
                        porttitor eu, consequat vitae, eleifend ac, enim.</p>'; 
                                   
                echo '</div>';
        ?>
    </body>
</html>
