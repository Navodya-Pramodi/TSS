<?php

class Supplier{
   
    private $id;
	private $name;
	private $address;
	private $email;
	private $category;
	private $fax;
	private $Tel;


function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setName($name) { $this->name = $name; }
function getName() { return $this->name; }
function setAddress($address) { $this->address = $address; }
function getAddress() { return $this->address; }
function setEmail($email) { $this->email = $email; }
function getEmail() { return $this->email; }
function setCategory($category) { $this->category = $category; }
function getCategory() { return $this->category; }
function setFax($fax) { $this->fax = $fax; }
function getFax() { return $this->fax; }
function setTel($Tel) { $this->Tel = $Tel; }
function getTel() { return $this->Tel; }




}