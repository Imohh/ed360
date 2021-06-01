
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>













<style>
body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }

</style>




<?php

    $string = 'New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf
    New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf
    New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf
    New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf New project aksfhvwfqwf ekqe fqw fwjbfkqw f qwfjkbwf';

                    $string = strip_tags($string);
                    if (strlen($string) > 300) {

                      $stringCut = substr($string, 0, 300);
                      $endPoint = strrpos($stringCut, ' ');

                      $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                      $string .='...<a href="/this/story">Read More</a>';

                    }
                    echo "$string";
                  ?>



















    </body>
</html>