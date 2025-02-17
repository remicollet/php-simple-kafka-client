<?php

/** @generate-function-entries */

namespace SimpleKafkaClient;

class Producer
{
    public function __construct(Configuration $configuration) {}

    public function initTransactions(int $timeoutMs): void  {}

    public function beginTransaction(): void {}

    public function commitTransaction(int $timeoutMs): void {}

    public function abortTransaction(int $timeoutMs): void {}

    public function flush(int $timeoutMs): int {}

    public function purge(int $purgeFlags): int {}

    public function getTopicHandle(string $topic): ProducerTopic {}
}
