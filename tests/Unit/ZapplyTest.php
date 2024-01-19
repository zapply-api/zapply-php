<?php

use Zapply\Zapply;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;

it('can send a GET request', function () {
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

    $response = $zapply->get('/api/v1/test');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a POST request', function () {
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

    $response = $zapply->post('/api/v1/test', [
        'form_params' => [
            'foo' => 'bar'
        ]
    ]);

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a PUT request', function () {
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

    $response = $zapply->put('/api/v1/test', [
        'form_params' => [
            'foo' => 'bar'
        ]
    ]);

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});

it('can send a DELETE request', function () {
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

    $response = $zapply->delete('/api/v1/test');

    expect($response)->toBeArray();
    expect($response['response'])->toBe('ok');
});
