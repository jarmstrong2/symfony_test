<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\ReditectResponse;

use Psr\Log\LoggerInterface;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LuckyController extends Controller
{

	 /**
	* @Route("/lucky/")
	*/
	public function number_index(SessionInterface $session)
	{

		$session->set('foo', 'bar');

		$res = $session->get('foo');

		return new Response($res);

	}

	/**
	* @Route("/lucky/number/{max}")
	*/
	public function number($max, LoggerInterface $logger)
	{
		$number = mt_rand(0, $max);
		// $url = $this->generateUrl('app_lucky_number', array('max' => 10));

		$logger->info('We are logging!');


		return $this->render('lucky/number.html.twig', array('number' => $number, 'title' => $number));
	}
}