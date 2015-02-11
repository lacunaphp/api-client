<?php

namespace LacunaPHP\APIClient\Tests\Exception;

use LacunaPHP\APIClient\Exception\APIErrorException;
use GuzzleHttp\Command\CommandTransaction;


class APIErrorExceptionTest extends \PHPUnit_Framework_TestCase {

	public function testCreateNameNotAvailableException() {
		$this->verifyExceptionObject(
			'1000',
			'LacunaPHP\\APIClient\\Exception\\NameNotAvailableException'
		);
	}

	public function testCreateInvalidPasswordException() {
		$this->verifyExceptionObject(
			'1001',
			'LacunaPHP\\APIClient\\Exception\\InvalidPasswordException'
		);
	}

	public function testCreateObjectDoesNotExistException() {
		$this->verifyExceptionObject(
			'1002',
			'LacunaPHP\\APIClient\\Exception\\ObjectDoesNotExistException'
		);
	}

	public function testCreateTooMuchInformationException() {
		$this->verifyExceptionObject(
			'1003',
			'LacunaPHP\\APIClient\\Exception\\TooMuchInformationException'
		);
	}

	public function testCreatePasswordIncorrectException() {
		$this->verifyExceptionObject(
			'1004',
			'LacunaPHP\\APIClient\\Exception\\PasswordIncorrectException'
		);
	}

	public function testCreateContainsInvalidCharactersException() {
		$this->verifyExceptionObject(
			'1005',
			'LacunaPHP\\APIClient\\Exception\\ContainsInvalidCharactersException'
		);
	}

	public function testCreateSessionExpiredException() {
		$this->verifyExceptionObject(
			'1006',
			'LacunaPHP\\APIClient\\Exception\\SessionExpiredException'
		);
	}

	public function testCreateOverspendException() {
		$this->verifyExceptionObject(
			'1007',
			'LacunaPHP\\APIClient\\Exception\\OverspendException'
		);
	}

	public function testCreateUnderspendException() {
		$this->verifyExceptionObject(
			'1008',
			'LacunaPHP\\APIClient\\Exception\\UnderspendException'
		);
	}

	public function testCreateInvalidRangeException() {
		$this->verifyExceptionObject(
			'1009',
			'LacunaPHP\\APIClient\\Exception\\InvalidRangeException'
		);
	}

	public function testCreateInsufficientPrivilegesException() {
		$this->verifyExceptionObject(
			'1010',
			'LacunaPHP\\APIClient\\Exception\\InsufficientPrivilegesException'
		);
	}

	public function testCreateNotEnoughResourcesInStorageException() {
		$this->verifyExceptionObject(
			'1011',
			'LacunaPHP\\APIClient\\Exception\\NotEnoughResourcesInStorageException'
		);
	}

	public function testCreateNotEnoughResourcesInProductionException() {
		$this->verifyExceptionObject(
			'1012',
			'LacunaPHP\\APIClient\\Exception\\NotEnoughResourcesInProductionException'
		);
	}

	public function testCreateMissingPrerequisitesException() {
		$this->verifyExceptionObject(
			'1013',
			'LacunaPHP\\APIClient\\Exception\\MissingPrerequisitesException'
		);
	}

	public function testCreateCaptchaNotValidException() {
		$this->verifyExceptionObject(
			'1014',
			'LacunaPHP\\APIClient\\Exception\\CaptchaNotValidException'
		);
	}

	public function testCreateRestrictedForSitterLoginsException() {
		$this->verifyExceptionObject(
			'1015',
			'LacunaPHP\\APIClient\\Exception\\RestrictedForSitterLoginsException'
		);
	}

	public function testCreateNeedsToSolveCaptchaException() {
		$this->verifyExceptionObject(
			'1016',
			'LacunaPHP\\APIClient\\Exception\\NeedsToSolveCaptchaException'
		);
	}

	public function testCreatePendingParliamentaryVoteException() {
		$this->verifyExceptionObject(
			'1017',
			'LacunaPHP\\APIClient\\Exception\\PendingParliamentaryVoteException'
		);
	}

	public function testCreateAlreadyVotedException() {
		$this->verifyExceptionObject(
			'1018',
			'LacunaPHP\\APIClient\\Exception\\AlreadyVotedException'
		);
	}

	protected function verifyExceptionObject($code, $class) {
		$client = $this->getMock('GuzzleHttp\Command\ServiceClientInterface');
		$command = $this->getMock('LacunaPHP\APIClient\Command\APICommandInterface');

		$transaction = new CommandTransaction($client, $command);

		$transaction->request = $this->getMock('GuzzleHttp\Message\RequestInterface');
		$transaction->request->method('getUrl')->willReturn('https://api.example.com/module');

		$transaction->response = $this->getMock('GuzzleHttp\Message\ResponseInterface');
		$transaction->response->method('getStatusCode')->willReturn(500);
		$transaction->response->method('getReasonPhrase')->willReturn('Unknown Exception');
		$transaction->response->method('json')->willReturn([
			'jsonrpc' => '2.0',
			'id'      => 1,
			'error'   => [
				'code'    => $code,
				'message' => 'API Error',
				'data'    => [
					'class' => $class
				]
			]
		]);

		$exception = APIErrorException::createFromTransaction($transaction);

		$this->assertInstanceOf($class, $exception);
		$this->assertEquals($code, $exception->getCode());
		$this->assertEquals('API Error', $exception->getMessage());
		$this->assertEquals(['class' => $class], $exception->getData());
		$this->assertEquals(1, $exception->getID());
	}
}
