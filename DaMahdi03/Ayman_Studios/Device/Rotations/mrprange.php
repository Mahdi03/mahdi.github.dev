<?php
    $doc = new DOMDocument( );
    $ele = $doc->createElement( 'Root' );
    $ele->nodeValue = 'Programming s fun';
    $doc->appendChild( $ele );
    $doc->save('mrprangetest.xml');
?>
<!--This Replaces All The XML With Whatever Is Being Written In This Code-->
<!--Which Is Helpful In Many Cases That Could Probably Be Done In a More Efficient Way!!!-->