﻿<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => "Êtes-vous sûr de vouloir supprimer cet utilisateur de façon permanente ? Toutes  les références à cet utilisateur dans l'application peuvent provoquer des erreurs et cette opération ne peut être annullée.",
                'if_confirmed_off' => '(pour le mode sans confirmation)',
                'restore_user_confirm' => 'Restaurer cet utilisateur à son statut original ?',
            ],
        ],

        'dashboard' => [
            'title' => 'Tableau de bord administrateur',
            'welcome' => 'Bienvenue',
        ],

        'general' => [
            'all_rights_reserved' => 'Tous droits réservés.',
            'are_you_sure' => 'Etes-vous sûr?',
            'boilerplate_link' => 'Online Notice Board System',
            'continue' => 'Continue',
            'member_since' => 'Membre depuis',
            'minutes' => ' minutes',
            'search_placeholder' => 'Rechercher...',
            'timeout' => 'Vous avez été automatiquement déconnecté pour cause d\'inactivité pendant ',

            'see_all' => [
                'messages' => 'Voir tous les messages',
                'notifications' => 'Voir toutes les notifications',
                'tasks' => 'Voir les nouvelles tâches',
            ],

            'status' => [
                'online' => 'En ligne',
                'offline' => 'Hors ligne',
            ],

            'you_have' => [
                'messages' => "{0} Vous n'avez pas de message|{1} Vous avez 1 message|[2,Inf] Vous avez :number messages",
                'notifications' => "{0} Vous n'avez pas de notification|{1} Vous avez 1 notification|[2,Inf] Vous avez :number notifications",
                'tasks' => "{0} Vous n'avez pas de tâche affectée|{1} Vous avez 1 tâche affectée|[2,Inf] Vous avez :number tâches affectées",
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Votre lien de réinitialisation',
            'reset_password' => 'Cliquez ici pour réinitialiser votre mot de passe',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Cliquez ici pour confirmer votre compte :',
        ],

        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Helper sur la base de la permissions : ',
                'role' => 'Helper sur la base du rôle : ',
            ],

            'js_injected_from_controller' => 'Javascript injecté depuis un contrôleur',

            'using_blade_extensions' => 'Utilisation des extensions Blade',

            'using_access_helper' => [
                'array_permissions' => "L'utilisateur doit disposer de toutes les permissions d'un tableau, identifiées soit par leur ID, soit par leur nom.",
                'array_permissions_not' => "L'utilisateur doit disposer d'au moins une des permissions d'un tableau, identifiées soit par leur ID, soit par leur nom.",
                'array_roles' => "L'utilisateur doit disposer de tous les rôles d'un tableau, identifiés soit par leur ID, soit par leur nom.",
                'array_roles_not' =>  "L'utilisateur doit disposer d'au moins un des rôles d'un tableau, identifiés soit par leur ID, soit par leur nom.",
                'permission_id' => "L'utilisateur doit disposer d'une permission identifiée par son ID",
                'permission_name' => "L'utilisateur doit disposer d'une permission identifiée par son nom",
                'role_id' => "L'utilisateur doit disposer d'un rôle identifié par son ID",
                'role_name' => "L'utilisateur doit disposer d'un rôle identifié par son nom",
            ],

            'view_console_it_works' => 'Sur la console du navigateur, vous devriez voir  \'it works!\', ce qui est produit depuis le FrontendController@index',
            'you_can_see_because' => 'Vous voyez ce message car vous disposez du rôle \':role\'!',
            'you_can_see_because_permission' => 'Vous voyez ce message car vous disposez de la permission \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Profil modifié avec succès.',
            'password_updated' => 'Mot de passe modifié avec succès.',
        ],

        'welcome_to' => 'Bienvenue sur :place',
    ],
];