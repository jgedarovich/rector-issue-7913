<?php
// test.php
trait RectorTest {
    public function blah()
    {
        return (new class() {
            public function foo()
            {
                return (new class() {
                    use RectorTest;
                });
            }
        });
    }
}
