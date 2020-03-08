<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v4/contests' => [
            [['_route' => 'app_api_contest_addcontest', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_api_contest_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::listAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'app_api_generalinfo_getversion', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'app_api_generalinfo_getinfo', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'api_root', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/status' => [[['_route' => 'app_api_generalinfo_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'app_api_generalinfo_getuser', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [[['_route' => 'app_api_generalinfo_getdatabaseconfiguration', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config/check' => [[['_route' => 'app_api_generalinfo_getconfigcheck', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'app_api_judgehost_getjudgehosts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_judgehost_createjudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/users/groups' => [[['_route' => 'app_api_user_addgroup', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [[['_route' => 'app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/config/check/phpinfo' => [[['_route' => 'jury_config_phpinfo', '_controller' => 'App\\Controller\\Jury\\ConfigController::phpinfoAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/import-export/contest-yaml' => [[['_route' => 'jury_import_export_yaml', '_controller' => 'App\\Controller\\Jury\\ImportExportController::contestYamlAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/add/multiple' => [[['_route' => 'jury_judgehost_add', '_controller' => 'App\\Controller\\Jury\\JudgehostController::addMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions' => [[['_route' => 'jury_judgehost_restrictions', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehost-restrictions/add' => [[['_route' => 'jury_judgehost_restriction_add', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::addAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/team/submit' => [[['_route' => 'team_submit', '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], null, null, null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|v(?'
                            .'|4/(?'
                                .'|contests/([^/]++)(?'
                                    .'|/(?'
                                        .'|awards(?'
                                            .'|(*:60)'
                                            .'|/([^/]++)(*:76)'
                                        .')'
                                        .'|c(?'
                                            .'|larifications(?'
                                                .'|(*:104)'
                                                .'|/([^/]++)(*:121)'
                                            .')'
                                            .'|ontest\\-yaml(*:142)'
                                        .')'
                                        .'|s(?'
                                            .'|tat(?'
                                                .'|e(*:162)'
                                                .'|us(*:172)'
                                            .')'
                                            .'|coreboard(*:190)'
                                            .'|ubmissions(?'
                                                .'|(*:211)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:231)'
                                                    .'|/(?'
                                                        .'|files(*:248)'
                                                        .'|source\\-code(*:268)'
                                                    .')'
                                                .')'
                                                .'|(*:278)'
                                            .')'
                                        .')'
                                        .'|event\\-feed(*:299)'
                                        .'|groups(?'
                                            .'|(*:316)'
                                            .'|/([^/]++)(*:333)'
                                        .')'
                                        .'|judgement(?'
                                            .'|s(?'
                                                .'|(*:358)'
                                                .'|/([^/]++)(*:375)'
                                            .')'
                                            .'|\\-types(?'
                                                .'|(*:394)'
                                                .'|/([^/]++)(*:411)'
                                            .')'
                                        .')'
                                        .'|languages(?'
                                            .'|(*:433)'
                                            .'|/([^/]++)(*:450)'
                                        .')'
                                        .'|organizations(?'
                                            .'|(*:475)'
                                            .'|/([^/]++)(*:492)'
                                        .')'
                                        .'|problems(?'
                                            .'|(*:512)'
                                            .'|/([^/]++)(*:529)'
                                        .')'
                                        .'|runs(?'
                                            .'|(*:545)'
                                            .'|/([^/]++)(*:562)'
                                        .')'
                                        .'|teams(?'
                                            .'|(*:579)'
                                            .'|/([^/]++)(*:596)'
                                        .')'
                                    .')'
                                    .'|(*:606)'
                                .')'
                                .'|executables/([^/]++)(*:635)'
                                .'|judgehosts/(?'
                                    .'|([^/]++)(*:665)'
                                    .'|next\\-judging/([^/]++)(*:695)'
                                    .'|update\\-judging/([^/]++)/(\\d+)(*:733)'
                                    .'|add\\-judging\\-run/([^/]++)/(\\d+)(*:773)'
                                    .'|internal\\-error(*:796)'
                                .')'
                                .'|testcases/(?'
                                    .'|next\\-to\\-judge/([^/]++)(*:842)'
                                    .'|([^/]++)/file/([^/]++)(*:872)'
                                .')'
                                .'|users/([^/]++)(*:895)'
                            .')'
                            .'|ersion(?:\\.(json|xml|html))?(*:932)'
                        .')'
                        .'|contests(?'
                            .'|/([^/]++)/(?'
                                .'|awards(?'
                                    .'|(?:\\.(json|xml|html))?(*:996)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1037)'
                                .')'
                                .'|clarifications(?'
                                    .'|(?:\\.(json|xml|html))?(*:1086)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1128)'
                                .')'
                            .')'
                            .'|(?:\\.(json|xml|html))?(?'
                                .'|(*:1164)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                    .'|(*:1213)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|contest\\-yaml(?:\\.(json|xml|html))?(*:1270)'
                                    .'|stat(?'
                                        .'|e(?:\\.(json|xml|html))?(*:1309)'
                                        .'|us(?:\\.(json|xml|html))?(*:1342)'
                                    .')'
                                    .'|event\\-feed(?:\\.(json|xml|html))?(*:1385)'
                                .')'
                            .')'
                        .')'
                        .'|executables/([^/\\.]++)(?:\\.(json|xml|html))?(*:1441)'
                        .'|info(?:\\.(json|xml|html))?(*:1476)'
                    .')'
                    .'|(?:\\.(json|xml|html))?(*:1508)'
                    .'|/(?'
                        .'|status(?:\\.(json|xml|html))?(*:1549)'
                        .'|user(?'
                            .'|(?:\\.(json|xml|html))?(*:1587)'
                            .'|s(?'
                                .'|/(?'
                                    .'|groups(?:\\.(json|xml|html))?(*:1632)'
                                    .'|teams(?:\\.(json|xml|html))?(*:1668)'
                                    .'|accounts(?:\\.(json|xml|html))?(*:1707)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:1739)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1781)'
                            .')'
                        .')'
                        .'|con(?'
                            .'|fig(?'
                                .'|(?:\\.(json|xml|html))?(*:1826)'
                                .'|/check(?:\\.(json|xml|html))?(*:1863)'
                            .')'
                            .'|tests/([^/]++)/(?'
                                .'|groups(?'
                                    .'|(?:\\.(json|xml|html))?(*:1922)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:1964)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(?:\\.(json|xml|html))?(*:2012)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2054)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(?:\\.(json|xml|html))?(*:2096)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2138)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(?:\\.(json|xml|html))?(*:2183)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2225)'
                                .')'
                                .'|organizations(?'
                                    .'|(?:\\.(json|xml|html))?(*:2273)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2315)'
                                .')'
                                .'|problems(?'
                                    .'|(?:\\.(json|xml|html))?(?'
                                        .'|(*:2361)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2404)'
                                .')'
                                .'|runs(?'
                                    .'|(?:\\.(json|xml|html))?(*:2443)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2485)'
                                .')'
                                .'|s(?'
                                    .'|coreboard(?:\\.(json|xml|html))?(*:2530)'
                                    .'|ubmissions(?'
                                        .'|(?:\\.(json|xml|html))?(*:2574)'
                                        .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2616)'
                                        .'|(?:\\.(json|xml|html))?(*:2647)'
                                        .'|/([^/]++)/(?'
                                            .'|files(?:\\.(json|xml|html))?(*:2696)'
                                            .'|source\\-code(?:\\.(json|xml|html))?(*:2739)'
                                        .')'
                                    .')'
                                .')'
                                .'|teams(?'
                                    .'|(?:\\.(json|xml|html))?(*:2781)'
                                    .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:2823)'
                                .')'
                            .')'
                        .')'
                        .'|judgehosts(?'
                            .'|(?:\\.(json|xml|html))?(*:2870)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:2915)'
                                .'|update\\-judging/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:2976)'
                                .'|add\\-judging\\-run/([^/]++)/(\\d+)(?:\\.(json|xml|html))?(*:3039)'
                                .'|internal\\-error(?:\\.(json|xml|html))?(*:3085)'
                            .')'
                            .'|(?:\\.(json|xml|html))?(*:3117)'
                            .'|/next\\-judging/([^/\\.]++)(?:\\.(json|xml|html))?(*:3173)'
                        .')'
                        .'|testcases/(?'
                            .'|next\\-to\\-judge/([^/\\.]++)(?:\\.(json|xml|html))?(*:3244)'
                            .'|([^/]++)/file/([^/\\.]++)(?:\\.(json|xml|html))?(*:3299)'
                        .')'
                    .')'
                .')'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:3348)'
                            .'|problem/([^/]++)(*:3373)'
                        .')'
                        .'|jax/([^/]++)(*:3395)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:3424)'
                            .'|(\\d+)/edit(*:3443)'
                            .'|(\\d+)/delete(*:3464)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:3497)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:3532)'
                            .'|(\\d+)/claim(*:3552)'
                            .'|(\\d+)/set\\-answered(*:3580)'
                            .'|(\\d+)/change\\-subject(*:3610)'
                            .'|(\\d+)/change\\-queue(*:3638)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:3664)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:3704)'
                            .'|(\\d+)/edit(*:3723)'
                            .'|(\\d+)/delete(*:3744)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:3780)'
                            .'|(\\d+)/finalize(*:3803)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:3835)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:3862)'
                            .'|(\\d+)/edit(*:3881)'
                            .'|(\\d+)/delete(*:3902)'
                        .')'
                    .')'
                    .'|executables/([^/]++)(?'
                        .'|(*:3936)'
                        .'|/(?'
                            .'|content(*:3956)'
                            .'|d(?'
                                .'|ownload(?'
                                    .'|(*:3979)'
                                    .'|/([^/]++)(*:3997)'
                                .')'
                                .'|elete(*:4012)'
                            .')'
                            .'|edit(?'
                                .'|(*:4029)'
                                .'|\\-files(*:4045)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|scoreboard|results)\\.tsv(*:4123)'
                            .'|(results|results-icpc|clarifications)\\.html(*:4175)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:4209)'
                            .'|(\\d+)/(ignore|resolve)(*:4240)'
                        .')'
                    .')'
                    .'|judgehost(?'
                        .'|s/(?'
                            .'|([^/]++)(?'
                                .'|(*:4279)'
                                .'|/(?'
                                    .'|de(?'
                                        .'|lete(*:4301)'
                                        .'|activate(*:4318)'
                                    .')'
                                    .'|activate(*:4336)'
                                .')'
                            .')'
                            .'|activate\\-all(*:4360)'
                            .'|deactivate\\-all(*:4384)'
                        .')'
                        .'|\\-restrictions/(?'
                            .'|(\\d+)(*:4417)'
                            .'|(\\d+)/edit(*:4436)'
                            .'|(\\d+)/delete(*:4457)'
                        .')'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:4489)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:4519)'
                                .'|judge(*:4533)'
                            .')'
                            .'|edit(*:4547)'
                            .'|delete(*:4562)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:4597)'
                        .'|(\\d+)(*:4611)'
                        .'|(\\d+)/text(*:4630)'
                        .'|(\\d+)/testcases(*:4654)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:4699)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:4756)'
                        .'|(\\d+)/edit(*:4775)'
                        .'|(\\d+)/delete(*:4796)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:4825)'
                        .'|(\\d+)/(cancel|apply)(*:4854)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:4884)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:4920)'
                            .'|external\\-id/([^/]++)(*:4950)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:5007)'
                            .'|source(*:5022)'
                            .'|edit\\-source(*:5043)'
                        .')'
                        .'|(\\d+)/update\\-status(*:5073)'
                        .'|(\\d+)/verify(*:5094)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:5118)'
                        .'|(\\d+)/edit(*:5137)'
                        .'|(\\d+)/delete(*:5158)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:5182)'
                        .'|(\\d+)/edit(*:5201)'
                        .'|(\\d+)/delete(*:5222)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:5267)'
                    .'|team/(\\d+)(*:5286)'
                    .'|problems/(\\d+)/text(*:5314)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5356)'
                    .'|(\\d+)/samples\\.zip(*:5383)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:5425)'
                        .'|hange\\-contest/(-?\\d+)(*:5456)'
                    .')'
                    .'|problems/(\\d+)/text(*:5485)'
                    .'|(\\d+)/sample/(\\d+)/(input|output)(*:5527)'
                    .'|(\\d+)/samples\\.zip(*:5554)'
                    .'|team/(\\d+)(*:5573)'
                    .'|submission/(\\d+)(*:5598)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        60 => [[['_route' => 'app_api_awards_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        76 => [[['_route' => 'app_api_awards_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'app_api_clarification_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        121 => [[['_route' => 'app_api_clarification_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_api_contest_getcontestyaml', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        162 => [[['_route' => 'app_api_contest_getconteststate', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        172 => [[['_route' => 'app_api_contest_getstatus', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        190 => [[['_route' => 'app_api_scoreboard_getscoreboard', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        211 => [[['_route' => 'app_api_submission_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        231 => [[['_route' => 'app_api_submission_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'submission_files', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        268 => [[['_route' => 'app_api_submission_getsubmissionsourcecode', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        278 => [[['_route' => 'app_api_submission_addsubmission', '_format' => 'json', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction'], ['cid'], ['POST' => 0], null, false, false, null]],
        299 => [[['_route' => 'app_api_contest_geteventfeed', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        316 => [[['_route' => 'app_api_group_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_api_group_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\GroupController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_api_judgement_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_api_judgement_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_api_judgementtype_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        411 => [[['_route' => 'app_api_judgementtype_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_api_language_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        450 => [[['_route' => 'app_api_language_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_api_organization_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        492 => [[['_route' => 'app_api_organization_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        512 => [
            [['_route' => 'app_api_problem_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::listAction'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'app_api_problem_addproblem', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        529 => [[['_route' => 'app_api_problem_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'app_api_run_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        562 => [[['_route' => 'app_api_run_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\RunController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_api_team_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::listAction'], ['cid'], ['GET' => 0], null, false, false, null]],
        596 => [[['_route' => 'app_api_team_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TeamController::singleAction'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        606 => [
            [['_route' => 'app_api_contest_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::singleAction'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_contest_changestarttime', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        635 => [[['_route' => 'app_api_executable_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_api_judgehost_updatejudgehost', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_api_judgehost_getnextjudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction'], ['hostname'], ['POST' => 0], null, false, true, null]],
        733 => [[['_route' => 'app_api_judgehost_updatejudging', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction'], ['hostname', 'judgingId'], ['PUT' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_api_judgehost_addjudgingrun', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction'], ['hostname', 'judgingId'], ['POST' => 0], null, false, true, null]],
        796 => [[['_route' => 'app_api_judgehost_internalerror', '_format' => 'json', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction'], [], ['POST' => 0], null, false, false, null]],
        842 => [[['_route' => 'app_api_testcase_getnexttojudge', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction'], ['id'], ['GET' => 0], null, false, true, null]],
        872 => [[['_route' => 'app_api_testcase_getfile', '_format' => 'json', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        895 => [[['_route' => 'app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        932 => [[['_route' => 'general_get_version', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        996 => [[['_route' => 'scoreboard_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1037 => [[['_route' => 'scoreboard_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1086 => [[['_route' => 'clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1128 => [[['_route' => 'clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        1164 => [
            [['_route' => 'contest_add_contest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1213 => [
            [['_route' => 'contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'contest_change_start_time', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1270 => [[['_route' => 'contest_get_contest_yaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'contest_get_contest_state', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1342 => [[['_route' => 'contest_get_status', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1385 => [[['_route' => 'contest_get_event_feed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1441 => [[['_route' => 'executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1476 => [[['_route' => 'general_get_info', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1508 => [[['_route' => 'general_get_infoapi_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1549 => [[['_route' => 'general_get_status', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1587 => [[['_route' => 'general_get_user', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1632 => [[['_route' => 'user_add_group', '_controller' => 'App\\Controller\\API\\UserController::addGroupAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1668 => [[['_route' => 'user_add_teams', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1707 => [[['_route' => 'user_add_accounts', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        1739 => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\API\\UserController::listAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1781 => [[['_route' => 'user_single', '_controller' => 'App\\Controller\\API\\UserController::singleAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1826 => [[['_route' => 'general_get_database_configuration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1863 => [[['_route' => 'general_get_config_check', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        1922 => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        1964 => [[['_route' => 'group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2012 => [[['_route' => 'judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2054 => [[['_route' => 'judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2096 => [[['_route' => 'judgement_type_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2138 => [[['_route' => 'judgement_type_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2183 => [[['_route' => 'language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2225 => [[['_route' => 'language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2273 => [[['_route' => 'organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2315 => [[['_route' => 'organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2361 => [
            [['_route' => 'problems_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'problems_add_problem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null],
        ],
        2404 => [[['_route' => 'problems_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2443 => [[['_route' => 'run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2485 => [[['_route' => 'run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2530 => [[['_route' => 'scoreboard_get_scoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2574 => [[['_route' => 'submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2616 => [[['_route' => 'submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2647 => [[['_route' => 'submission_add_submission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', '_format'], ['POST' => 0], null, false, true, null]],
        2696 => [[['_route' => 'submission_get_submission_filessubmission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2739 => [[['_route' => 'submission_get_submission_source_code', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2781 => [[['_route' => 'team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid', '_format'], ['GET' => 0], null, false, true, null]],
        2823 => [[['_route' => 'team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        2870 => [[['_route' => 'judgehost_create_judgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        2915 => [[['_route' => 'judgehost_update_judge_host', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname', '_format'], ['PUT' => 0], null, false, true, null]],
        2976 => [[['_route' => 'judgehost_update_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['PUT' => 0], null, false, true, null]],
        3039 => [[['_route' => 'judgehost_add_judging_run', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgingId', '_format'], ['POST' => 0], null, false, true, null]],
        3085 => [[['_route' => 'judgehost_internal_error', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        3117 => [[['_route' => 'judgehost_get_judgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
        3173 => [[['_route' => 'judgehost_get_next_judging', '_controller' => 'App\\Controller\\API\\JudgehostController::getNextJudgingAction', '_format' => 'json'], ['hostname', '_format'], ['POST' => 0], null, false, true, null]],
        3244 => [[['_route' => 'testcase_get_next_to_judge', '_controller' => 'App\\Controller\\API\\TestcaseController::getNextToJudgeAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3299 => [[['_route' => 'testcase_get_file', '_controller' => 'App\\Controller\\API\\TestcaseController::getFileAction', '_format' => 'json'], ['id', 'type', '_format'], ['GET' => 0], null, false, true, null]],
        3348 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        3373 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        3395 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        3424 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        3443 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        3464 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        3497 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        3532 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        3552 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        3580 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        3610 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        3638 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        3664 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        3704 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        3723 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        3744 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        3780 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        3803 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        3835 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        3862 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        3881 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        3902 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        3936 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        3956 => [[['_route' => 'jury_executable_content', '_controller' => 'App\\Controller\\Jury\\ExecutableController::contentAction'], ['execId'], null, null, false, false, null]],
        3979 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        3997 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'index'], null, null, false, true, null]],
        4012 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        4029 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        4045 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        4123 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        4175 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        4209 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        4240 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        4279 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['hostname'], ['GET' => 0], null, false, true, null]],
        4301 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['hostname'], null, null, false, false, null]],
        4318 => [[['_route' => 'jury_judgehost_deactivate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAction'], ['hostname'], null, null, false, false, null]],
        4336 => [[['_route' => 'jury_judgehost_activate', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAction'], ['hostname'], null, null, false, false, null]],
        4360 => [[['_route' => 'jury_judgehost_activate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::activateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4384 => [[['_route' => 'jury_judgehost_deactivate_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deactivateAllAction'], [], ['POST' => 0], null, false, false, null]],
        4417 => [[['_route' => 'jury_judgehost_restriction', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::viewAction'], ['restrictionId'], null, null, false, true, null]],
        4436 => [[['_route' => 'jury_judgehost_restriction_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::editAction'], ['restrictionId'], null, null, false, false, null]],
        4457 => [[['_route' => 'jury_judgehost_restriction_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostRestrictionController::deleteAction'], ['restrictionId'], null, null, false, false, null]],
        4489 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        4519 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        4533 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        4547 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        4562 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        4597 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        4611 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        4630 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        4654 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        4699 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        4756 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        4775 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        4796 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        4825 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        4854 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        4884 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        4920 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        4950 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        5007 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        5022 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        5043 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        5073 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        5094 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        5118 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        5137 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        5158 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        5182 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        5201 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        5222 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        5267 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5286 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        5314 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5356 => [[['_route' => 'public_problem_sample_testcase', '_controller' => 'App\\Controller\\PublicController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5383 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5425 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        5456 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        5485 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        5527 => [[['_route' => 'team_problem_sample_testcase', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleTestcaseAction'], ['probId', 'index', 'type'], null, null, false, true, null]],
        5554 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        5573 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        5598 => [
            [['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
