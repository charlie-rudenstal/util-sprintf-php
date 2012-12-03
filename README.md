Jalet\Util\Sprintf
===============

PHP's sprintf for named params with type casting.

###
```php
use Jalet\Util;

echo Sprintf::f('I am %age:int% years old.', array('age' => '25y'));
// I am 25 years old.

echo Sprintf::f('Oh my god, it's %val:bool:str% believer.', array('val' => 1)); 
// Oh my god, it's true.

echo Sprintf::f('My cat is %color%.', array('color' => 'brown'));
// My cat is brown.


echo Sprintf::f("INSERT INTO table (username, active) VALUES ('john.doe', %active:bool%);", array('active' => false));
// INSERT INTO table (username, active) VALUES ('john.die', 0);

```