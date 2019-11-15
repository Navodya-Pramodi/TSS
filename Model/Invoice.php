<?php

class Invoice{

private $invoicenumber;
private $invoicedate;
private $amount;

function setInvoicenumber($invoicenumber) { $this->invoicenumber = $invoicenumber; }
function getInvoicenumber() { return $this->invoicenumber; }
function setInvoicedate($invoicedate) { $this->invoicedate = $invoicedate; }
function getInvoicedate() { return $this->invoicedate; }
function setAmount($amount) { $this->amount = $amount; }
function getAmount() { return $this->amount; }

}