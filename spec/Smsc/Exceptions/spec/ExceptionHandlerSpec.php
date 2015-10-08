<?php

namespace spec\Smsc\Exceptions;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Log\LoggerInterface;

/**
 * Class ExceptionHandlerSpec
 *
 * @package spec\Smsc\Exceptions
 */
class ExceptionHandlerSpec extends ObjectBehavior {

    /**
     * @param LoggerInterface $logger
     * @param \Exception               $exception
     */
    function it_should_handle_an_error_exception_and_log_critical(LoggerInterface $logger, \Exception $exception) {
        $this->beConstructedWith($logger);
        $this->handle($exception);
        $logger->critical($exception)->shouldBeCalled();
    }
}
