<?php

namespace mykemeynell\Support\Providers\Concern;

/**
 * Trait AliasService.
 *
 * @property \Illumiate\Foundation\Application $app
 * @property array                             $aliases
 *
 * @package mykemeynell\Support
 */
trait AliasService
{
    /**
     * Register all aliases for this service provider.
     *
     * @return void
     */
    public function registerAliases(): void
    {
        foreach((array) $this->aliases as $key => $aliases) {
            foreach((array) $aliases as $alias) {
                $this->app->alias($key, $alias);
            }
        }
    }
}
