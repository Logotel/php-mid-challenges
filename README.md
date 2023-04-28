# LOGOTEL MID DEV CHALLANGE

### Goal

Try to complete as many task as you can.

Each folder contain a task/challange with a dedicated readme with the proper instructions.

No need to install anything except for php cli and composer.

All the challenges can be run by executing test case with vendor/bin/phpunit

### Install

```bash
composer install
```

### Test

```bash
vendor/bin/phpunit
```

### Expectation

All the tests should pass.

- [ ] [Challenge 01](/src/Challenge01/)
- [ ] [Challenge 02](/src/Challenge02/)
- [ ] [Challenge 03](/src/Challenge03/)
- [ ] [Challenge 04](/src/Challenge04/)
- [ ] [Challenge 05](/src/Challenge05/)

### HINT

Want to execute one test at the time?

```bash
vendor/bin/phpunit --filter method_name path/to/classTest.php
```

Example 
```bash
vendor/bin/phpunit --filter test_answers_will_be_displayed_correctly tests/Challenge01/Challenge01Test.php
```