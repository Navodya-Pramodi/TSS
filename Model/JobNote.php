<?php


class JobNote{

private $jnum;
private $date;
private $problem;
private $warenty;

function setJnum($jnum) { $this->jnum = $jnum; }
function getJnum() { return $this->jnum; }
function setProblem($problem) { $this->problem = $problem; }
function getProblem() { return $this->problem; }
function setDate($date) { $this->date = $date; }
function getDate() { return $this->date; }
function setWarenty($warenty) { $this->warenty = $warenty; }
function getWarenty() { return $this->warenty; }

}