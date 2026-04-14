<?php

namespace Yeepay\Yop\Sdk\Config;

use Yeepay\Yop\Sdk\Exception\YopClientException;


class FileAppSdkConfigProvider implements AppSdkConfigProvider
{
    // 根目录前缀
    private static $ROOT_DIR = '../../../';

    // 默认配置文件
    private static $DEFAULT_CONFIG_FILE = "../../../yop_sdk_config_default.json";

    /**
     * @var string
     */
    private $configFile;

    /**
     * @var DefaultAppSdkConfigProvider
     */
    private $defaultProvider;


    /**
     * FileAppSdkConfigProvider constructor.
     * @param $configFile string
     * @throws YopClientException
     */
    public function __construct($configFile)
    {
        $this->configFile = $configFile;
        $originFile = $configFile;
        $relativeFile = FileAppSdkConfigProvider::$ROOT_DIR . $configFile;
        if (file_exists($originFile)) {
            $configJson = file_get_contents($configFile);
        } else if (file_exists($relativeFile)) {
            $configJson = file_get_contents($relativeFile);
        } else if (file_exists(FileAppSdkConfigProvider::$DEFAULT_CONFIG_FILE)) {
            $this->configFile = FileAppSdkConfigProvider::$DEFAULT_CONFIG_FILE;
            $configJson = file_get_contents($this->configFile);
        } else {
            throw new YopClientException('config file not found ' . $configFile);
        }
        $config = json_decode($configJson, true);
        $this->defaultProvider = new DefaultAppSdkConfigProvider(new AppSdkConfig($config));
    }

    public function getConfigFile()
    {
        return $this->configFile;
    }


    public function getConfig($appKey)
    {
        return $this->defaultProvider->getConfig($appKey);
    }

    public function getAllConfig()
    {
        return $this->defaultProvider->getAllConfig();
    }

    public function getDefaultConfig()
    {
        return $this->defaultProvider->getDefaultConfig();
    }
}