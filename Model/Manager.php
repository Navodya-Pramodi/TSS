<?php



class Manager
{
	private $mid;
private $nic;
private $fname;
private $lname;
private $address;
private $email;
private $password;
private $tel;
private $workhours;
private $username;

function setMid($mid) { $this->mid = $mid; }
function getMid() { return $this->mid; }
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
function setTel($tel) { $this->tel = $tel; }
function getTel() { return $this->tel; }
function setWorkhours($workhours) { $this->workhours = $workhours; }
function getWorkhours() { return $this->workhours; }
function setUsername($username) { $this->username = $username; }
function getUsername() { return $this->username; }

}