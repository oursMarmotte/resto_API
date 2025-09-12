<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosFakerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $seed;
    private $functionPrefix;
    private $_usedProperties = [];

    /**
     * set to some value to get the same fake values on reload
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function seed($value): static
    {
        $this->_usedProperties['seed'] = true;
        $this->seed = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function functionPrefix($value): static
    {
        $this->_usedProperties['functionPrefix'] = true;
        $this->functionPrefix = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_faker';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('seed', $value)) {
            $this->_usedProperties['seed'] = true;
            $this->seed = $value['seed'];
            unset($value['seed']);
        }

        if (array_key_exists('function_prefix', $value)) {
            $this->_usedProperties['functionPrefix'] = true;
            $this->functionPrefix = $value['function_prefix'];
            unset($value['function_prefix']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['seed'])) {
            $output['seed'] = $this->seed;
        }
        if (isset($this->_usedProperties['functionPrefix'])) {
            $output['function_prefix'] = $this->functionPrefix;
        }

        return $output;
    }

}
