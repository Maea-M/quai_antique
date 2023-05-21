<?php

namespace App\Controller\Admin;

use App\Entity\OpenHour;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OpenHourCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OpenHour::class;
    }

    
    //public function configureFields(string $pageName): iterable
    //{
      //  return [
            //IdField::new('id'),
            //TextField::new('days'),
            //TextEditorField::new('description'),
        //];
    //}
    
}
