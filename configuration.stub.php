<?php

/** @generate-function-entries */

namespace SimpleKafkaClient;

class Configuration
{
    public function __construct() {}

    public function dump(): array {}

    public function set(string $name, string $value): void {}

    public function setErrorCb(callable $callback): void {}

    public function setDrMsgCb(callable $callback): void {}

    public function setStatsCb(callable $callback): void {}

    public function setRebalanceCb(callable $callback): void {}

    public function setOffsetCommitCb(callable $callback): void {}

    public function setLogCb(callable $callback): void {}
}
