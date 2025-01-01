```php
function myFunction($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'apple') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$newFruits = myFunction($fruits);
print_r($newFruits); // Output: banana orange

// The problem occurs when you try to modify an array while iterating over it using foreach.
// If you use unset(), the array's internal pointer gets messed up, and you might skip elements.
```