<?php

namespace LacunaPHP\APIClient\Tests\Exception;

use LacunaPHP\APIClient\Exception\APIErrorException;
use GuzzleHttp\Command\CommandTransaction;


class APIErrorExceptionTest extends \PHPUnit_Framework_TestCase {

	public function testCreateNameNotAvailableException() {
		$this->verifyExceptionClass(
			'1000',
			'LacunaPHP\\APIClient\\Exception\\NameNotAvailableException'
		);
	}

	public function testCreateInvalidPasswordException() {
		$this->verifyExceptionClass(
			'1001',
			'LacunaPHP\\APIClient\\Exception\\InvalidPasswordException'
		);
	}

	public function testCreateObjectDoesNotExistException() {
		$this->verifyExceptionClass(
			'1002',
			'LacunaPHP\\APIClient\\Exception\\ObjectDoesNotExistException'
		);
	}

	public function testCreateTooMuchInformationException() {
		$this->verifyExceptionClass(
			'1003',
			'LacunaPHP\\APIClient\\Exception\\TooMuchInformationException'
		);
	}

	public function testCreatePasswordIncorrectException() {
		$this->verifyExceptionClass(
			'1004',
			'LacunaPHP\\APIClient\\Exception\\PasswordIncorrectException'
		);
	}

	public function testCreateContainsInvalidCharactersException() {
		$this->verifyExceptionClass(
			'1005',
			'LacunaPHP\\APIClient\\Exception\\ContainsInvalidCharactersException'
		);
	}

	public function testCreateSessionExpiredException() {
		$this->verifyExceptionClass(
			'1006',
			'LacunaPHP\\APIClient\\Exception\\SessionExpiredException'
		);
	}

	public function testCreateOverspendException() {
		$this->verifyExceptionClass(
			'1007',
			'LacunaPHP\\APIClient\\Exception\\OverspendException'
		);
	}

	public function testCreateUnderspendException() {
		$this->verifyExceptionClass(
			'1008',
			'LacunaPHP\\APIClient\\Exception\\UnderspendException'
		);
	}

	public function testCreateInvalidRangeException() {
		$this->verifyExceptionClass(
			'1009',
			'LacunaPHP\\APIClient\\Exception\\InvalidRangeException'
		);
	}

	public function testCreateInsufficientPrivilegesException() {
		$this->verifyExceptionClass(
			'1010',
			'LacunaPHP\\APIClient\\Exception\\InsufficientPrivilegesException'
		);
	}

	public function testCreateNotEnoughResourcesInStorageException() {
		$this->verifyExceptionClass(
			'1011',
			'LacunaPHP\\APIClient\\Exception\\NotEnoughResourcesInStorageException'
		);
	}

	public function testCreateNotEnoughResourcesInProductionException() {
		$this->verifyExceptionClass(
			'1012',
			'LacunaPHP\\APIClient\\Exception\\NotEnoughResourcesInProductionException'
		);
	}

	public function testCreateMissingPrerequisitesException() {
		$this->verifyExceptionClass(
			'1013',
			'LacunaPHP\\APIClient\\Exception\\MissingPrerequisitesException'
		);
	}

	public function testCreateCaptchaNotValidException() {
		$this->verifyExceptionClass(
			'1014',
			'LacunaPHP\\APIClient\\Exception\\CaptchaNotValidException'
		);
	}

	public function testCreateRestrictedForSitterLoginsException() {
		$this->verifyExceptionClass(
			'1015',
			'LacunaPHP\\APIClient\\Exception\\RestrictedForSitterLoginsException'
		);
	}

	public function testCreateNeedsToSolveCaptchaException() {
		$this->verifyExceptionClass(
			'1016',
			'LacunaPHP\\APIClient\\Exception\\NeedsToSolveCaptchaException'
		);
	}

	public function testCreatePendingParliamentaryVoteException() {
		$this->verifyExceptionClass(
			'1017',
			'LacunaPHP\\APIClient\\Exception\\PendingParliamentaryVoteException'
		);
	}

	public function testCreateAlreadyVotedException() {
		$this->verifyExceptionClass(
			'1018',
			'LacunaPHP\\APIClient\\Exception\\AlreadyVotedException'
		);
	}

	protected function verifyExceptionClass($code, $class) {
		$response = $this->getMock('GuzzleHttp\Message\ResponseInterface');

		$response->method('json')
			->willReturn([
				'error' => [
					'code' => $code
				]
			]);

		$command = $this->getMock('LacunaPHP\APIClient\Command\APICommandInterface');

		$client = $this->getMock('GuzzleHttp\Command\ServiceClientInterface');

		$transaction = new CommandTransaction($client, $command);
		$transaction->response = $response;

		$exception = APIErrorException::create($transaction);

		$this->assertInstanceOf($class, $exception);
	}
}
