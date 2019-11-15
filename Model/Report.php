<?php

class Report
{
private $Reno;
private $content;

function setReno($Reno) { $this->Reno = $Reno; }
function getReno() { return $this->Reno; }
function setCreateDate($CreateDate) { $this->CreateDate = $CreateDate; }
function getCreateDate() { return $this->CreateDate; }
function setContent($content) { $this->content = $content; }
function getContent() { return $this->content; }

}