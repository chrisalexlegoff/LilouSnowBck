<?php

namespace App\Controller\Admin;

use App\Entity\AvantApres;
use App\Enum\CategorySlug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AvantApresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AvantApres::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            ChoiceField::new('categorie')->setChoices(CategorySlug::cases()),
            TextField::new('avantFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('avantName', 'photo')
                ->setBasePath('/images')
                ->hideOnForm(),
            TextField::new('avantText'),
            TextField::new('apresFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('apresName', 'photo')
                ->setBasePath('/images')
                ->hideOnForm(),
            TextField::new('apresText'),
        ];
    }
}
