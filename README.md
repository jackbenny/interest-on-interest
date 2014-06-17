# Interest On Interest #
This is a simple function I've made with PHP to calculate interest on interest.
It's nothing fancy at all, but maybe it will be useful to someone. I've made it
while learning PHP.

## Usage ##
The script can be run both from a browser and from the terminal.

### CLI usage ###
First argument to the script is the amount of money on your savings account, the
second argument is the interest (without the percent sign) and the third
(optional) argument is the number of years. For example if you have 50.000 in
your savings account, and the interest is 3% and you want to know how much
money you will have after 8 years:

    php interest.php 50000 3 8

If you leave out the number of years the script will calulate the savings after
one year.

### Browser usage ###
Just put the script on a webserver with PHP and run access it from your browser.
Then fill in the form and hit 'Calculate' and the script will calculate your
savings for you.

Please note that the script does NOT do any form of data validation!

## Copying ##
Copyright 2014 Jack-Benny Persson (jack-benny@cyberinfo.se)

This program is release under GNU GPL version 2, please see the LICENSE file
more information.
