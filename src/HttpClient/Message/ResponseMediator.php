<?php declare(strict_types=1);

namespace StarfolkSoftware\Paystack\HttpClient\Message;

use Psr\Http\Message\ResponseInterface;

final class ResponseMediator
{
    public static function getContent(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}