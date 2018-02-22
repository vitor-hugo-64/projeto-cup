<?php

	require_once("vendor/autoload.php");

	use \Slim\Slim;

	$app = new Slim();

	$app->get( '/', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'index', 'footer'] );
	});

	$app->get( '/membros', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'membros', 'footer'] );
	});

	$app->get( '/projetos', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'projetos', 'footer'] );
	});

	$app->get( '/download', function ()
	{	
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'download', 'footer'] );
	});

	$app->get( '/documentacao', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'documentacao', 'footer'] );
	});

	$app->get( '/premium', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'premium', 'footer'] );
	});

	$app->get( '/suporte', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'suporte', 'footer'] );
	});

	$app->get( '/termos', function ()
	{
		$tpl = new RainTPL();
		$tpl->drawPage( [ 'header', 'primary-menu', 'secondary-menu', 'termos', 'footer'] );
	});

	$app->run();