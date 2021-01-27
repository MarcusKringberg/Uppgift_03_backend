

<?php


class App
{
    public static $endpoint = "http://localhost/Inlammningsuppgift_3/SkivorAPI.php";
    

    public static function main()
    {
        



        try {
            $array = self::getData();
            // print_r($array);
            self::allProducts($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public static function getData() #Hämtar information om skivorna och skickar data om dessa i Jasonformat. 
    {
        $json = @file_get_contents(self::$endpoint);
        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);
        return json_decode($json, true);//Konverterar datan från Json-format till vanligt format.
        
    }
    public static function allProducts($array)
    {

        $result = "<div class='row'>";
        if(isset($_GET['show']))
         $show =$_GET['show'];
         else{
         echo json_encode("{ Du maste skriva in hur manga skivor som ska visas. Skriv ? show= och sedan antalet skivor i webblasaren }");
         system(exit);}


         
         if ($show > 0 && $show <= 10){
         foreach ($array as $key => $value) {
            if($key == $show && isset($_GET['show']))
            break;
            $picture = $value['picture'];
            $title = $value['title'];
            $price = $value['price'];
            $description = $value['description'];
            $stock = "Current stock " . rand(0, 50);
            $result .= "
                <div class='col-lg-4 col-md-6 mb-4'>
                    <div class='card h-100'>
                        <a><img class='card-img-top' src=Bilder/$picture  alt=''></a>
                        <div class='card-body'>
                            <h4 class='card-title'>
                                <a>$title</a>
                            </h4>
                            <h5>$$price</h5>
                            <p class='card-text'>$description</p>
                            <h5>$stock</h5>
                        </div>
                    </div>
                </div>";
        }
        $result .= "</div>";
        echo $result;
        
    }
    
    else{ 
    echo json_encode("{Felaktigt varde pa variabeln show. Vardet pa variabeln show maste vara mellan 1 och 10.}");
    exit;}
        
        }
        

    
    
}

