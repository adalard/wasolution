<?php

namespace WASolution;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WAClient
{
    private string $baseUrl = 'https://wasolution.getlifeeasy.com/api';
    private string $appKey;
    private string $authKey;
    private Client $client;

    public function __construct(string $appKey, string $authKey)
    {
        $this->appKey = $appKey;
        $this->authKey = $authKey;
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => 30,
        ]);
    }

    /**
     * Send a message using the WhatsApp Solution API
     *
     * @param string $to Recipient phone number
     * @param string $message Message content
     * @return array Response from the API
     * @throws GuzzleException
     */
    public function sendMessage(string $to, string $message): array
    {
        $response = $this->client->post('/create-message', [
            'form_params' => [
                'appkey' => $this->appKey,
                'authKey' => $this->authKey,
                'to' => $to,
                'message' => $message
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
