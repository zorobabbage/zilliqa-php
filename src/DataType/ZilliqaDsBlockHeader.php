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
 * Zilliqa data type ZilliqaDsBlockHeader.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/zilliqa-schema.json.
 */
class ZilliqaDsBlockHeader extends ZilliqaDataType {

	/**
	 * @var ZilliqaNumber
	 */
	public $BlockNum;

	/**
	 * @var ZilliqaQuantity
	 */
	public $Difficulty;

	/**
	 * @var ZilliqaQuantity
	 */
	public $DifficultyDS;

	/**
	 * @var ZilliqaQuantity
	 */
	public $GasPrice;

	/**
	 * @var ZilliqaHash
	 */
	public $LeaderPubKey;

	/**
	 * @var ZilliqaHash[]
	 */
	public $PoWWinners;

	/**
	 * @var ZilliqaHash
	 */
	public $PrevHash;

	/**
	 * @var ZilliqaTimestamp
	 */
	public $Timestamp;

	/**
	 * @param ZilliqaNumber $BlockNum
	 * @param ZilliqaQuantity $Difficulty
	 * @param ZilliqaQuantity $DifficultyDS
	 * @param ZilliqaQuantity $GasPrice
	 * @param ZilliqaHash $LeaderPubKey
	 * @param array $PoWWinners Array of ZilliqaHash
	 * @param ZilliqaHash $PrevHash
	 * @param ZilliqaTimestamp $Timestamp
	 */
	public function __construct(ZilliqaNumber $BlockNum, ZilliqaQuantity $Difficulty, ZilliqaQuantity $DifficultyDS, ZilliqaQuantity $GasPrice, ZilliqaHash $LeaderPubKey, array $PoWWinners, ZilliqaHash $PrevHash, ZilliqaTimestamp $Timestamp) {
		$this->BlockNum = $BlockNum;  
		$this->Difficulty = $Difficulty;  
		$this->DifficultyDS = $DifficultyDS;  
		$this->GasPrice = $GasPrice;  
		$this->LeaderPubKey = $LeaderPubKey;  
		$this->PoWWinners = $PoWWinners;  
		$this->PrevHash = $PrevHash;  
		$this->Timestamp = $Timestamp;
	}

	/**
	 * @return array
	 */
	public static function getTypeArray(): array {
		return [
			'BlockNum' => 'ZilliqaNumber',
			'Difficulty' => 'ZilliqaQuantity',
			'DifficultyDS' => 'ZilliqaQuantity',
			'GasPrice' => 'ZilliqaQuantity',
			'LeaderPubKey' => 'ZilliqaHash',
			'PoWWinners' => '[ZilliqaHash]',
			'PrevHash' => 'ZilliqaHash',
			'Timestamp' => 'ZilliqaTimestamp',
		];
	}

	/**
	 * Returns array with values.
	 *
	 * @return array
	 */
	public function toArray(): array {
		$return = [];
		!is_null($this->BlockNum) ?? $return['BlockNum'] = $this->BlockNum->val();
		!is_null($this->Difficulty) ?? $return['Difficulty'] = $this->Difficulty->val();
		!is_null($this->DifficultyDS) ?? $return['DifficultyDS'] = $this->DifficultyDS->val();
		!is_null($this->GasPrice) ?? $return['GasPrice'] = $this->GasPrice->val();
		!is_null($this->LeaderPubKey) ?? $return['LeaderPubKey'] = $this->LeaderPubKey->val();
		!is_null($this->PoWWinners) ?? $return['PoWWinners'] = \Zilliqa\Zilliqa::valueArray($this->PoWWinners, 'ZilliqaHash');
		!is_null($this->PrevHash) ?? $return['PrevHash'] = $this->PrevHash->val();
		!is_null($this->Timestamp) ?? $return['Timestamp'] = $this->Timestamp->val();
		return $return;
	}
}