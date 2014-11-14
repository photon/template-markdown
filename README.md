template-markdown
=====================

[![Build Status](https://travis-ci.org/photon/template-markdown.svg?branch=master)](https://travis-ci.org/photon/template-markdown)

Template tag to filter Markdown text to HTML

Quick start
-----------

1) Add the module in your project

    composer require "photon/template-markdown:dev-master"

or for a specific version

    composer require "photon/template-markdown:1.0.0"

2) Add the Tag and the Modifier in your template engine configuration

    'template_tags' => array(
        'Markdown'      => '\photon\template\tag\Markdown',
    ),
    'template_modifiers' => array(
        'Markdown'      => '\Michelf\MarkdownExtra::defaultTransform',
    ),

3) Write some template

    {$mdtext|Markdown|safe}

or

    {Markdown $mdtext}

3) Enjoy
