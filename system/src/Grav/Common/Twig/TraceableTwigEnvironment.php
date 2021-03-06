<?php
namespace Grav\Common\Twig;

use Grav\Common\GravTrait;

/**
 * The Twig Environment class is a wrapper that handles configurable permissions
 * for the Twig cache files
 *
 * @author RocketTheme
 * @license MIT
 */
class TraceableTwigEnvironment extends \DebugBar\Bridge\Twig\TraceableTwigEnvironment
{
    use WriteCacheFileTrait;
}
