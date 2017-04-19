<?php

echo "welcome " . $_POST["uname"] . " <br>";
echo "Your password is:" .$_POST["psw"];

 header("Location: hello.html");
         exit();
?>

<!-- <html>
<body>

[default] 
aws_access_key_id = AWS access key ID goes here 
aws_secret_access_key = Secret key goes here         

$sdk = new Aws\Sdk([
    'region'   => 'us-west-2', // US West (Oregon) Region
    'version'  => 'latest'  // Use the latest version of the AWS SDK for PHP
]);

// Create a new DynamoDB client
$dynamodb = $sdk->createDynamoDb();






</body>
</html> -->