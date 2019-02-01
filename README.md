# Running tests

Install dependencies using Composer:
```
composer install
```

There are two main scripts. They uses one of two classes: `Ticks\TickClass` and `Ticks\NoTickClass`.

## TickClass

This is an example class declaring ticks at the top of class/script.

## NoTickClass

This class does not declare ticks globally. Instead, it declares ticks in scope.


# Task

Both classes were given a task: in main loop call parent class logger function.
Parent class logger function does log 3 times some message. So calling it 
twice should give us 6 consecutive messages.

Those series should be intertwined with a message: `-- other event --`.
Each line contains timestamp.

What happens? Well. Try running:

* `php ticks_on_class.php` - class-scope defined ticks
* `php tichs_on_function.php` - method-scop defined ticks
