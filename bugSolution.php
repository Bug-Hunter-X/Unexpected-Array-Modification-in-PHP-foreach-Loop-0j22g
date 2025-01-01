```php
function myFunction($arr) {
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'apple') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$newFruits = myFunction($fruits);
print_r($newFruits); // Output: banana orange

//This solution iterates from the end of the array, avoiding pointer issues
```