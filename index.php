<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Uranus</title>
        <style>
            #wrapper {
                background-color: orange;
                width: 1000px;
                margin: 70px auto;
            }
        </style>
        
        <script>
            function demo() {
                window.location.href = 'http://spiegel.de';
            }
        </script>
    </head>
    <body>
        <?php      
            echo '<div id="wrapper">';
                echo '<h1>This is Uranus!</h1>';

                echo '<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, 
                    arcu.<br />In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                    justo. Nullam dictum felis eu pede mollis pretium.</p>';
            echo '</div>';
            
            echo '<p><a href="sub.php">Demonstration</a></p>';
            
            echo '<input type="submit" id="demo" onclick="demo();" />';
        ?>
    </body>
</html>
