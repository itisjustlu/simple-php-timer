# Simple php timer
This is a simple solution for managing dates in php. There is no need to research how
to print dates. All you need is right here!


### How to install?
Run in your terminal
```
composer require lucasruroken/simple-php-timer
```

or just add into your composer.php
```
"require": {
    "lucasruroken/simple-php-timer": "dev-master"
},
```

### How to use?
First of all, you need to include de **Timer** class
```
use LucasRuroken\SimplePhpTimer\Timer;
```

and then wherever you want to get a datetime
```
echo (new Timer())->today();
```

This will print the current date. Note that the default format is **Y-m-d H:i:s**
You can simple override this by passing a format function
```
echo (new Timer())->today()->format('Y-d');
```

If you want, you can create a custom date like this
```
echo (new Timer())->yearsAgo(2)->monthsAgo(2);
```
This prints 2 years and 2 months ago

```
echo (new Timer())->years(3)->days(2);
```
This prints 3 years and 2 days from today

If you don't like to type **(new Timer())->function();**, 
you are able to call a static function
```
echo Timer::create()->yestarday();
```

### List of methods
* **->seconds()** + seconds
* **->secondsAgo()** - seconds
* **->minutes()** + minutes
* **->minutesAgo()** - minutes
* **->hours()** + hours
* **->hoursAgo()** - hours
* **->days()** + days
* **->daysAgo()** - days
* **->months()** + months
* **->monthsAgo()** - months
* **->years()** + years
* **->yearsAgo()** - years
* **->today()** - return current date
* **->yesterday()** - return yesterday date
* **->format()** Override default format
* **->get()** return time



