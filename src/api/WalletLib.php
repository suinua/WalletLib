<?php


namespace oiran\walletlib\api;


use oiran\walletlib\pool\WalletStore;

//無理があるとは思うけど、Storeとかは直接公開するべきじゃないと思う。
class WalletLib
{
	private static ?WalletStore $store = null;

	private function __construct() {}
}