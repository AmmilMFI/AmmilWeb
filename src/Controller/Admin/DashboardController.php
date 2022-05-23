<?php

namespace App\Controller\Admin;

use App\Entity\Certification;
use App\Entity\Education;
use App\Entity\Experience;
use App\Entity\Profile;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('Ammil Dashboard')

            // the path defined in this method is passed to the Twig asset() function
            ->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            ->setTranslationDomain('my-custom-domain')

            // there's no need to define the "text direction" explicitly because
            // its default value is inferred dynamically from the user locale
            ->setTextDirection('ltr')

            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
            ->renderContentMaximized()


            // by default, all backend URLs are generated as absolute URLs. If you
            // need to generate relative URLs instead, call this method
            ->generateRelativeUrls()
            ;
    }


    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Users'),
            MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
            MenuItem::section('Profile'),
            MenuItem::linkToCrud('Profiles', 'fa fa-tags', Profile::class),
            MenuItem::section('Profile Items'),
            MenuItem::linkToCrud('Education', 'fa fa-file-text', Education::class),
            MenuItem::linkToCrud('Certifications', 'fa fa-comment', Certification::class),
            MenuItem::linkToCrud('Experience', 'fa fa-comment', Experience::class),
        ];
    }
}
