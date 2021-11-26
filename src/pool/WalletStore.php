<?php

namespace oiran\walletlib\pool;

use oiran\walletlib\model\Wallet;
use oiran\walletlib\repository\WalletRepository;

class WalletStore
{
    private WalletRepository $repository;

    public function __construct(
        private array $walletMap = [],
    ) {
        $this->repository = new WalletRepository();
    }

    //todo:命名
    //すでに存在すればリポジトリから取ってくる、存在しなければ新規作成
    public function add(string $xuid) {
        if ($this->repository->isExist($xuid)) {
            $wallet = $this->repository->get($xuid);
        } else {
            $wallet = new Wallet();//todo:初期値はどうするのか？
        }

        $this->walletMap[$xuid] = $wallet;
    }

    public function delete(string $xuid) {
        if (array_key_exists($xuid, $this->walletMap)) {
            //TODO : エラー or 警告
        }

        $this->repository->save($this->walletMap[$xuid]);
        unset($this->walletMap[$xuid]);
    }

    public function findBy(string $xuid): ?Wallet {
        return $this->walletMap[$xuid] ?? null;
    }

    public function getWalletMap(): array {
        return $this->walletMap;
    }
}