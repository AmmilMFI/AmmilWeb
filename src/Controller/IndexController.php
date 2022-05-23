<?php

namespace App\Controller;

use App\Repository\ProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     * @Route("/services", name="app_services")
     * @Route("/profile/{profile}", name="app_profile")
     * @Route("/aboutus", name="app_aboutus")
     * @Route("/resourcecentre", name="app_resource_centre")
     * @Route("/contactus", name="app_contact_us")
     * @Route("/services/agbajowo", name="app_agbajowo")
     * @Route("/services/agriculturallending", name="app_al")
     * @Route("/services/assetfinancing", name="app_af")
     * @Route("/services/basiri", name="app_basiri")
     * @Route("/services/kajolaloanscheme", name="app_kls")
     * @Route("/services/dca", name="app_dca")
     * @Route("/services/lpo(localpurchaseorder)financing", name="lpo")
     * @Route("/services/overdrafts", name="app_overdrafts")
     * @Route("/services/projectfinancing", name="app_pf")
     * @Route("/services/stockfinance", name="app_sf")
     * @Route("/services/termloans", name="app_tl")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/getProfiles", name="app_profile")
     */
    public function getProfile(ProfileRepository $profileRepository, SerializerInterface $serializer): Response
    {

        return new Response('{"profiles":'.$serializer->serialize(
            $profileRepository->findAll(), 'json',
            ['groups'=> ['profile']])."}",
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }


    /**
     * @Route("/getLogo", name="app_logo")
     */
    public function getLogo(): BinaryFileResponse
    {
        $publicResourcesFolderPath = $this->getParameter('kernel.project_dir') . '\public\images';

        return $this->file($publicResourcesFolderPath.'\logo.jpg');
    }


    private function getRandomWord($len = 10) {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }
    private function logP($string){
        $log = fopen("print.print","a");
        fwrite($log,$string."\n");
        fclose($log);
    }
}
