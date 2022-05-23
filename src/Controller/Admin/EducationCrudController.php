<?php

namespace App\Controller\Admin;

use App\Entity\Education;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class EducationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Education::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield 'degree';
        yield 'dateObtained';

        yield AssociationField::new('profile')
            ->setFormTypeOption('choice_label', 'title')
            ->setFormTypeOption('by_reference', 'id');
    }
}
