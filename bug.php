In PHP, a common yet subtle issue arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
$myArray = ['a' => 1, 'b' => 2, 1 => 3];

foreach ($myArray as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
```

The order of output might be unexpected. PHP does not guarantee a specific order for associative arrays. The numerical keys might not be iterated in ascending order. It will depend on internal implementation details.  This can cause problems if you rely on a particular iteration order for processing data.

Another related problem is that array keys are case-sensitive: 

```php
$myArray = ['apple' => 1, 'Apple' => 2];

echo $myArray['apple']; // Outputs 1
echo $myArray['Apple']; // Outputs 2
```
The keys 'apple' and 'Apple' are considered distinct.

Another uncommon but crucial error is related to the `isset()` function with arrays that have `null` as value. `isset()` will return `false` if a value is `null`, even if the key exists. For example:
```php
$myArray = ['a' => null];

if (isset($myArray['a'])) {
    echo 'Key a exists'; //this will not be executed
} else {
    echo 'Key a does not exist';
}
```
To check if the key exists regardless of its value (including `null`), you should use `array_key_exists()` instead.
