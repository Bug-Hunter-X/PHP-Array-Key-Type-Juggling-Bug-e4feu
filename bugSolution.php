The solution involves ensuring all array keys are strings.  Explicitly cast numerical keys to strings to avoid implicit type coercion, thus preserving unique keys.

```php
<?php
$array = [];
$array[(string)1] = 'one';
$array[(string)1.0] = 'one point zero';
$array[(string)(int)1.5] = 'one point five';
var_dump($array);
?>
```
This version explicitly converts numerical keys to strings before assignment, resulting in distinct array keys and preventing the data loss.