<?php 
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
    // Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

   
    $text = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis accusamus enim assumenda earum fugit iste. odio nulla officiis iure dolore, ad excepturi in perferendis. amet vel officia dolorum debitis nisi?';
    $newTexts = explode(".", $text);
    var_dump($newTexts);
?>