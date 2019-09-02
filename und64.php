<?php
if (empty($argv[1])) die("Usage: $argv[0] <file>\n");
$co = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
preg_match('/c0m\("([^"]+)/', file_get_contents($argv[1], false, stream_context_create($co)), $ud64);
echo "<?php\n".gzinflate(convert_uudecode(base64_decode(gzinflate(base64_decode(str_rot13($ud64[1]))))))."?>\n";
?>
