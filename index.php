<?php
$fakeua = "User-Agent: " . "Google-Speech-Actions";
$opts = [
  "http" => [
    "method" => "GET",
    "header" => $fakeua
  ]
];
$googledata = file_get_contents("http://google.com", false, stream_context_create($opts)) . '<script>document.getElementById("mngb").innerHTML = "";var hplogo = document.getElementById("hplogo");hplogo.src = "/logo.php";hplogo.removeAttribute("width");hplogo.removeAttribute("height");document.getElementById("footer").innerHTML = "";document.getElementsByClassName("fl")[0].innerHTML = "";document.getElementsByClassName("ds")[2].innerHTML = "";</script>';
$googledata = str_replace("/search", "/search.php", $googledata);
echo $googledata;
?>