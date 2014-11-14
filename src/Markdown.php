<?php

namespace photon\template\tag;
use \photon\template\tag\Tag;

/**
 * Markdown tag for photon template engine
 *
 * @param $mdtext A Markdown string to convert to HTML
 */
class Markdown extends \photon\template\tag\Tag
{
    function start($mdtext)
    {
        echo \Michelf\MarkdownExtra::defaultTransform($mdtext);
    }
}

