<?php


namespace oiran\walletlib\dto;


use oiran\walletlib\model\Wallet;

class WalletDTO
{
    //todo jsonのkeyはスネークケースが一般的な気がする
	public static function decode(array $data): Wallet {
		return new Wallet($data["xuid"], $data["owner_name"], $data["money_amount"]);
	}

	public static function encode(Wallet $wallet): array {
		return [
            "xuid" => $wallet->getOwnerXuid(),
			"money_amount" => $wallet->getMoney(),
			"owner_name" => $wallet->getOwnerName()
		];
	}
}