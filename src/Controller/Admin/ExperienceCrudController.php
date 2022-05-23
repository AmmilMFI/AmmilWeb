<?php

namespace App\Controller\Admin;

use App\Entity\Experience;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ExperienceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Experience::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield 'experience';
        yield 'fromDate';
        yield 'toDate';

        yield AssociationField::new('profile')
            ->setFormTypeOption('choice_label', 'title')
            ->setFormTypeOption('by_reference', 'id');
    }
}
