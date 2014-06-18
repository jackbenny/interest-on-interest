<?php
/* A simple function to calculate 'interest on interest' together with
   a simple usage of the function.
   Copyright 2014 - Jack-Benny Persson <jack-benny@cyberinfo.se> 
   Released under GNU GPL v.2 */

function InteOnInte($amount, $interest, $year=1)
{
    $totalAmount = pow($interest / 100 + 1, $year) * $amount;
    return $totalAmount;
}

function CLI_Usage()
{
    print "Usage: php interest.php {amount to start with} {interest} [years]\n";
    print "Example: php interest.php 50000 3 10\n\n";
    print "Copyright 2014 - Jack-Benny Persson <jack-benny@cyberinfo.se>\n";
}

// If we are running from the terminal
if (!array_key_exists("HTTP_USER_AGENT", $_SERVER))
{
    // Sanity check
    if (!isset($argv[1]) || !isset($argv[2]))
    {
        print "Please enter amount and interest!\n";
        CLI_Usage();
        exit(1);
    }

    // Declare some variables
    $money = $argv[1];
    $inter = $argv[2];

    // If the user entered years
    if (isset($argv[3]))
    {
        $years = $argv[3];
        $mySavings = InteOnInte($money, $inter, $years);
        printf ("After %d years with %.2f%% interest on %.2f you will have " .
        "%.2f\n", $years, $inter, $money, $mySavings);
    }

    // If the user did not enter years
    else
    {
        $mySavings = InteOnInte($money, $inter);
        printf ("After 1 year with %.2f%% interest on %.2f you will have " .
        "%.2f\n", $inter, $money, $mySavings);
    }
}

// If we are running from a browser
else
{
    print ("<!DOCTYPE html>\n" .
           "<html>\n<head><title>Intereset On Interest</title></head>\n<body>" .
           "<h1>Interest On Interest calculator</h1>\n" .
           "<form method=\"GET\" action=\"$_SERVER[PHP_SELF]\">\n" .
           "Money: <input type=\"text\" name=\"money\"/><br />\n" .
           "Interest: <input type=\"text\" name=\"interest\"/><br />\n" .
           "Years:<input type=\"text\" name=\"years\"/><br />\n" .
           "<input type=\"submit\" value=\"Calculate\">\n" .
           "</form>\n<br />\n");
    
    if (array_key_exists("money", $_GET) && array_key_exists("interest", $_GET)
        && array_key_exists("years", $_GET))
    {
        print ("After $_GET[years] years with $_GET[interest]% interest on " .
               "$_GET[money] you will have ");
        $savings = InteOnInte($_GET['money'], $_GET['interest'], $_GET['years']);
        printf ("%.2f\n", $savings);
    }
   
    print "</body>\n</html>\n";   
 
}
?>
