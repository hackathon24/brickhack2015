<html>
    <head>
        <title>Spotify</title>
    </head>
    <body>
        <?php
            
            $data = file_get_contents('https://api.spotify.com/v1/search?q=rihanna&type=artist');
            echo $data;
        ?>
        <p>Hello World!</p>
    </body>
</html>