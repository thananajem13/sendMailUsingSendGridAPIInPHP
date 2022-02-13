<?php
require_once 'config.php';
require 'vendor/autoload.php'; 
/* first new */ 
// $message = ""; 
$productDetails = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if( !empty($_POST['fullname']) && !empty($_POST['telephone']) && !empty($_POST['notes'] && !empty($_POST['productLink'])) && !empty($_POST['productDesc'])){

    $fullName = "FullName: ".$_POST['fullname'].".<br>";
    $telephone = "Telephone: ".$_POST['telephone'].".<br>";  
    $notes = "Notes: ".$_POST['notes'].".<br>";   
    foreach(array_combine($_POST['productLink'], $_POST['productDesc']) as $productLink => $productDesc){
        $productDetails .=  
        "
        <dl>
            <dt>".$productLink."</dt>
            <dd>".$productDesc."</dd>
        </dl>
        "; 
    } 
    // echo "**************";
    // echo "1. ".$fullName."<br>";
    // echo "2. ".$telephone."<br>";
    // echo "3. ".$notes."<br>";
    // echo "4. ".$productDetails."<br>";
    // echo "**************";
    $email = new \SendGrid\Mail\Mail(); 
$email->setFrom("kaseyc2@nsholidayv.com", "thana najem");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("thana.najem3@gmail.com", "Example User");
// $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
// $email->addContent("text/plain", $fullName.$telephone.$notes);
// echo $fullName.$telephone.$notes;
// $email->addContent("text/plain", $telephone);
// $email->addContent("text/plain", $notes);
// $email->addContent(
//     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
// );
$email->addContent(
    "text/html", $fullName.$telephone.$notes.$productDetails
);
// $email->addContent(
//     "text/html", $productDetails
// );
$sendgrid = new \SendGrid(SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
    // $message =$fullName.$telephone.$notes.$productDetails; 
}
}


/* last new */
 
?>