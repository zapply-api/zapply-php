<?php

use Zapply\Zapply;
use Zapply\Resources\Auth;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can get a QR code', function () {
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

    $auth = $zapply->auth();

    $response = $auth->getQrCode();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can logout', function () {
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

    $auth = $zapply->auth();

    $response = $auth->logout();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can restart', function () {
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

    $auth = $zapply->auth();

    $response = $auth->restart();

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
