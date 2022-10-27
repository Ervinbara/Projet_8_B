<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::indexAction'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginAction'], [], [['text', '/login']], [], [], []],
    'login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginCheck'], [], [['text', '/login_check']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logoutCheck'], [], [['text', '/logout']], [], [], []],
    'task_list' => [[], ['_controller' => 'App\\Controller\\TaskController::listAction'], [], [['text', '/tasks']], [], [], []],
    'task_done' => [[], ['_controller' => 'App\\Controller\\TaskController::listTasksDone'], [], [['text', '/tasksDone']], [], [], []],
    'task_create' => [[], ['_controller' => 'App\\Controller\\TaskController::createAction'], [], [['text', '/tasks/create']], [], [], []],
    'task_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'task_toggle' => [['id'], ['_controller' => 'App\\Controller\\TaskController::toggleTaskAction'], [], [['text', '/toggle'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::deleteTaskAction'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tasks']], [], [], []],
    'user_list' => [[], ['_controller' => 'App\\Controller\\UserController::listAction'], [], [['text', '/admin/users']], [], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\UserController::createAction'], [], [['text', '/admin/users/create']], [], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::editAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], [], []],
];