<?php

namespace trntv\bus\interfaces;

/**
 * Interface QueuedCommand
 *
 * @author Eugene Terentev <eugene@terentev.net>
 */
interface QueuedCommand extends Command
{
    /**
     * @return bool
     */
    public function isRunningInQueue();

    /**
     * @return string
     */
    public function getQueueName();
}