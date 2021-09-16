<?php
/**
 * @file
 * This is a file generated by scripts/generate-methods.php.
 * 
 * DO NOT EDIT THIS FILE.
 * 
 * @ingroup generated
 */

namespace Zilliqa;

use Zilliqa\DataType\ZilliqaBech32;
use Zilliqa\DataType\Balance;
use Zilliqa\DataType\ZilliqaQuantity;

/**
 * Zilliqa JsonRPC Methods.
 * 
 * Interface is generated by scripts/generate-methods.php based on resources/zilliqa-schema.json.
 * Methods are actually implemented with [method overloading](http://php.net/manual/en/language.oop5.overloading.php#object.call) using __call().
 */
trait Web3Methods {

	/**
	 * Generated method GetBalance().
	 * 
	 * See [Zilliqa Developer Docs GetBalance](https://dev.zilliqa.com/docs/apis/api-account-get-balance)
	 *
	 * @param ZilliqaBech32 $arg1
	 * @return ?Balance
	 */
	public function GetBalance(ZilliqaBech32 $arg1): ?Balance {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetCurrentDSEpoch().
	 * 
	 * See [Zilliqa Developer Docs GetCurrentDSEpoch](https://dev.zilliqa.com/docs/apis/api-blockchain-get-current-ds-epoch)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetCurrentDSEpoch(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}
}