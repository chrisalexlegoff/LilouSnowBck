<?php

namespace App\Controller\Admin;

use App\Entity\Collaborateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CollaborateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Collaborateur::class;
    }

    public function configureFields(string $collaborateur): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('fonction'),
            TextField::new('lieu'),
            TextField::new('email'),
            TextField::new('description'),
            TextField::new('descriptionDeux'),
            TextField::new('descriptionTrois'),
            TextField::new('photoFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('photoName', 'photo')
                ->setBasePath('/images')
                ->hideOnForm(),
            BooleanField::new('enable')
        ];
    }
}
