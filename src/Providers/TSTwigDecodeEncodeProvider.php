<?php

namespace TSTwigDecodeEncode\Providers;

use TSTwigDecodeEncode\Extensions\TSTwigDecodeEncodeFunctions;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ConfigRepository;

/**
 * Class TSTwigDecodeEncodeProvider
 * @package TSTwigDecodeEncode\Providers
 */
class TSTwigDecodeEncodeProvider extends ServiceProvider
{
    public function register()
	{
    }
    
    public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    {
        $twig->addExtension(TSTwigDecodeEncodeFunctions::class);
    }
}
