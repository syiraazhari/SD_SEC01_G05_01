<?php
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');

// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51JjPtOIXxPbvwpsWt3OAO8pyQWfbpJflscDGG4NNlbnvXpbW0xdrBWoRNjuZIZLUfqmz6DFQAKWcnpcUmlSePwGY003Hm4nuPC');

// Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

echo $token;

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));

// Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => 500,
    "currency" => "myr",
    "description" => "Intro To React Course",
    "customer" => $customer->id
  ));

  // Customer Data
    $customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
  ];
  
  // Instantiate Customer
  $customer = new Customer();
  
  // Add Customer To DB
  $customer->addCustomer($customerData);
  
  
  // Transaction Data
  $transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' => $charge->currency,
    'status' => $charge->status,
  ];
  
  // Instantiate Transaction
  $transaction = new Transaction();
  
  // Add Transaction To DB
  $transaction->addTransaction($transactionData);

  // Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
?>