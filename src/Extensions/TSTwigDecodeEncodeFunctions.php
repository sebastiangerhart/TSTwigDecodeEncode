<?php
namespace TSDecodeEncode\Extensions;

use Plenty\Plugin\Templates\Extensions\Twig_Extension;
use Plenty\Plugin\Templates\Factories\TwigFactory;

/**
 * Created by sg, 04.04.18 17:01
 * Class TSTwigDecodeEncodeFunctions
 * @package TSDecodeEncode\Extensions
 */
class TSTwigDecodeEncodeFunctions extends Twig_Extension
{
    /**
     * @var TwigFactory
     */
    private $twig;

    /**
     * TSTwigDecodeEncodeFunctions constructor.
     * @param TwigFactory $twig
     */
    public function __construct(TwigFactory $twig)
    {

        $this->twig = $twig;
    }

    /**
     * Return the name of the extension. The name must be unique.
     *
     * @return string The name of the extension
     */
    public function getName(): string
    {
        return "TSDecodeEncode_Extension_TSTwigDecodeEncodeFunctions";
    }

    /**
     * Return a list of functions to add.
     *
     * @return array the list of functions to add.
     */
    public function getFunctions(): array
    {
        return [
            $this->twig->createSimpleFunction('base64_decode', [$this, 'base64_decode']),
			$this->twig->createSimpleFunction('base64_encode', [$this, 'base64_encode']),
			$this->twig->createSimpleFunction('urldecode', [$this, 'urldecode']),
			$this->twig->createSimpleFunction('urlencode', [$this, 'urlencode'])
        ];
    }

    /**
     * @return string
     */
    public function base64_decode($str)
	{
        return base64_decode($str);
    }

    /**
     * @return string
     */
    public function base64_encode($str)
	{
        return base64_encode($str);
    }
	
    /**
     * @return string
     */
    public function urldecode($str)
	{
        return urldecode($str);
    }
	
    /**
     * @return string
     */
    public function urlencode($str)
	{
        return urlencode($str);
    }

    /**
     * Return a map of global helper objects to add.
     *
     * @return array the map of helper objects to add.
     */
    public function getGlobals(): array
    {
        return [];
    }
}
