<?php

namespace App\Controller\Admin;

use App\Entity\Realisation;
use App\Enum\CategorySlug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RealisationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Realisation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ChoiceField::new('categorie')->setChoices(CategorySlug::cases()),
            TextField::new('titre'),
            TextField::new('sousTitre'),
            TextField::new('titreIntroduction'),
            ArrayField::new('introduction')->onlyOnForms(),
            TextField::new('titreTemoignages'),
            TextField::new('accrocheTemoignages'),
            TextField::new('imageFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('imageName', 'photo')
                ->setBasePath('/images')
                ->hideOnForm(),
        ];
    }
}
