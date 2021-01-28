<?php
// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");


        


$diskArray = [
    array(
        "id"=>1,
        "title"=>"Beatles, Help",
        "picture"=> "Beatels_Help.jpg",
        "description"=>"Allbumet Help av The Beatles.",
        "price"=>"150 kr"
    ),
    array(
        "id"=>2,
        "title"=>"Beatles, For Sale",
        "picture"=> "Beatels_for_sale.jpg",
        "description"=>"Allbumet Beatles for sale med The Beatles.",
        "price"=>"120 kr"
    ),
    array(
        "id"=>3,
        "title"=>"Djungelboken del 2",
        "picture"=> "Djungelboken_Del_2.jpg",
        "description"=>"En skiva som har Djungelboken del 2 som ljudbok.",
        "price"=>"70 kr"
    ),
    array(
        "id"=>4,
        "title"=>"Du är den ende",
        "picture"=> "Du_Ar_Den_Ende.jpg",
        "description"=>"Populär skiva med Lill Lindfors.",
        "price"=>"80 kr"
    ),
    array(
        "id"=>5,
        "title"=>"Karl-Bertil Jonssons Julafton",
        "picture"=> "Karl_Bertil_Jonsons_jul.jpg",
        "description"=>"Skiva med soundtrack från en teaterpjäs om Karl-Bertil Jonsons julafton.",
        "price"=>"150 kr"
    ),
    array(
        "id"=>6,
        "title"=>"StatusQuo",
        "picture"=> "Status_quo.jpg",
        "description"=>"Skiva med rockbandet Status Quo.",
        "price"=>"150 kr"
    ),
    array(
        "id"=>7,
        "title"=>"Sven-Ingvars",
        "picture"=> "Sven_Ingvars.jpg",
        "description"=>"Detta är en skiva med ett dansband som var populärt på 70 och 80-talet.",
        "price"=>"100 kr"
    ),
    array(
        "id"=>8,
        "title"=>"Världens bästa Karlsson",
        "picture"=> "Karlsson_pa_taket.jpg",
        "description"=>"En skiva som har Karlsson på taket som ljudbok.",
        "price"=>"20 kr"
    ),
    array(
        "id"=>9,
        "title"=>"Lady och Lufsen",
        "picture"=> "Lady_och_lufsen.jpg",
        "description"=>"En skiva sm har Lady och lufsen som ljudbok.",
        "price"=>"82 kr"
    ),
    array(
        "id"=>10,
        "title"=>" Anitas och Televinkens trafikskiva",
        "picture"=> "Anitas_och_Televinkens_trafikskiva.jpg",
        "description"=>"Skiva med Anita och Televinken som gör en resa till landet och pratar om trafikregler",
        "price"=>"100 kr"
    ),
    
    
    ];
// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($diskArray, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
// Skicka JSON till klienten.
echo $json;
