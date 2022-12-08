<?php

return [
    'edit/([0-9]+)' => 'site/update/$1',
    'delete/([0-9]+)' => 'site/delete/$1',
    'create' => 'site/create',
    'truncate' => 'site/truncate',

    '' => 'site/index'
];
