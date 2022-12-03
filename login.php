<?php
        $id = $_GET['id_param'];
        $pw = $_GET['pw_param'];

        $db_conn = mysqli_connect("127.0.0.1", "dokingkns0909", "dokingkns0909", "login");
        if($db_conn == false){
                echo mysqli_connect_error();
        }

        else {
                $query = "select * from user where id='{$id}' and pw='{$pw}'";
                try{
                $result = mysqli_query($db_conn, $query);
                echo "query : {$query} <br>";

                if($result == false) {
                        echo mysqli_error($db_conn);
                }
                else {
                        $row = mysqli_fetch_array($result);
                        if($row) {
                                echo "Hello {$row['id']}, login succes!";
                        }
                        else{
                                echo "login failed";
                        }
                }
                }
                catch(Exception $e){
                        echo "error";
                }

        mysqli_close($db_conn);
}
?>                            
