# Uncommon PHP Array Issues

This repository demonstrates some less-obvious but important quirks related to arrays in PHP.  These issues can lead to unexpected behavior if not properly understood.

**Issues covered:**

* **Iteration Order:** PHP's array iteration order is not always guaranteed, especially for mixed associative and numeric keys.
* **Case Sensitivity:** Array keys are case-sensitive. `'apple'` and `'Apple'` are considered different keys.
* **isset() and Null Values:** The `isset()` function returns `false` for null values, even if the key exists. Use `array_key_exists()` to check for key existence regardless of the value.

The `bug.php` file showcases these issues, and `bugSolution.php` offers improved solutions to mitigate the problems.
