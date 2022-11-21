<?php
session_start(); 
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');
  include "../case1/FBS.php";



// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51JjPtOIXxPbvwpsWt3OAO8pyQWfbpJflscDGG4NNlbnvXpbW0xdrBWoRNjuZIZLUfqmz6DFQAKWcnpcUmlSePwGY003Hm4nuPC');

// Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
//$email = $_SESSION['username'];


$userId = $_SESSION['username'];
$listOfAccount = getListOfpassword($userId);
//if(mysqli_num_rows($listOfStudent) > 0)
$row = mysqli_fetch_assoc($listOfAccount);
$userType = $row['userType'];




$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$FacilityId = $POST['FacilityId'];
$name = $POST['name'];
$category = $POST['category'];
$capacity = $POST['capacity'];
$facilityDetail = $POST['facilityDetail'];
$ratePerDay = $POST['ratePerDay'];
$status = $POST['status'];
$email = $POST['email'];
$token = $POST['stripeToken'];


echo $token;
echo $email;
    $dateRentStart = $_SESSION['startDate'];
    $dateRentEnd = $_SESSION['endDate'];
    

    $totalPrice = getTotalPrice($dateRentStart, $dateRentEnd, $FacilityId);
    $newPrice = $totalPrice * 100;


// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));

// Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => $newPrice,
    "currency" => "myr",
    "description" => $name,
    "customer" => $customer->id
  ));

  // Customer Data
    $customerData = [
    'id' => $charge->customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
  ];
  //$receipt =\Stripe\PaymentIntent::create([
   // 'amount' => $newPrice,
  //  'currency' => 'myr',
  //  'payment_method_types' => ['card'],
  //  'receipt_email' => $email,
  //]);
  // Instantiate Customer
  $customer = new Customer();
  
  // Add Customer To DB
  $customer->addCustomer($customerData);
  
  
  // Transaction Data
  $transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'email' => $email,
    'product' => $charge->description,
    'amount' => $totalPrice,
    'currency' => $charge->currency,
    'status' => $charge->status,
  ];
  
  // Instantiate Transaction
  $transaction = new Transaction();
  
  $id = $charge->id;
  // Add Transaction To DB
  $transaction->addTransaction($transactionData);
  
  bookFacility();
  // Redirect to success
  
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description.'&userType='.$userType);


?>