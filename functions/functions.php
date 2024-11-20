<?php 
   
    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "<pre>";
    }
    
    function urls($value){
        // var_dump($value);
        return $_SERVER['REQUEST_URI'] === $value;
    }


    // fetch All useerProduct
    function fetchAllUser(){
        $conn = dbConnect();

        $sql = "SELECT * FROM userTable";
        $result = $conn->query($sql);
        
        $usersData = [];
        
        if ($result->num_rows > 0) {
            // Fetch all rows and store them in the $users array
            while ($row = $result->fetch_assoc()) {
                $usersData[] = $row;
            }
        }
        $conn->close();
        return $usersData;
    }


?>