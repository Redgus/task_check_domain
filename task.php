<?php

    require "vendor/autoload.php";

    function check_domain($domain)
    {

        $request = new HTTP_Request2();

        $request->setUrl("http://api.whois.vu/?q=$domain");
        $request->setMethod(HTTP_Request2::METHOD_GET);
        $request->setConfig(array(
          'follow_redirects' => TRUE
        ));

        try {

          $response = $request->send();

          if ($response->getStatus() == 200) {  
            return json_decode( $response->getBody(), True );
          }
          else {
            echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
            $response->getReasonPhrase();
          }

        } catch(HTTP_Request2_Exception $e) {
           //
        }   

    }

    if ($_POST) {

        $domains = explode(',', $_POST['domains']);        

        foreach ($domains as $key) {

            $item = check_domain($key);

            if ($item['available'] == 'yes') {
                
                echo "
                <div class=\"alert alert-success col-12\" role=\"alert\">
                    Домен $key свободе !
                </div>";

            }elseif ($item['available'] == 'no' &&  $item['premium'] != 'yes') {

                echo "
                <div class=\"alert alert-danger col-12\" role=\"alert\">
                    Домен $key занят. Скрок истекает ". date("d-m-Y", $item['expires']) ."
                </div>";

            }elseif ($item['available'] == 'undefined' || $item['available'] == 'incorrect'){

                echo "
                <div class=\"alert alert-warning col-12\" role=\"alert\">
                    Домен $key не коректен !
                </div>";

            }elseif ($item['premium'] == 'yes') {

                echo "
                <div class=\"alert alert-dark col-12\" role=\"alert\">
                    Домен $key пермиумный.
                </div>";

            }else {

                echo "
                <div class=\"alert alert-secondary col-12\" role=\"alert\">
                    Информация о домене $key не найдена. 
                </div>";

            }
        
        }
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка доменна</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
</head>
<body>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-4">
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Перечислети домены через запятые</label>
                    <textarea class="form-control" id="domain" rows="3"></textarea>
                </div>
            </div>

            <div class="col-4">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success " onclick="send_check_domain()" >Поиск</button>
                </div>
            </div>
            

            <div class="col-4">
                <div id="board_domain" class="row">
                    <div class="alert alert-success col-12" role="alert">
                        Это уведомление об успехе — check it out!
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>

        function send_check_domain() {

            $.ajax({
                method: "POST",
                url: "dsad.php",
                data: { domains : $('#domain').val() }
            })
            .done(function( msg ) {

                $('#board_domain').html( msg );
                
            });

        }

    </script>

</body>
</html>
