<?php
    // The commands
    $commands = array(
        'echo $PWD',
        'whoami',
        './populate_downloads.sh'
    );

    // Run the commands for output
    $output = '';
    foreach ($commands AS $command){
        $tmp = shell_exec($command);
        $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
        $output .= htmlentities(trim($tmp)) . "\n";
    }

    // Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>openEHR download files populating script</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | openEHR download_files populating Script v0.1 |
 |___==___|  /              &copy; wolandscat 2015 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html> 
