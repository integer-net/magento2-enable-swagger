<?php
declare(strict_types=1);

namespace IntegerNet\EnableSwagger\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\State;
use Magento\Store\Model\ScopeInterface;

class SwaggerConfigPlugin
{
    private const CONFIG_PATH_ENABLE_SWAGGER = 'dev/swagger/active';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var State
     */
    private $state;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        State $state
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->state = $state;
    }

    /**
     * Enables Swagger based on configuration setting, even in production mode.
     * Always enables Swagger in developer mode.
     *
     * @return bool
     *
     * @see \Magento\Swagger\Model\Config::isEnabled
     */
    public function afterIsEnabled(): bool
    {
        return $this->state->getMode() === State::MODE_DEVELOPER
            || $this->scopeConfig->isSetFlag(
                self::CONFIG_PATH_ENABLE_SWAGGER,
                ScopeInterface::SCOPE_STORE
            );
    }
}
