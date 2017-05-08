<?php
	namespace OC\PlatformBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;
	
	class AdvertController extends Controller {

		//action de page d'acceuil
		public function  indexAction($page){

			$content = $this->get('templating')->render("OCPlatformBundle:Advert:index.html.twig",
						array(
								'page'=>$page
						));
			return new Response($content);

		}
		
		//action de page d'affichage view
		public function viewAction($id){
			$url=$this->generateUrl("oc_platform_home");
			$content = $this->get('templating')->render("OCPlatformBundle:Advert:view.html.twig",
					array(
							'identifiant'=>$id,
							'accueil'=>$url
					));
			return new Response($content);
		}
		
		//action de la page d'ajout add
		public function addAction(){
			$content = $this->get('templating')->render("OCPlatformBundle:Advert:add.html.twig");
			return new Response($content);
		}
		
		//fonction editio d'un Advert
		public function editAction($id){
			return new Response("edition de l'Advert n° ".$id);
		}
		
		//fonction de suppression d'un Advert
		public function deleteAction($id){
			return new Response("Suppression de l'Advert n° ".$id);
		}
		
	}
?>