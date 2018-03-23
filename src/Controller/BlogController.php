<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends Controller
{

	private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

	/**
	* @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
	*/
	public function list($page = 1) 
	{
		return $this->render('blog/list.html.twig', array('message' => "hi",));
	}

	/**
	* @Route("/blog/{slug}", name="blog_show")
	*/
	public function show($slug)
	{
		$url = $this->router->generate(
			'blog_show',
			array('page' => 2, 'slug' => 'my-blog-post', 'category' => "Symfony"),
			UrlGeneratorInterface::ABSOLUTE_URL
		);


		print("<a href=".$url.">".$url."</a>");
		return $this->render('blog/blog.html.twig', array('slug' => $slug,));
	}
}