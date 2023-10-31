<?php

namespace App\Controller\Admin;

use App\Entity\Tarif;
use App\Enum\CategorySlug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class TarifCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tarif::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ChoiceField::new('categorie')->setChoices(CategorySlug::cases()),
            TextField::new('alternateName'),
            ArrayField::new('description')->setHelp('Minimum 1 - Maximum 5')->onlyOnForms(),
            TextField::new('imageFile', 'Upload')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            ImageField::new('imageName', 'photo')
                ->setBasePath('/images')
                ->hideOnForm(),
            IntegerField::new('tarifBase'),
            IntegerField::new('tarifSup'),
            IntegerField::new('horaireDebut'),
            IntegerField::new('horaireFin'),
            ArrayField::new('contenuSeance')->setHelp('Minimum 1 - texte court [ex: Matériel stérile]')->onlyOnForms(),
            BooleanField::new('isActive')
        ];
    }
}
