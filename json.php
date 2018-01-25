<?php
	
	$json_url = ("https://github.com/karthicksaravanaphp/MongoDB/edit/master/json.php");
	//$json_url=("test.json");
    $data = file_get_contents ($json_url);
    $json = json_decode($data, true);

    //echo ('<pre>');
    //print_r ($json);
    //echo ('</pre>');

    //echo ('<br>output:</br>');
	//$data=array();
	//$names = array();
					$conn = new MongoClient('localhost');
					$db = $conn->testdb;
					$collection = $db->androidjson;
    foreach ($json as $key => $value)
    {
		
		$product[$key]=$value;
		$a=$value;
		$b=$key;
		if($b=="email")
		{
			$a=$value;
			try 
			{
				if (filter_var($a, FILTER_VALIDATE_EMAIL)) 
				{
					
					
				}
							
				
				
				else 
				{
					header('Content-type: application/json; charset=utf-8');
					$response["Status"] = "0";  
					$response["message"] = "Email Not Valid";  
					echo json_encode($response);
					//echo("$a is not a valid email address");
					exit();
				}
				
				//else
				//{
				//}
			}
			catch(customException $e)
			{
				header('Content-type: application/json; charset=utf-8');
				$response["Status"] = "0";  
				$response["message"] = "error";  
				echo json_encode($response);
			}
		
			//echo $a;
		}
		//if($b=="phone")
				//{
					//echo $b;
					//$a=$value;
					//try
					//{
						//echo $a;
						//$mobileregex = "/^[0-9]{10}+$/" ;
						//if(preg_match($mobileregex, $a) === 1)
						//{
							
						//}
						//else
						//{
							//header('Content-type: application/json; charset=utf-8');
							//$response["Status"] = "0";  
							//$response["message"] = "Not Valid Phone Number";  
							//echo json_encode($response);
							//echo("$a is not a valid email address");
							//exit();
						//}
					//}
					//catch(customException $e)
					//{
						
					//}
				//}
	    }	
	
	//var_dump($data);
	
    //echo "Name:$value ,phone: $value ,email: $value, password: $value<br />";
	    //echo $key . '=>' . $value . '<br/>';
		
		//echo $a[]= $key . '=>'  . $value .'<br/>';
		
		//echo $rows[] = "('" . $key . "', '" . $value . "')"; 
		
		//$conn = new MongoClient('localhost');

        // connect to test database
       //$db = $conn->testdb;
	  // $a=$key . '=>'  . $value .'<br/>';
		//$a=$value;
		
        // a new products collection object
        //$collection = $db->androidjson;
		//$product = array($a);
		//$product=array(
					//'name'=>"$value",
					//'phone'=>"$value",
					//'email'=>"$value",
					//'password'=>"$value");
		
		//$collection->insert($product);
//$product=array($product);
        //echo 'Product inserted with ID: ' . $product['_id'] . "\n";
        //$myJSON = json_encode($product['_id']);
		
		
	//echo $collection;
  
	$collection->insert($product);
	header('Content-type: application/json; charset=utf-8');
        $response["Status"] = "1";  
			$response["message"] = "Data successfully Inserted.";  
			echo json_encode($response);
	//echo $myJSON;
?>
