<?php

namespace Damejidlo\DateTimeFactory\Tests;

require_once __DIR__ . '/bootstrap.php';

use Damejidlo\DateTimeFactory\DateTimeFactory;
use DateTime;
use Tester\Assert;
use Tester\TestCase;



/**
 * @testCase
 */
class DateTimeFactoryTest extends TestCase
{

	public function testType()
	{
		$dateTimeFactory = new DateTimeFactory();

		$first = $dateTimeFactory->getNow();
		$second = $dateTimeFactory->getNow();
		Assert::type(DateTime::class, $first);
		Assert::notSame($first, $second);
	}



	public function testGetNow()
	{
		$dateTimeFactory = new DateTimeFactory();

		$before = new DateTime();
		$first = $dateTimeFactory->getNow();
		Assert::true($before <= $first);
		$after = new DateTime();
		Assert::true($first <= $after);
		$second = $dateTimeFactory->getNow();
		Assert::true($first <= $second);
	}

}



(new DateTimeFactoryTest())->run();
