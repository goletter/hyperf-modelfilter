<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Goletter\ModelFilter;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                ModelFilter::class => \Goletter\ModelFilter\Modelfilter::class,
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config of modelFilter client.',
                    'source' => __DIR__ . '/config/modelfilter.php',
                    'destination' => BASE_PATH . '/config/autoload/modelfilter.php',
                ],
            ],
        ];
    }
}
