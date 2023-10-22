<?php

namespace App\Controller\Admin;

use App\Entity\Temoignage;
use App\Enum\CategorySlug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class TemoignageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Temoignage::class;
    }

    public function configureFields(string $temoignage): iterable
    {
        return [
            TextField::new('nom'),
            ChoiceField::new('categorie')->setChoices(CategorySlug::cases()),
            TextField::new('description'),
            TextField::new('temoignageFile', 'Upload')
                ->setFormType(VichFileType::class)
                ->onlyOnForms(),
        ];
    }
}
