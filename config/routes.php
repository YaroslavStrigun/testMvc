<?php

return array(


    'admin/tasks/update/([0-9]+)' => 'adminTask/update/$1',
    'admin/tasks/delete/([0-9]+)' => 'adminTask/delete/$1',
    'admin/tasks' => 'adminTask/index',

    // Админпанель:
   'admin/cabinet' => 'adminTask/index',
    'admin' => 'admin/index',
    'user/login' => 'user/login',
    'main/nameasc/page-([0-9]+)' => 'site/nameasc/$1',
    'main/namedesc/page-([0-9]+)' => 'site/namedesc/$1',
    'main/masc/page-([0-9]+)' => 'site/emailasc/$1',
    'main/mdesc/page-([0-9]+)' => 'site/emaildesc/$1',
    'main/solved/page-([0-9]+)' => 'site/statusasc/$1',
    'main/unsolved/page-([0-9]+)' => 'site/statusdesc/$1',
    'main/page-([0-9]+)' => 'site/tasks/$1', // actionIndex в SiteController
    'main' => 'site/tasks',
);
