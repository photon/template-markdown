<?php

use \photon\shortcuts\Template;

class MarkdownTest extends \photon\test\TestCase
{
    public function testTag()
    {
        $str = Template::RenderToString('tmpl-tag.html', array(
            'mdtext' => '#A h1 title',
        ));
        
        $this->assertEquals(trim($str), '<h1>A h1 title</h1>');
    }

    public function testModifier()
    {
        $str = Template::RenderToString('tmpl-modifier.html', array(
            'mdtext' => '#A h1 title',
        ));
        
        $this->assertEquals(trim($str), '<h1>A h1 title</h1>');
    }
}
