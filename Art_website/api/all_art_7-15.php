<?php 
header('Content-Type: application/json');

include ('../db.php');
   $qry = "select * from  art WHERE year>= 2007 and year<=2015";
   $result = mysqli_query($conn, $qry);
   if ($result) {
      if (mysqli_num_rows($result)>0){ 
        $res = mysqli_fetch_all($result , MYSQLI_ASSOC);

        $data = [
            'status' => 200,
            'message' => 'Success',
            'data' => $res
        ];
        header('HTTP/1.1 200 success');
        echo json_encode($data);
      }else{ 
        $data= [
            'status' =>404,
            'message' =>'Data not found'
    
        ];
        header("HTTP/1.1 404 Not Found");
        echo json_encode($data);
      }
         

   } else { 
    $data = [ 
        'status' => 500,
        'messege' => 'Internal server error'
    ];
    header("HTTP/1.1 500 Internal Server Error");
    echo json_encode($data);

   }


?> 
