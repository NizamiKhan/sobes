<?php

class FeedFetcher {
    protected $cache;
    function __construct(Cache $cache) {
        $this->cache = $cache;
    }
}
$cache = new FileCache(‘/tmp’);
$fetcher = new FeedFetcher($cache);