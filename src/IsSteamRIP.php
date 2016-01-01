<?php

namespace M44rt3np44uw\IsSteamRIP;

use GuzzleHttp\Client;

/**
 * Class IsSteamRIP
 * @package M44rt3np44uw\IsSteamRIP
 */
class IsSteamRIP
{
    /**
     *
     */
    const API_URL = "http://is.steam.rip/api/v1/?request=";

    /**
     *
     */
    const OUTPUTS = [
        "steamStatus",
        "getAllRegionData",
        "getRegions",
        "isSteamRip",
        "opData",
        "test"
    ];

    /**
     * @var Client
     */
    private $client;

    /**
     * IsSteamRIP constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $output
     */
    public function __call($output)
    {
        if(in_array($output, IsSteamRIP::OUTPUTS))
        {
            $this->_apiCall($output);
        }
    }

    /**
     * @param $output
     * @return \Psr\Http\Message\StreamInterface
     */
    private function _apiCall($output)
    {
        $result = $this->client->get(IsSteamRIP::API_URL . $output);

        return $result->getBody();
    }
}