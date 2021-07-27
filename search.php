<?php
$fakeua = "User-Agent: " . "Google-Speech-Actions";
$opts = [
  "http" => [
    "method" => "GET",
    "header" => $fakeua
  ]
];
$googledata = file_get_contents("http://google.com/search?q=" . urlencode($_GET["q"]), false, stream_context_create($opts)) . '<script>document.getElementsByClassName("x")[0].innerHTML = "&times;";document.getElementsByClassName("KP7LCb")[0].innerHTML = "";document.querySelector("footer").innerHTML = "";document.getElementsByClassName("xpd")[1].innerHTML = "";</script>';
$googledata = str_replace("/search", "/search.php", $googledata);
$googledata = str_replace("/url", "/url.php", $googledata);

echo $googledata;
?>