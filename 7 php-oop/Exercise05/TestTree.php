<?php

namespace App;

require_once "tree/Tree.php";

use function \tree\Tree\h;

class TestTree extends \PHPUnit_Framework_TestCase
{
    public function testInheritance1()
    {
        $tree = h('div', [],
            h('img', ['src' => 'link/to/path']),
            h('div', ['class' => 'row'],
                'body',
                h('p', [], 'paragraph1'),
                h('p', [], 'paragraph2')
            )
        );

        $result = '<div><img src="link/to/path"><div class="row">body<p>paragraph1</p><p>paragraph2</p></div></div>';
        $this->assertEquals($result, $tree->toString());
    }

    public function testInheritance2()
    {
        $tree = h('div', [],
            h('p', [],
                'paragraph1',
                h('img', ['src' => 'link/to/another/path'])
            ),
            'body',
            h('img', ['src' => 'link/to/path'])
        );

        $result = '<div><p>paragraph1<img src="link/to/another/path"></p>body<img src="link/to/path"></div>';
        $this->assertEquals($result, $tree->toString());
    }
}
