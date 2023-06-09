# LOGOTEL MID DEV CHALLANGE

### Goal

Try to complete as many task as you can.

Each folder contain a task/challange with a dedicated readme with the proper instructions.

No need to install anything except for php cli and composer.

All the challenges can be run by executing test case with vendor/bin/phpunit

### Requirements

- php cli >= 8.0
- composer

### Install

```bash
composer install
```

### Test

```bash
vendor/bin/phpunit
```

We use a lot of dataProvider in tests. What is a dataProvider? Find it out [here](https://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html)

### Expectation

All the tests should pass.

- ✅ [Challenge 01](/src/Challenge01/)
- ✅ [Challenge 02](/src/Challenge02/)
- ✅ [Challenge 03](/src/Challenge03/)
- ✅ [Challenge 04](/src/Challenge04/)
- ✅ [Challenge 05](/src/Challenge05/)
- ✅ [Challenge 06](/src/Challenge06/)
- ✅ [Challenge 07](/src/Challenge07/)
- ✅ [Challenge 08](/src/Challenge08/)


### How to work

Clone this branch and code on the cloned one. Then email us with the zip file or a public repository URL.

### HINT

Want to execute one test at the time?

```bash
vendor/bin/phpunit --filter method_name path/to/classTest.php
```

Example 
```bash
vendor/bin/phpunit --filter test_answers_will_be_displayed_correctly tests/Challenge01/Challenge01Test.php
```