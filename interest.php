#!/usr/bin/php
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

function Usage()
{
    print "Usage: php interest.php {amount to start with} {interest} [years]\n";
    print "Example: php interest.php 50000 3 10\n\n";
    print "Copyright 2014 - Jack-Benny Persson <jack-benny@cyberinfo.se>\n";
}

// Sanity check
if (!isset($argv[1]) || !isset($argv[2]))
{
    print "Please enter amount and interest!\n";
    Usage();
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
    printf ("After %d years with %.2f%% interest on %.2f you will have %.2f\n", 
            $years, $inter, $money, $mySavings);
}

// If the user did not enter years
else
{
    $mySavings = InteOnInte($money, $inter);
    printf ("After 1 year with %.2f%% interest on %.2f you will have %.2f\n", 
            $inter, $money, $mySavings);
}

?>
