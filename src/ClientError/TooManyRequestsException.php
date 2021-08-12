<?php

namespace PoK\Exception\ClientError;

use PoK\Exception\HasDataInterface;

/**
 * The 429 status code indicates that the user has sent too many requests in a given amount of time ("rate limiting").
 * The response representations SHOULD include details explaining the condition, and MAY include a Retry-After header
 * indicating how long to wait before making a new request.
 * When a server is under attack or just receiving a very large number of requests from a single party, responding to
 * each with a 429 status code will consume resources.
 * Therefore, servers are not required to use the 429 status code; when limiting resource usage, it may be more
 * appropriate to just drop connections, or take other steps.
 */
class TooManyRequestsException extends \Exception implements HasDataInterface
{
    /**
     * @var int
     */
    private $cooldown;

    public function __construct(int $cooldown, \Throwable $previous = NULL)
    {
        parent::__construct('TOO_MANY_REQUESTS', 429, $previous);
        $this->cooldown = $cooldown;
    }

    public function getData()
    {
        return [
            'cooldown' => $this->cooldown
        ];
    }
}