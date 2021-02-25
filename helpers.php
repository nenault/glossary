<?php
// Get unique values from array of objects
function remove_duplicate( $keys ) {
    $values = array_map( function( $item ) {
        return substr($item->word, 0, 1);
    }, $keys );
    
    $unique_values = array_unique( $values );

    return array_values( array_intersect_key( $keys, $unique_values ) );
}

// Clean URL by removing spaces and lower casing
function formatUrl($str, $sep='-') {
    $res = strtolower($str);
    $res = preg_replace('/[^[:alnum:]]/', ' ', $res);
    $res = preg_replace('/[[:space:]]+/', $sep, $res);
    return trim($res, $sep);
}
?>