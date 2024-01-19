<?php

use Zapply\Zapply;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can list chats', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['response' => 'ok']))
    ]);

    $handlerStack = HandlerStack::create($mock);
    $client = new GuzzleClient(['handler' => $handlerStack]);

    $zapply = new Zapply([
        'base_uri' => 'https://api.zapply.cloud',
        'bearer_token' => 'zp_1234567890237189',
        'channel_id' => '1234567890'
    ]);
    $zapply->setClient($client);

    $chats = $zapply->chats();

    $response = $chats->list();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can get a chat details', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['response' => 'ok']))
    ]);

    $handlerStack = HandlerStack::create($mock);
    $client = new GuzzleClient(['handler' => $handlerStack]);

    $zapply = new Zapply([
        'base_uri' => 'https://api.zapply.cloud',
        'bearer_token' => 'zp_1234567890237189',
        'channel_id' => '1234567890'
    ]);
    $zapply->setClient($client);

    $chats = $zapply->chats();

    $response = $chats->details('1234567890');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
