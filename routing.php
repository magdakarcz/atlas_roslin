<?php
use core\App;
use core\Utils;
App::getRouter()->setDefaultRoute('roslinaList'); 
//App::getRouter()->setDefaultRoute('roslinaList');
App::getRouter()->setLoginRoute('login'); 
Utils::addRoute('roslinaList',    'roslinaListCtrl');
//Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('rola',    'RolaCtrl',	['1']);
Utils::addRoute('rolaEdit',    'RolaCtrl',	['1']);
Utils::addRoute('rolaSave',    'RolaCtrl',	['1']);
Utils::addRoute('rolaDelete',    'RolaCtrl',	['1']);
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('register', 'rejestracjaCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('roslinaNew',     'roslinaEditCtrl',	['2','3']);//['admin','moderator']
Utils::addRoute('roslinaEdit',    'roslinaEditCtrl',	['3']);//['admin','moderator']
Utils::addRoute('roslinaSave',    'roslinaEditCtrl',	['2','3']);//['admin','moderator']
Utils::addRoute('roslinaDelete',  'roslinaEditCtrl',	['3']);//['admin','moderator']

//Utils::addRoute('roslinaNew',     'roslinaEditCtrl',	['user','admin']);
//Utils::addRoute('roslinaEdit',    'roslinaEditCtrl',	['user','admin']);
//Utils::addRoute('roslinaSave',    'roslinaEditCtrl',	['user','admin']);