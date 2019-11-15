<?php

class Customer{
private $id;
private $nic;
private $fname;
private $lname;
private $address;
private $email;
private $password;
private $username;
private $Tel;
private $Mobile;
private $feedback;


function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setNic($nic) { $this->nic = $nic; }
function getNic() { return $this->nic; }
function setFname($fname) { $this->fname = $fname; }
function getFname() { return $this->fname; }
function setLname($lname) { $this->lname = $lname; }
function getLname() { return $this->lname; }
function setAddress($address) { $this->address = $address; }
function getAddress() { return $this->address; }
function setEmail($email) { $this->email = $email; }
function getEmail() { return $this->email; }
function setPassword($password) { $this->password = $password; }
function getPassword() { return $this->password; }
function setUsername($username) { $this->username = $username; }
function getUsername() { return $this->username; }
function setTel($Tel) { $this->Tel = $Tel; }
function getTel() { return $this->Tel; }
function setFeedback($feedback) { $this->feedback = $feedback; }
function getFeedback() { return $this->feedback; }

}