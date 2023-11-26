<?php

namespace App\Controller\Admin;

use App\Entity\Tarif;
use App\Enum\CategorySlug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

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
            TextField::new('titre'),
            TextField::new('tarifs'),
            TextField::new('horaires'),
            ArrayField::new('contenuSeance')->setHelp('Minimum 1 - texte court [ex: Matériel stérile]')->onlyOnForms(),
            TextField::new('description'),
            BooleanField::new('isActive')
        ];
    }
}
