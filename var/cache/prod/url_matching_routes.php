<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\QuestionController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/comments/([^/]++)/vote/(up|down)(*:40)'
                .'|/questions/([^/]++)(*:66)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'app_comment_commentvote', '_controller' => 'App\\Controller\\CommentController::commentVote'], ['id', 'direction'], ['POST' => 0], null, false, true, null]],
        66 => [
            [['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
