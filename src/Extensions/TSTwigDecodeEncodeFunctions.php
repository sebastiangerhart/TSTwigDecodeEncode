<?php
namespace TSTwigDecodeEncode\Extensions;

use Plenty\Plugin\Templates\Extensions\Twig_Extension;
use Plenty\Plugin\Templates\Factories\TwigFactory;

/**
 * Created by sg, 04.04.18 17:01
 * Class TSTwigDecodeEncodeFunctions
 * @package TSTwigDecodeEncode\Extensions
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
        return "TSTwigDecodeEncode_Extension_TSTwigDecodeEncodeFunctions";
    }

    /**
     * Return a list of functions to add.
     *
     * @return array the list of functions to add.
     */
    public function getFunctions(): array
    {
        return [
            $this->twig->createSimpleFunction('base64_decode', [$this, 'ts_base64_decode'], ['is_safe' => array('html')]),
			$this->twig->createSimpleFunction('base64_encode', [$this, 'ts_base64_encode'], ['is_safe' => array('html')]),
			$this->twig->createSimpleFunction('urldecode', [$this, 'ts_urldecode'], ['is_safe' => array('html')]),
			$this->twig->createSimpleFunction('urlencode', [$this, 'ts_urlencode'], ['is_safe' => array('html')])
        ];
    }

    /**
     * @return string
     */
    public function ts_base64_decode($str)
	{
        return base64_decode($str);
    }

    /**
     * @return string
     */
    public function ts_base64_encode($str)
	{
        return base64_encode($str);
    }
	
    /**
     * @return string
     */
    public function ts_urldecode($str)
	{
        return urldecode($str);
    }
	
    /**
     * @return string
     */
    public function ts_urlencode($str)
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
