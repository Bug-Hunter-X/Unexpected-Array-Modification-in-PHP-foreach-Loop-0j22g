# PHP foreach Loop with unset() Issue
This repository demonstrates a common issue encountered when using `unset()` within a `foreach` loop in PHP to remove elements from an array.  Modifying the array during iteration leads to unexpected behavior and skipped elements.

The `bug.php` file shows the problematic code. The `bugSolution.php` provides the corrected version.

**Problem:** When `unset()` is called within the `foreach` loop, the internal array pointer is affected, leading to elements being skipped.

**Solution:**  Using a `for` loop with reverse iteration allows for safe removal of elements.
