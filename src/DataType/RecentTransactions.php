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
 * Zilliqa data type RecentTransactions.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/zilliqa-schema.json.
 */
class RecentTransactions extends ZilliqaDataType {

	/**
	 * @var ZilliqaHash[]
	 */
	public $TxnHashes;

	/**
	 * @var ZilliqaNumber
	 */
	public $number;

	/**
	 * @param array $TxnHashes Array of ZilliqaHash
	 * @param ZilliqaNumber $number
	 */
	public function __construct(array $TxnHashes, ZilliqaNumber $number) {
		$this->TxnHashes = $TxnHashes;
		$this->number = $number;
	}

	/**
	 * @return array
	 */
	public static function getTypeArray(): array {
		return [
			'TxnHashes' => '[ZilliqaHash]',
			'number' => 'ZilliqaNumber',
		];
	}

	/**
	 * Returns array with values.
	 *
	 * @return array
	 */
	public function toArray(): array {
		return [
			'TxnHashes' => !is_null($this->TxnHashes) ? \Zilliqa\Zilliqa::valueArray($this->TxnHashes, 'ZilliqaHash') : null,
			'number' => !is_null($this->number) ? $this->number->val() : null,
		];
	}
}