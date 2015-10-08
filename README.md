# phpspecissue
I'm using PHP 5.6.12

This branch is used to point out a strange behaviour of phpspec.

In spec/Smsc/Exceptions/spec/ExceptionHandlerSpec.php on line 19 is:
```PHP
function it_should_handle_an_error_exception_and_log_critical(\Psr\Log\LoggerInterface $logger, \Exception $exception) {
```

If I run "vendor/bin/phpspec run 'spec/Smsc/Exceptions/spec/ExceptionHandlerSpec.php'" then I get "zend_mm_heap corrupted" as output.

If I change that line of code and add an extra use line:
```PHP
use \Psr\Log\LoggerInterface;
function it_should_handle_an_error_exception_and_log_critical(LoggerInterface $logger, \Exception $exception) {
```

Then I get output of phpspec saying that class LoggerInterface is not found
https://www.dropbox.com/s/ktmgv1mo7n8eipd/Screenshot%202015-10-08%2009.40.27.png?dl=0

