<?php
  // To save some time we are going to create a class to hold the database connection information.
  // As mentioned in the PDF we will define our class using the class keyword followed by the name of our class.
  class Database{
    // A private keyword, as the name suggests is the one that can only be accessed from within the class in which it is defined. 
    // All the keywords are by default under the public category unless they are specified as private or protected.
    private $connection;
    //A constructor allows you to initialize an object's properties upon creation of the object. 
    //If you create a __construct() function, 
    //PHP will automatically call this function when you create an object from a class.
    function __construct(){
   
      $this->connect_db();
    }
   
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'appointment');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create($finame,$laname,$email,$phonenum,$services,$oppointmentDate){
      $sql = "INSERT INTO appoinment_db (finame, laname, email, phonenum, services, oppointmentDate) VALUES ('$finame', '$laname', '$email', '$phonenum','$services','$oppointmentDate')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($id=null){
		    $sql = "SELECT * FROM appoinment_db";
		    if($finame){
          $sql .= " WHERE finame=$finame";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
  }
  $database = new Database();
?>
