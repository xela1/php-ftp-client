<?php
namespace Lazzard\FtpClient\Connection;

use Lazzard\FtpClient\Exception\ClientException;

interface ConnectionInterface
{
    /**
     * Open an FTP connection.
     *
     * @return mixed
     */
    public function open();

    /**
     * Close the FTP connection.
     *
     * @return bool
     *
     * @throws ClientException
     */
    public function close();

    /**
     * @return resource
     */
    public function getStream();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @param string $host
     */
    public function setHost($host);

    /**
     * @return int
     */
    public function getPort();

    /**
     * @param int $port
     */
    public function setPort($port);

    /**
     * @return int
     */
    public function getTimeout();

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout);
}