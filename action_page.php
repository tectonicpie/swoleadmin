<html>
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



Welcome <?php echo $_POST["uname"]; ?><br>
Your password is: <?php echo $_POST["psw"]; ?>

</body>
</html>