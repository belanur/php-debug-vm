<?php
namespace Acme\Rest;

class JsonResponse implements ResponseInterface
{
    /**
     * @var array
     */
    private $body = [];

    /**
     * @var int
     */
    private $statusCode = 200;

    /**
     * @param array $body
     * @param int   $statusCode
     */
    public function __construct($statusCode, array $body)
    {
        $this->statusCode = $statusCode;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function flush()
    {
        http_response_code($this->statusCode);
        echo json_encode($this->body, JSON_PRETTY_PRINT);
    }
}