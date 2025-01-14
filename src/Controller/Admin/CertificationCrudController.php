<?php

namespace App\Controller\Admin;

use App\Entity\Certification;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CertificationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Certification::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield 'issuer';
        yield 'certification';

        yield AssociationField::new('profile')
            ->setFormTypeOption('choice_label', 'title')
            ->setFormTypeOption('by_reference', 'id');
    }
}
