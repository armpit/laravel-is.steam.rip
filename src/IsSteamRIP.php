<?php namespace M44rt3np44uw\IsSteamRIP;

use GuzzleHttp\Client;

/**
 * Class IsSteamRIP
 * @package M44rt3np44uw\IsSteamRIP
 */
class IsSteamRIP
{
    /**
     * The API URL.
     */
    const API_URL = "http://is.steam.rip/api/v1/?request=";

    /**
     * The different outputs.
     */
    private $outputs = [
        "steamStatus",
        "getAllRegionData",
        "getRegions",
        "isSteamRip",
        "opData",
        "test"
    ];

    /**
     * Guzzle Client.
     *
     * @var Client
     */
    private $client;

    /**
     * Is Steam RIP constructor.
     *
     * IsSteamRIP constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Call function.
     *
     * @param $output
     * @param $arguments
     * @return \Psr\Http\Message\StreamInterface
     */
    public function __call($output, $arguments)
    {
        if(in_array($output, $this->outputs))
        {
            return $this->_apiCall($output);
        }

        else {
            return false;
        }
    }

    /**
     * Make the request to the is.steam.rip API.
     *
     * @param $output
     * @return \Psr\Http\Message\StreamInterface
     */
    private function _apiCall($output)
    {
        $result = $this->client->get(IsSteamRIP::API_URL . $output);

        return $result->getBody();
    }
}