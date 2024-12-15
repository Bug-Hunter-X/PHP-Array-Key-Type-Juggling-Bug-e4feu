# PHP Array Key Type Juggling Bug

This repository demonstrates a subtle bug in PHP related to how it handles array keys.  When non-string values are used as keys, PHP's type juggling can lead to unexpected key collisions and data loss. The `bug.php` file contains the buggy code, and `bugSolution.php` offers a solution.

## Bug Description
PHP automatically casts non-string keys to strings. This behavior is not always obvious and can cause issues when you expect unique keys based on numerical values with different types (integer, float). The main problem arises when these numerical keys are implicitly converted to the same string representation, thus overwriting data unintentionally.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output due to key collisions.