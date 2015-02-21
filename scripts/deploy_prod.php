<?php
    // The commands
    $commands = array(
        'echo $PWD',
        'whoami',
        './deploy_prod.sh'
    );

    // Run the commands for output
    $output = '';

    foreach ($commands AS $command){
        $tmp = shell_exec($command);
        $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
        $output .= htmlentities(trim($tmp)) . "\n";
    }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PRODUCTION WEBSITE DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Production Website deployment script v0.1 |
 |___==___|  /              &copy; wolandscat 2015 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html> 
