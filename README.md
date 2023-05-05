```shell
./vendor/bin/rector process src/a.php
```

hangs like so:
```
 0/1 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%
 ```

 despite:
 ```php
     $rectorConfig->skip([
        __DIR__ . '/src/a.php',
    ]);

 ```

with php:
```shell
PHP 8.0.28 (cli)
```
