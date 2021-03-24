<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/agents' => [[['_route' => 'agents_index', '_controller' => 'App\\Controller\\AgentsController::index'], null, null, null, false, false, null]],
        '/agents-add' => [[['_route' => 'agent_add', '_controller' => 'App\\Controller\\AgentsController::addAgent'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, false, false, null]],
        '/contacts-add' => [[['_route' => 'contact_add', '_controller' => 'App\\Controller\\ContactsController::addContact'], null, null, null, false, false, null]],
        '/hideouts' => [[['_route' => 'hideouts_index', '_controller' => 'App\\Controller\\HideoutsController::index'], null, null, null, false, false, null]],
        '/hideouts-add' => [[['_route' => 'hideout_add', '_controller' => 'App\\Controller\\HideoutsController::addSkill'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app.home', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/missions-add' => [[['_route' => 'mission_add', '_controller' => 'App\\Controller\\MissionsController::addMission'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'skills_index', '_controller' => 'App\\Controller\\SkillsController::index'], null, null, null, false, false, null]],
        '/skills-add' => [[['_route' => 'skill_add', '_controller' => 'App\\Controller\\SkillsController::addSkill'], null, null, null, false, false, null]],
        '/targets' => [[['_route' => 'targets_index', '_controller' => 'App\\Controller\\TargetsController::index'], null, null, null, false, false, null]],
        '/targets-add' => [[['_route' => 'target_add', '_controller' => 'App\\Controller\\TargetsController::addTarget'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/agents/([^/]++)(?'
                    .'|(*:26)'
                    .'|/(?'
                        .'|update(*:43)'
                        .'|delete(*:56)'
                    .')'
                .')'
                .'|/contacts/([^/]++)(?'
                    .'|(*:86)'
                    .'|/(?'
                        .'|update(*:103)'
                        .'|delete(*:117)'
                    .')'
                .')'
                .'|/hideouts/([^/]++)(?'
                    .'|(*:148)'
                    .'|/(?'
                        .'|update(*:166)'
                        .'|delete(*:180)'
                    .')'
                .')'
                .'|/missions/([^/]++)(?'
                    .'|(*:211)'
                    .'|/(?'
                        .'|update(*:229)'
                        .'|delete(*:243)'
                    .')'
                .')'
                .'|/skills/([^/]++)(?'
                    .'|(*:272)'
                    .'|/(?'
                        .'|update(*:290)'
                        .'|delete(*:304)'
                    .')'
                .')'
                .'|/targets/([^/]++)(?'
                    .'|(*:334)'
                    .'|/(?'
                        .'|update(*:352)'
                        .'|delete(*:366)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'agent_details', '_controller' => 'App\\Controller\\AgentsController::showAgent'], ['id'], null, null, false, true, null]],
        43 => [[['_route' => 'agent_update', '_controller' => 'App\\Controller\\AgentsController::updateAgent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'agent_delete', '_controller' => 'App\\Controller\\AgentsController::deleteContact'], ['id'], ['GET' => 0], null, false, false, null]],
        86 => [[['_route' => 'contact_details', '_controller' => 'App\\Controller\\ContactsController::showContact'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'contact_update', '_controller' => 'App\\Controller\\ContactsController::updateContact'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        117 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactsController::deleteContact'], ['id'], ['GET' => 0], null, false, false, null]],
        148 => [[['_route' => 'hideout_details', '_controller' => 'App\\Controller\\HideoutsController::showHideout'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'hideout_update', '_controller' => 'App\\Controller\\HideoutsController::updateHideout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        180 => [[['_route' => 'hideout_delete', '_controller' => 'App\\Controller\\HideoutsController::deleteContact'], ['id'], ['GET' => 0], null, false, false, null]],
        211 => [[['_route' => 'mission_details', '_controller' => 'App\\Controller\\MissionsController::showMission'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'mission_update', '_controller' => 'App\\Controller\\MissionsController::updateMission'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'mission_delete', '_controller' => 'App\\Controller\\MissionsController::deleteMission'], ['id'], ['GET' => 0], null, false, false, null]],
        272 => [[['_route' => 'skill_details', '_controller' => 'App\\Controller\\SkillsController::showSkill'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'skill_update', '_controller' => 'App\\Controller\\SkillsController::updateContact'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'skill_delete', '_controller' => 'App\\Controller\\SkillsController::deleteContact'], ['id'], ['GET' => 0], null, false, false, null]],
        334 => [[['_route' => 'target_details', '_controller' => 'App\\Controller\\TargetsController::showAgent'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'target_update', '_controller' => 'App\\Controller\\TargetsController::updateContact'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [
            [['_route' => 'target_delete', '_controller' => 'App\\Controller\\TargetsController::deleteContact'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
