<?php

namespace Lazzard\FtpClient\Config;

use Lazzard\FtpClient\Exception\ConfigException;

/**
 * Interface Configurable
 *
 * @since 1.0
 * @package Lazzard\FtpClient\Configuration
 * @author EL AMRANI CHAKIR <elamrani.sv.laza@gmail.com>
 */
interface Configurable
{
    /**
     * Gets FTP timeout value of an FTP configuration instance.
     *
     * @return int
     */
    public function getTimeout();

    /**
     * Sets FTP timeout value for an FTP configuration instance,
     * Must be an integer and greater than 0.
     *
     * @param int $timeout
     *
     * @throws ConfigException
     */
    public function setTimeout($timeout);

    /**
     * @return bool
     */
    public function isPassive();

    /**
     * @param bool $passive
     *
     * @throws ConfigException
     */
    public function setPassive($passive);

    /**
     * @return bool
     */
    public function isAutoSeek();

    /**
     * @param bool $autoSeek
     *
     * @throws ConfigException
     */
    public function setAutoSeek($autoSeek);

    /**
     * Gets true if passive mode of an FTP configuration instance is activated,
     * Otherwise return false.
     *
     * @return bool
     */
    public function isUsePassiveAddress();

    /**
     * Sets passive/active mode for an FTP configuration instance.
     *
     * @param $usePassiveAddress
     *
     * @throws ConfigException
     */
    public function setUsePassiveAddress($usePassiveAddress);

    /**
     * Gets the initial directory of an FTP configuration instance.
     *
     * @return string
     */
    public function getinitialDirectory();

    /**
     * Sets the initial directory of an FTP configuration instance.
     *
     * @param $initialDirectory
     *
     * @throws ConfigException
     */
    public function setinitialDirectory($initialDirectory);
}