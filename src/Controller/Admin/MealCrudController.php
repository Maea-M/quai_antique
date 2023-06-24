<?php

namespace App\Controller\Admin;

use App\Entity\Meal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MealCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Meal::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('Category', 'Catégorie'),
            TextField::new('Title', 'Titre'),
            TextEditorField::new('description'),
            NumberField::new('Price', "Prix")
        ];
    }
    
}
