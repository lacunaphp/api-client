<?php

namespace LacunaPHP\APIClient\Exception;

use GuzzleHttp\Command\CommandTransaction;
use GuzzleHttp\Command\Exception\CommandServerException;


class APIErrorException extends CommandServerException {
	protected $id;
	protected $data;

	public function __construct(CommandTransaction $transaction, \Exception $previous = null) {
		$payload = $transaction->response->json();
		$error = $payload['error'];

		parent::__construct($error['message'], $transaction, $previous);

		$this->id = intval($payload['id']);
		$this->code = intval($error['code']);
		$this->data = $error['data'] ?: null;
	}

	public function getId() {
		return $this->id;
	}

	public function getData() {
		return $this->data;
	}

	public static function createFromTransaction(CommandTransaction $transaction, \Exception $previous = null) {
		if(!is_array($transaction->response->json()['error'])) {
			return;
		}

		switch((int) $transaction->response->json()['error']['code']) {
			case 1000: return new NameNotAvailableException($transaction, $previous);
			case 1001: return new InvalidPasswordException($transaction, $previous);
			case 1002: return new ObjectDoesNotExistException($transaction, $previous);
			case 1003: return new TooMuchInformationException($transaction, $previous);
			case 1004: return new PasswordIncorrectException($transaction, $previous);
			case 1005: return new ContainsInvalidCharactersException($transaction, $previous);
			case 1006: return new SessionExpiredException($transaction, $previous);
			case 1007: return new OverspendException($transaction, $previous);
			case 1008: return new UnderspendException($transaction, $previous);
			case 1009: return new InvalidRangeException($transaction, $previous);
			case 1010: return new InsufficientPrivilegesException($transaction, $previous);
			case 1011: return new NotEnoughResourcesInStorageException($transaction, $previous);
			case 1012: return new NotEnoughResourcesInProductionException($transaction, $previous);
			case 1013: return new MissingPrerequisitesException($transaction, $previous);
			case 1014: return new CaptchaNotValidException($transaction, $previous);
			case 1015: return new RestrictedForSitterLoginsException($transaction, $previous);
			case 1016: return new NeedsToSolveCaptchaException($transaction, $previous);
			case 1017: return new PendingParliamentaryVoteException($transaction, $previous);
			case 1018: return new AlreadyVotedException($transaction, $previous);
		}

		return new self($transaction, $previous);
	}
}
