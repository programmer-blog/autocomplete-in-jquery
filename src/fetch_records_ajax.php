<?php
    namespace App;
    
    use App\DB;

    include_once('../vendor/autoload.php');
    $db = new Database();
    $result = [];

    if(isset($_GET['data']['term'])) {
        $term = $_GET['data']['term'];
        $books = $db->fetch($term);
        foreach($books as $key => $book) {
            array_push($result, $book['title']);
        }
    } else {
        $result['status'] = 400;
        $result['message'] = 'Enter a search term';
    }

    echo json_encode($result);