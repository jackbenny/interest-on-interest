# Interest On Interest #
This is a simple function I've made with PHP to calculate interest on interest.
It's nothing fancy at all, but maybe it will be useful to someone. I've made it
while learning PHP.

## Usage ##
First argument to the script is the amount of money on your savings account, the
second argument is the interest (without the percent sign) and the third
(optional) argument is the number of years. For example if you have 50.000 in
your savings account, and the interest is 3% and you want to know how much
money you will have after 8 years:

    php interest.php 50000 3 8

Or if you've made the script executable you can run it as follow:

    ./interest 50000 3 8

If you leave out the number of years the script will calulate the savings after
one year.

## Copying ##
Copyright 2014 Jack-Benny Persson (jack-benny@cyberinfo.se)

This program is release under GNU GPL version 2, please see the LICENSE file
more information.
