<?php

namespace Smsc\Exceptions;

use Psr\Log\LoggerInterface;

class ExceptionHandler
{
	private $logger;

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	public function handle(\Exception $exception)
	{


		/**
		 * ErrorException
		 *
		 * PHP-errors die worden omgezet naar ErrorException
		 *
		 */
		if($exception instanceof \ErrorException) {
			$this->logger->critical($exception->getMessage());
		}
	}
}
