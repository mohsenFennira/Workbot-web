<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_ads_index' => [[], ['_controller' => 'App\\Controller\\AdsController::index'], [], [['text', '/ads/']], [], [], []],
    'app_ads_new' => [[], ['_controller' => 'App\\Controller\\AdsController::new'], [], [['text', '/ads/new']], [], [], []],
    'app_ads_show' => [['id'], ['_controller' => 'App\\Controller\\AdsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ads']], [], [], []],
    'app_ads_edit' => [['id'], ['_controller' => 'App\\Controller\\AdsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ads']], [], [], []],
    'app_ads_delete' => [['id'], ['_controller' => 'App\\Controller\\AdsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ads']], [], [], []],
    'app_badge_index' => [[], ['_controller' => 'App\\Controller\\BadgeController::index'], [], [['text', '/badge/']], [], [], []],
    'app_badge_new' => [[], ['_controller' => 'App\\Controller\\BadgeController::new'], [], [['text', '/badge/new']], [], [], []],
    'app_badge_show' => [['id'], ['_controller' => 'App\\Controller\\BadgeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/badge']], [], [], []],
    'app_badge_edit' => [['id'], ['_controller' => 'App\\Controller\\BadgeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/badge']], [], [], []],
    'app_badge_delete' => [['id'], ['_controller' => 'App\\Controller\\BadgeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/badge']], [], [], []],
    'app_candidature_index' => [[], ['_controller' => 'App\\Controller\\CandidatureController::index'], [], [['text', '/candidature/']], [], [], []],
    'app_candidature_new' => [[], ['_controller' => 'App\\Controller\\CandidatureController::new'], [], [['text', '/candidature/new']], [], [], []],
    'app_candidature_show' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/candidature']], [], [], []],
    'app_candidature_edit' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/candidature']], [], [], []],
    'app_candidature_delete' => [['id'], ['_controller' => 'App\\Controller\\CandidatureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/candidature']], [], [], []],
    'app_captcha_index' => [[], ['_controller' => 'App\\Controller\\CaptchaController::index'], [], [['text', '/captcha/']], [], [], []],
    'app_captcha_new' => [[], ['_controller' => 'App\\Controller\\CaptchaController::new'], [], [['text', '/captcha/new']], [], [], []],
    'app_captcha_show' => [['id'], ['_controller' => 'App\\Controller\\CaptchaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/captcha']], [], [], []],
    'app_captcha_edit' => [['id'], ['_controller' => 'App\\Controller\\CaptchaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/captcha']], [], [], []],
    'app_captcha_delete' => [['id'], ['_controller' => 'App\\Controller\\CaptchaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/captcha']], [], [], []],
    'app_categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], [], []],
    'app_categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], [], []],
    'app_categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_certif_badge_index' => [[], ['_controller' => 'App\\Controller\\CertifBadgeController::index'], [], [['text', '/certif/badge/']], [], [], []],
    'app_certif_badge_new' => [[], ['_controller' => 'App\\Controller\\CertifBadgeController::new'], [], [['text', '/certif/badge/new']], [], [], []],
    'app_certif_badge_show' => [['id'], ['_controller' => 'App\\Controller\\CertifBadgeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/certif/badge']], [], [], []],
    'app_certif_badge_edit' => [['id'], ['_controller' => 'App\\Controller\\CertifBadgeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/certif/badge']], [], [], []],
    'app_certif_badge_delete' => [['id'], ['_controller' => 'App\\Controller\\CertifBadgeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/certif/badge']], [], [], []],
    'app_certification_index' => [[], ['_controller' => 'App\\Controller\\CertificationController::index'], [], [['text', '/certification/']], [], [], []],
    'app_certification_new' => [[], ['_controller' => 'App\\Controller\\CertificationController::new'], [], [['text', '/certification/new']], [], [], []],
    'app_certification_show' => [['id'], ['_controller' => 'App\\Controller\\CertificationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/certification']], [], [], []],
    'app_certification_edit' => [['id'], ['_controller' => 'App\\Controller\\CertificationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/certification']], [], [], []],
    'app_certification_delete' => [['id'], ['_controller' => 'App\\Controller\\CertificationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/certification']], [], [], []],
    'app_contrat_index' => [[], ['_controller' => 'App\\Controller\\ContratController::index'], [], [['text', '/contrat/']], [], [], []],
    'app_contrat_new' => [[], ['_controller' => 'App\\Controller\\ContratController::new'], [], [['text', '/contrat/new']], [], [], []],
    'app_contrat_show' => [['id'], ['_controller' => 'App\\Controller\\ContratController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_contrat_edit' => [['id'], ['_controller' => 'App\\Controller\\ContratController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_contrat_delete' => [['id'], ['_controller' => 'App\\Controller\\ContratController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contrat']], [], [], []],
    'app_cours_index' => [[], ['_controller' => 'App\\Controller\\CoursController::index'], [], [['text', '/cours/']], [], [], []],
    'app_cours_new' => [[], ['_controller' => 'App\\Controller\\CoursController::new'], [], [['text', '/cours/new']], [], [], []],
    'app_cours_show' => [['id'], ['_controller' => 'App\\Controller\\CoursController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_cours_edit' => [['id'], ['_controller' => 'App\\Controller\\CoursController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_cours_delete' => [['id'], ['_controller' => 'App\\Controller\\CoursController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_entretien_index' => [[], ['_controller' => 'App\\Controller\\EntretienController::index'], [], [['text', '/entretien/']], [], [], []],
    'app_entretien_new' => [[], ['_controller' => 'App\\Controller\\EntretienController::new'], [], [['text', '/entretien/new']], [], [], []],
    'app_entretien_show' => [['id'], ['_controller' => 'App\\Controller\\EntretienController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/entretien']], [], [], []],
    'app_entretien_edit' => [['id'], ['_controller' => 'App\\Controller\\EntretienController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/entretien']], [], [], []],
    'app_entretien_delete' => [['id'], ['_controller' => 'App\\Controller\\EntretienController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/entretien']], [], [], []],
    'app_evennement_index' => [[], ['_controller' => 'App\\Controller\\EvennementController::index'], [], [['text', '/evennement/']], [], [], []],
    'app_evennement_new' => [[], ['_controller' => 'App\\Controller\\EvennementController::new'], [], [['text', '/evennement/new']], [], [], []],
    'app_evennement_show' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_evennement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_evennement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_offre_index' => [[], ['_controller' => 'App\\Controller\\OffreController::index'], [], [['text', '/offre/']], [], [], []],
    'app_offre_new' => [[], ['_controller' => 'App\\Controller\\OffreController::new'], [], [['text', '/offre/new']], [], [], []],
    'app_offre_show' => [['id'], ['_controller' => 'App\\Controller\\OffreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_offre_edit' => [['id'], ['_controller' => 'App\\Controller\\OffreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_offre_delete' => [['id'], ['_controller' => 'App\\Controller\\OffreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/offre']], [], [], []],
    'app_participation_index' => [[], ['_controller' => 'App\\Controller\\ParticipationController::index'], [], [['text', '/participation/']], [], [], []],
    'app_participation_new' => [[], ['_controller' => 'App\\Controller\\ParticipationController::new'], [], [['text', '/participation/new']], [], [], []],
    'app_participation_show' => [['id'], ['_controller' => 'App\\Controller\\ParticipationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation']], [], [], []],
    'app_participation_edit' => [['id'], ['_controller' => 'App\\Controller\\ParticipationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/participation']], [], [], []],
    'app_participation_delete' => [['id'], ['_controller' => 'App\\Controller\\ParticipationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation']], [], [], []],
    'app_question_reponse_index' => [[], ['_controller' => 'App\\Controller\\QuestionReponseController::index'], [], [['text', '/question/reponse/']], [], [], []],
    'app_question_reponse_new' => [[], ['_controller' => 'App\\Controller\\QuestionReponseController::new'], [], [['text', '/question/reponse/new']], [], [], []],
    'app_question_reponse_show' => [['id'], ['_controller' => 'App\\Controller\\QuestionReponseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question/reponse']], [], [], []],
    'app_question_reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\QuestionReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/question/reponse']], [], [], []],
    'app_question_reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\QuestionReponseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/question/reponse']], [], [], []],
    'app_quiz_index' => [[], ['_controller' => 'App\\Controller\\QuizController::index'], [], [['text', '/quiz/']], [], [], []],
    'app_quiz_new' => [[], ['_controller' => 'App\\Controller\\QuizController::new'], [], [['text', '/quiz/new']], [], [], []],
    'app_quiz_show' => [['id'], ['_controller' => 'App\\Controller\\QuizController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/quiz']], [], [], []],
    'app_quiz_edit' => [['id'], ['_controller' => 'App\\Controller\\QuizController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/quiz']], [], [], []],
    'app_quiz_delete' => [['id'], ['_controller' => 'App\\Controller\\QuizController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/quiz']], [], [], []],
    'app_reclamation_avis_index' => [[], ['_controller' => 'App\\Controller\\ReclamationAvisController::index'], [], [['text', '/reclamation/avis/']], [], [], []],
    'app_reclamation_avis_new' => [[], ['_controller' => 'App\\Controller\\ReclamationAvisController::new'], [], [['text', '/reclamation/avis/new']], [], [], []],
    'app_reclamation_avis_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationAvisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/avis']], [], [], []],
    'app_reclamation_avis_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationAvisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/avis']], [], [], []],
    'app_reclamation_avis_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationAvisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/avis']], [], [], []],
    'app_sponsor_index' => [[], ['_controller' => 'App\\Controller\\SponsorController::index'], [], [['text', '/sponsor/']], [], [], []],
    'app_sponsor_new' => [[], ['_controller' => 'App\\Controller\\SponsorController::new'], [], [['text', '/sponsor/new']], [], [], []],
    'app_sponsor_show' => [['id'], ['_controller' => 'App\\Controller\\SponsorController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sponsor']], [], [], []],
    'app_sponsor_edit' => [['id'], ['_controller' => 'App\\Controller\\SponsorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sponsor']], [], [], []],
    'app_sponsor_delete' => [['id'], ['_controller' => 'App\\Controller\\SponsorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sponsor']], [], [], []],
    'app_test_index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test/']], [], [], []],
    'app_test_new' => [[], ['_controller' => 'App\\Controller\\TestController::new'], [], [['text', '/test/new']], [], [], []],
    'app_test_show' => [['id'], ['_controller' => 'App\\Controller\\TestController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], [], []],
    'app_test_edit' => [['id'], ['_controller' => 'App\\Controller\\TestController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], [], []],
    'app_test_delete' => [['id'], ['_controller' => 'App\\Controller\\TestController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/test']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateur_indexxx' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::indexx'], [], [['text', '/utilisateur/mouh']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];