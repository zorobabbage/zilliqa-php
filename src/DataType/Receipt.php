<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */
namespace Zilliqa\DataType;

/**
 * Zilliqa data type Receipt.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/zilliqa-schema.json.
 */
class Receipt extends ZilliqaDataType {

	/**
	 * @var ZilliqaQuantity
	 */
	public $cumulative_gas;

	/**
	 * @var ZilliqaNumber
	 */
	public $epoch_num;

	/**
	 * @var ZilliqaBoolean
	 */
	public $success;

	/**
	 * @var ?ZilliqaBoolean
	 */
	public $accepted;

	/**
	 * @var ?Transition[]
	 */
	public $transitions;

	/**
	 * @var ?Exception[]
	 */
	public $exceptions;

	/**
	 * @param ZilliqaQuantity $cumulative_gas
	 * @param ZilliqaNumber $epoch_num
	 * @param ZilliqaBoolean $success
	 * @param ?ZilliqaBoolean $accepted
	 * @param ?array $transitions Array of Transition
	 * @param ?array $exceptions Array of Exception
	 */
	public function __construct(ZilliqaQuantity $cumulative_gas, ZilliqaNumber $epoch_num, ZilliqaBoolean $success, ?ZilliqaBoolean $accepted = null, ?array $transitions = null, ?array $exceptions = null) {
		$this->cumulative_gas = $cumulative_gas;
		$this->epoch_num = $epoch_num;
		$this->success = $success;
		$this->accepted = $accepted;
		$this->transitions = $transitions;
		$this->exceptions = $exceptions;
	}

	/**
	 * @return array
	 */
	public static function getTypeArray(): array {
		return [
			'cumulative_gas' => 'ZilliqaQuantity',
			'epoch_num' => 'ZilliqaNumber',
			'success' => 'ZilliqaBoolean',
			'accepted' => 'ZilliqaBoolean',
			'transitions' => '[Transition]',
			'exceptions' => '[Exception]',
		];
	}

	/**
	 * Returns array with values.
	 *
	 * @return array
	 */
	public function toArray(): array {
		return [
			'cumulative_gas' => !is_null($this->cumulative_gas) ? $this->cumulative_gas->val() : null,
			'epoch_num' => !is_null($this->epoch_num) ? $this->epoch_num->val() : null,
			'success' => !is_null($this->success) ? $this->success->val() : null,
			'accepted' => !is_null($this->accepted) ? $this->accepted->val() : null,
			'transitions' => !is_null($this->transitions) ? \Zilliqa\Zilliqa::valueArray($this->transitions, 'Transition') : null,
			'exceptions' => !is_null($this->exceptions) ? \Zilliqa\Zilliqa::valueArray($this->exceptions, 'Exception') : null,
		];
	}
}