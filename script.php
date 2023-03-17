<?php

// function full_copy( $source, $target ) {
//     if ( is_dir( $source ) ) {
//         @mkdir( $target );
//         $d = dir( $source );
//         while ( FALSE !== ( $entry = $d->read() ) ) {
//             if ( $entry == '.' || $entry == '..' ) {
//                 continue;
//             }
//             $Entry = $source . '/' . $entry; 
//             if ( is_dir( $Entry ) ) {
//                 full_copy( $Entry, $target . '/' . $entry );
//                 continue;
//             }
//             copy( $Entry, $target . '/' . $entry );
//         }

//         $d->close();
//     }else {
//         copy( $source, $target );
//     }
// }


echo getcwd();
$paths = glob("*.php");
// full_copy("js", "build/js");
// full_copy("css", "build/css");
// full_copy("images", "build/images");
for ($i=0; $i < count($paths); $i++) { 
    echo $paths[$i];
    echo "\n";
}
foreach ($paths as $key => $value) {
    echo $key;
    echo $value;
    if($value == "script.php") continue;
    ob_start();
    include($value);
    $a = ob_get_contents();
    ob_end_clean();
    echo $a;
    file_put_contents("build/" . str_replace(".php", ".html", $value), str_replace(".php", ".html", $a));
}    
?>