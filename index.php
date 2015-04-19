<html>
    <head>
        <title>Spotify</title>
    </head>
    <body>
        <?php
            $amountOfElements = 10;
            //$response = file_get_contents('https://api.spotify.com/v1/search?q=ri hanna&type=artist');
            //$response = file_get_contents('https://api.spotify.com/v1/tracks/2KrxsD86ARO5beq7Q0Drfqa');
            $response = file_get_contents('https://api.spotify.com/v1/search?q=techno&type=playlist&limit='.$amountOfElements.'&market=us');
            //cho $data;
            //print_r($data);
            $json = json_decode($response, true);
            //print_r($json);
            for($i = 0; $i < $amountOfElements; ++$i){
                echo "<p>".$json["playlists"]["items"][$i]["external_urls"]["spotify"]."</p>";
                echo "<p>".$json["playlists"]["items"][$i]["id"]."</p>";
                //print_r($json["playlists"]["items"][0]["external_urls"]["spotify"]);
                //echo "<p>".$json["playlists"]["items"][$i]["images"][0]["url"]."</p>";
                //echo "<img src=".$json["playlists"]["items"][$i]["images"][0]["url"].">";
            }
            echo count($json["playlists"]["items"]);
        ?>
        <p>Hello World!</p>
    </body>
</html>