<?php


 class Receiptionist{




 	private $tid;
private $nic;
private $fname;
private $lname;
private $address;
private $email;
private $password;
private $username;
private $tel;
private $skill;
private $telephone;


function setTid($tid) { $this->tid = $tid; }
function getTid() { return $this->tid; }
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
function setTel($tel) { $this->tel = $tel; }
function getTel() { return $this->tel; }
function setSkill($skill) { $this->skill = $skill; }
function getSkill() { return $this->skill; }
function setTelephone($telephone) { $this->telephone = $telephone; }
function getTelephone() { return $this->telephone; }

 }