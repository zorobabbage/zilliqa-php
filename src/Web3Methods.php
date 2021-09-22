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
use Zilliqa\DataType\ZilliqaBalance;
use Zilliqa\DataType\ZilliqaNumber;
use Zilliqa\DataType\ZilliqaDSBlockListings;
use Zilliqa\DataType\ZilliqaString;
use Zilliqa\DataType\ZilliqaBlockchainInfo;
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
	 * @return ?ZilliqaBalance
	 */
	public function GetBalance(ZilliqaBech32 $arg1): ?ZilliqaBalance {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method DSBlockListing().
	 * 
	 * See [Zilliqa Developer Docs DSBlockListing](https://dev.zilliqa.com/docs/apis/api-blockchain-ds-block-listing)
	 *
	 * @param ZilliqaNumber $arg1
	 * @return ?ZilliqaDSBlockListings
	 */
	public function DSBlockListing(ZilliqaNumber $arg1): ?ZilliqaDSBlockListings {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetBlockchainInfo().
	 * 
	 * See [Zilliqa Developer Docs GetBlockchainInfo](https://dev.zilliqa.com/docs/apis/api-blockchain-get-blockchain-info)
	 *
	 * @param ZilliqaString $arg1
	 * @return ?ZilliqaBlockchainInfo
	 */
	public function GetBlockchainInfo(ZilliqaString $arg1): ?ZilliqaBlockchainInfo {
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

	/**
	 * Generated method GetCurrentMiniEpoch().
	 * 
	 * See [Zilliqa Developer Docs GetCurrentMiniEpoch](https://dev.zilliqa.com/docs/apis/api-blockchain-get-current-mini-epoch)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetCurrentMiniEpoch(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNetworkId().
	 * 
	 * See [Zilliqa Developer Docs GetNetworkId](https://dev.zilliqa.com/docs/apis/api-blockchain-get-network-id)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNetworkId(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNumDSBlocks().
	 * 
	 * See [Zilliqa Developer Docs GetNumDSBlocks](https://dev.zilliqa.com/docs/apis/api-blockchain-num-ds-blocks)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNumDSBlocks(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNumTransactions().
	 * 
	 * See [Zilliqa Developer Docs GetNumTransactions](https://dev.zilliqa.com/docs/apis/api-blockchain-get-num-tx)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNumTransactions(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNumTxBlocks().
	 * 
	 * See [Zilliqa Developer Docs GetNumTxBlocks](https://dev.zilliqa.com/docs/apis/api-blockchain-get-num-tx-blocks)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNumTxBlocks(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetPrevDifficulty().
	 * 
	 * See [Zilliqa Developer Docs GetPrevDifficulty](https://dev.zilliqa.com/docs/apis/api-blockchain-get-prev-difficulty)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetPrevDifficulty(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetPrevDSDifficulty().
	 * 
	 * See [Zilliqa Developer Docs GetPrevDSDifficulty](https://dev.zilliqa.com/docs/apis/api-blockchain-get-prev-ds-difficulty)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetPrevDSDifficulty(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetTotalCoinSupply().
	 * 
	 * See [Zilliqa Developer Docs GetTotalCoinSupply](https://dev.zilliqa.com/docs/apis/api-blockchain-get-total-coin-supply)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetTotalCoinSupply(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetTransactionRate().
	 * 
	 * See [Zilliqa Developer Docs GetTransactionRate](https://dev.zilliqa.com/docs/apis/api-blockchain-get-tx-rate)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetTransactionRate(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetTxBlockRate().
	 * 
	 * See [Zilliqa Developer Docs GetTxBlockRate](https://dev.zilliqa.com/docs/apis/api-blockchain-get-tx-block-rate)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetTxBlockRate(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetMinimumGasPrice().
	 * 
	 * See [Zilliqa Developer Docs GetMinimumGasPrice](https://dev.zilliqa.com/docs/apis/api-transaction-get-minimum-gas-price)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetMinimumGasPrice(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNumTxnsDSEpoch().
	 * 
	 * See [Zilliqa Developer Docs GetNumTxnsDSEpoch](https://dev.zilliqa.com/docs/apis/api-transaction-get-num-txns-dsepoch)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNumTxnsDSEpoch(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}

	/**
	 * Generated method GetNumTxnsTxEpoch().
	 * 
	 * See [Zilliqa Developer Docs GetNumTxnsTxEpoch](https://dev.zilliqa.com/docs/apis/api-transaction-get-num-txns-txepoch)
	 *
	 * @return ?ZilliqaQuantity
	 */
	public function GetNumTxnsTxEpoch(): ?ZilliqaQuantity {
		return $this->__call(__FUNCTION__, func_get_args());
	}
}