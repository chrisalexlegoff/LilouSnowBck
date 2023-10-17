<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class PresentationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Presentation::class;
    }

    public function configureFields(string $presentation): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            TextField::new('presentationFile', 'Upload')
                ->setFormType(VichFileType::class)
                ->onlyOnForms(),
        ];
    }
}
