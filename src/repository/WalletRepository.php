<?php


namespace oiran\walletlib\repository;


use oiran\walletlib\model\Wallet;

//Storeからのみアクセスするようにする
class WalletRepository
{
    public function __construct() { }

    public function isExist($xuid): bool {
        //todo : ぞんざい確認
    }

    public function save(Wallet $wallet) {
        //todo : 永久化
    }

    public function get(string $xuid): Wallet {
        //todo : get
    }

    public function delete(Wallet $wallet) {
        //todo : ファイルごと削除。 xuidだけ受け取るのでも良い
    }
}