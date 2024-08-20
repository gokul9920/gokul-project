<?php
class project
{

  public $connection;
  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "admin123";
    $b = "bookingsystem";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $b);
    $this->connection = $conn;
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
  }

  public function get_person()
  {
    $sql = "select * from bookingsystem ";
    $query = $this->connection->prepare($sql);
    $query->execute();
    $result = $query->get_result();
    $person = $result->fetch_all(MYSQLI_ASSOC);
    return $person;
  
  }

  public function get_persons($id){
    $sql = "select * from  bookingsystem where id='$id'";
    $query = $this->connection->prepare($sql);
    $query->execute();
    $result = $query->get_result();
    $list= $result->fetch_assoc();
    return $list;
  }
  public function add_person($name,$bookingdate,$address,$email){
    $sql = "insert into bookingsystem(name,bookingdate,address,email)values('$name','$bookingdate','$address','$email')";
    // echo"$sql";


    $query = $this->connection->prepare($sql);
    if (!$query->execute()) {
      echo "Error: " . $query->error;

    }
  }
  public function update_person($name,$bookingdate,$address,$email,$id)
  {
    $sql = "update bookingsystem set name='$name',bookingdate='$bookingdate',address='$address',email='$email' where id='$id'";
    if (!$this->connection->query($sql)) {
    echo "Error: " ;

    }
  }
  public function delete_person($id)
  {
    $sql = "delete from bookingsystem where id='$id'";
    $query = $this->connection->prepare($sql);
    if (!$query->execute()) {
      echo "Error: " . $query->error;

    }
  }
  
}

