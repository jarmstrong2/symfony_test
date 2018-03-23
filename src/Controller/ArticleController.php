<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
	/**
	*	@Route(
	*			"/articles/{_locale}/{year}/{slug}.{_format}",
	*			defaults={"_format":"html"},
	*			requirements={
	*				"_locale": "en|fr",
	*				"_format": "html|rss",
	*				"year": "\d+"
	*		}
	*	)
	*/
	public function show($_locale, $year, $slug)
	{
		return $this->render('blog/list.html.twig', array('message' => "hi",));
	}

}