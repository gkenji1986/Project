		  


		   <?php
										$servername = "oniddb.cws.oregonstate.edu";
										$username = "nakashig-db";
										$password = "xXiNAmO8UFsRQc9d";
										$dbname = "nakashig-db";
										// Create connection
									
										$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
										if ($conn->connect_error) 
										{
										  die("Connection failed: " . $conn->connect_error);
										} 
										$value1 = $_POST['value1'];
										$value2 = $_POST['value2'];
										$value3 = $_POST['value3'];
										$sql = "INSERT INTO pokemon (poke_id,name,description) VALUES('$value1','$value2','$value3')";


										$result = $conn->query($sql);
										
										
    									// output data of each row
    									while($row = $result->fetch_assoc()) {
       									echo "id: " . $row["value1"]. " - Name: " . $row["value2"]. "Description: " . $row["value3"]. "<br>";
   										 }
   										
										$conn->close();
								
?>