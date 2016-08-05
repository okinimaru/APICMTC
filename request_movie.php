<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/lab/movie.json');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $exec = curl_exec($curl);
    curl_close($curl);

    //print_r(json_decode($exec));
    $data = json_decode($exec);

    foreach ($data as $key => $value)
    {
      echo 'ID: '. $value->Id;
      echo '<br>';
      echo 'IMDB: '. $value->ImdbId;
      echo '<br>';
      echo 'OriginalTitle: '. $value->OriginalTitle;
      echo '<hr>';
    }

	//echo var_dump(json_decode($exec));

?>
