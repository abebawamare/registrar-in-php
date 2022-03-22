<?php
require_once 'DbConnection.php';
class Collage
{
 private $id;
 private $name;
 private $phone;
 //Setter & Getter
 public function setId($id)
 {
 $this->id = $id;
 }
 public function getId()
 {
 return $this->id;
 }
 public function setName($name)
 {
 $this->name = $name;
 }
 public function getName()
 {
 return $this->name;
 }
 public function setPhone($phone)
 {
 $this->phone = $phone;
 }
 public function getPhone()
 {
 return $this->phone;
 }
 //Methods
 public function register($collage)
 {
 $sql = "Insert into registrar.collage(name, phone) values(:name, :phone)";
 $dbConn = new DbConnection();
 $conn = $dbConn->connect();
 $query = $conn->prepare($sql);
 $query->bindValue(':name', $collage->getName());
 $query->bindValue(':phone', $collage->getPhone());
 $query->execute();
 $is_success = $conn->lastInsertId();
 return $is_success;
 }
}