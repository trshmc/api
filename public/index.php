<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require '../src/vendor/autoload.php';
$app = new \Slim\App;
//endpoint get greeting
$app->get('/getName/{fname}/{lname}', function (Request $request, Response

$response, array $args) {
$name = $args['fname']." ".$args['lname'];
$response->getBody()->write("Hello, $name");
return $response;

});
//endpoint postName
$app->post('/postName', function (Request $request, Response $response, array $args)
{

    $data=json_decode($request->getBody());
    $fname =$data->fname ;
    $lname =$data->lname ;
    //Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
    
    $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    
    PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO names (fname, lname)
    VALUES ('". $fname ."','". $lname ."')";
    
    
    $conn->exec($sql);
    $response->getBody()->write(json_encode(array("status"=>"success","data"=>null)));
    
    } catch(PDOException $e){
    $response->getBody()->write(json_encode(array("status"=>"error",
    "message"=>$e->getMessage())));
    }
    $conn = null;

return $response;
});

//endpoint printName
$app->post('/printName', function (Request $request, Response $response, array $args) {
    $data = [
        [
            "lname" => "hortizuela",
            "fname" => "manny"
        ],
        [
            "lname" => "licayan",
            "fname" => "arnold"
        ]
    ];

    $responseData = [
        "status" => "success",
        "data" => $data
    ];


    $response->getBody()->write(json_encode($responseData));
    return $response->withHeader('Content-Type', 'application/json');
});

// endpoint updateName
$app->put('/updateName', function (Request $request, Response $response, array $args)
{

    $data = json_decode($request->getBody());
$fname = $data->fname;
$lname = $data->lname;

// Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $data->id; 

   
    $sql = "UPDATE names SET fname = :fname, lname = :lname WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
} catch (PDOException $e) {
    $response->getBody()->write(json_encode(array("status" => "error", "message" => $e->getMessage())));
} finally {
    $conn = null;
}

return $response;
});


//endpoint deleteName
$app->delete('/deleteName', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody());
    $id = $data->id; // Assuming you pass the 'id' in the JSON request

    // Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $sql = "DELETE FROM names WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $response->getBody()->write(json_encode(array("status" => "success", "data" => null)));
    } catch (PDOException $e) {
        $response->getBody()->write(json_encode(array("status" => "error", "message" => $e->getMessage())));
    } finally {
        $conn = null;
    }

    return $response;
});

$app->run();
?>