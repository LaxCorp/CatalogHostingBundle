<?php

namespace LaxCorp\CatalogHostingBundle\Helper;

use Circle\RestClientBundle\Exceptions\CurlException;
use Circle\RestClientBundle\Services\RestInterface;
use Psr\Log\LoggerInterface;

/**
 * @inheritdoc
 */
class RestHelper
{

    /**
     * @var RestInterface
     */
    private $restClient;

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @inheritdoc
     */
    public function __construct(
        string $apiUrl, string $login, string $password, RestInterface $restClient, LoggerInterface $logger
    ) {
        $this->restClient = $restClient;
        $this->apiUrl     = $apiUrl;
        $this->login      = $login;
        $this->password   = $password;
        $this->logger     = $logger;
    }


    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function getText(string $path)
    {
        $url = $this->makeUrl($path);

        $this->logger->info('Get text: ' . $url);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->get($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Get text error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Get text result: ' . "\n" . $resultContent);

        return $resultContent;
    }


    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function getJson(string $path)
    {
        $url = $this->makeUrl($path);

        $this->logger->info('Get json: ' . $url);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->get($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Get json error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Get json result: ' . "\n" . $resultContent);

        return $resultContent;
    }

    /**
     * @param string $path
     * @param string $json
     *
     * @return CurlException|\Exception|string
     */
    public function postJson(string $path, string $json)
    {

        $url = $this->makeUrl($path);

        $this->logger->info('Post: ' . $url, ['post' => $json]);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->post($url, $json, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Post error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Post result: ', ['result' => $resultContent]);

        return $resultContent;
    }

    /**
     * @param string $path
     * @param string $json
     *
     * @return CurlException|\Exception|string
     */
    public function putJson(string $path, string $json)
    {
        $url = $this->makeUrl($path);

        $this->logger->info('Put: ' . $url, ['put' => $json]);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->put($url, $json, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Put error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Put result:', ['result' => $resultContent]);

        return $resultContent;
    }

    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function delete(string $path)
    {
        $url = $this->makeUrl($path);

        $this->logger->info('Delete: ' . $url);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->delete($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Delete error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Delete result: ' . "\n" . $resultContent);

        return $resultContent;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function makeUrl(string $path)
    {
        return $this->apiUrl . '/' . $this->fixPath($path);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function fixPath(string $path)
    {
        return (string)preg_replace('/^\//', '', $path);
    }

    /**
     * @return array
     */
    private function getAuthHeader()
    {
        return [
            CURLOPT_HTTPHEADER =>
                [
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode($this->login . ':' . $this->password)
                ]
        ];
    }

}