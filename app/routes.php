<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->get('/', "Core\Controllers\CoreController::index")->bind('home_page');
$app->post('/post', "app\controllers\AppController::index");
$app->match('/all', "app\controllers\AppController::index");

// for tests
$app->match('/test', function () use ($app){
    $array = [
        new \Blog\Entity\Article(),
        new \Blog\Entity\Category(),
        new \Blog\Entity\Comment(),
        new \Core\Entity\Image(),
        new \Core\Entity\NewsletterSubscriber(),
        new \Core\Entity\SupportMessage(),
        new \User\Entity\Notification(),
        $user = new User\Entity\User()
    ];

    $encoder = $app['security.encoder_factory']->getEncoder($user);
    $encoder = $app['security.encoder.bcrypt'];

    $user->setName('lusavuvu')
        ->setRoles(['ROLE_ADMIN'])
        ->setUsername('enigma')
        ->setPassword($app['security.encoder.bcrypt']->encodePassword('foo', true))
        //->setPassword('$2y$10$3i9/lVd8UOFIJ6PAMFt8gu3/r5g0qeCJvoSlLCsvMTythye19F77a')
        ->setMail('lusavuvu@gmail.com');

    return new Response(var_dump($user));
    return new Response(var_dump($array));
})->bind('test_page');

// Login Page
$app->get('/login', function (Request $request) use ($app) {
    if ($app['security.authorization_checker']->isGranted('IS_AUTHENTICATED_FULLY')) {
        return $app->redirect($app['url_generator']->generate('home_page'));
    }

    return $app['twig']->render('login.html.twig', array(
        'error'			=> $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username')
    ));
})->bind('login');

$app->error(function() use ($app) {
	if($app['debug']) {
		return;
	}

	return new Response('Error !!!');
});