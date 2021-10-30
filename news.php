<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
</head>
<body>
    <?php
    $dbServername = "localhost";
    $dbPassword = "}T7P/1g4mt%#pSE!";
    $dbUsername = "id16409495_root";
    $dbName = "id16409495_db_covid_news";

    function create_database(){
        
        $conn = new mysqli('localhost', 'id16409495_root', '}T7P/1g4mt%#pSE!');
        
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "CREATE DATABASE db_covid_news";
        if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        $conn = new mysqli('localhost', 'id16409495_root', '}T7P/1g4mt%#pSE!', 'id16409495_db_covid_news');
        
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $create_table = "CREATE TABLE news_table(
            news_title TEXT(500),
            news_description TEXT(500),
            news_url TEXT(500),
            news_img TEXT(500)
        )";

        if ($conn->query($create_table) === TRUE) {
            //echo "Table news_table created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }

    function postNews(){
        $connect_db = new mysqli('localhost', 'id16409495_root', '}T7P/1g4mt%#pSE!', 'id16409495_db_covid_news');
        

        if($connect_db->connect_error){
            die("Connection failed:" . $connect_db->connect_error);
        }
        $reset_table = "DELETE FROM news_table";
        if($connect_db->query($reset_table) === TRUE){
            //echo "Deleted successfully";
        } else {
            //echo "Error: " .$reset_table. " " .$connect_db->error;
        }
        $json_string = file_get_contents('http://newsapi.org/v2/top-headlines?country=ph&q=covid&pageSize=5&apiKey=4f487dc24d554149b4a359ce23a9dc56');
        $response_array = json_decode($json_string, false);
        $res = $response_array->articles;
        //var_dump($res);
        foreach($res as $value){
            $titleNews = $value->title;
            $descriptionNews = $value->description;
            $urlNews = $value->url;
            $imgNews = $value->urlToImage;
            $updateTable = "INSERT INTO news_table VALUES ('$titleNews', '$descriptionNews', '$urlNews', '$imgNews')";       
            
            if($connect_db->query($updateTable) === TRUE){
                //echo "New record created successfully";
            } else {
                //echo "Error: " .$updateTable. " " .$connect_db->error;
            }
            
            //echo "<br>[Title: $titleNews Description: $descriptionNews url: $urlNews img: $imgNews]";
        }
    }
    //create_database();
    postNews();
    ?>
    <div id="news-container">
        <h1 class="title">Latest News</h1>
        <ul>
        <?php
        $connect_db = new mysqli('localhost', 'id16409495_root', '}T7P/1g4mt%#pSE!', 'id16409495_db_covid_news');

        if($connect_db->connect_error){
            die("Connection failed:" . $connect_db->connect_error);
        }
        $ret_data = "SELECT * FROM news_table";
        $res_data = $connect_db->query($ret_data);
        while($row = $res_data->fetch_assoc()){            
            echo    '
                    <li style="padding: 1em;">
                    <a target="_blank" href='.$row["news_url"].'><img src='.$row["news_img"].' style="width: 350px; height: 250px; border-radius: 10%"></a>
                            <div style="padding: 1em;">
                            <a target="_blank" href='.$row["news_url"].'><h3>'.$row["news_title"].'</h3></a>
                                <p>'.$row["news_description"].'</p>    
                            </div>
                    </li>
                    ';
        }
        ?>
        </ul>
    </div>
</body>
</html>