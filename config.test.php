<?php

return array(
    'tmp_folder' => sys_get_temp_dir(),
    'template_folders' => array(
        __DIR__ .'/tests',
    ),
    'template_tags' => array(
        'Markdown'      => '\photon\template\tag\Markdown',
    ),
    'template_modifiers' => array(
        'Markdown'      => '\Michelf\MarkdownExtra::defaultTransform',
    ),
);
