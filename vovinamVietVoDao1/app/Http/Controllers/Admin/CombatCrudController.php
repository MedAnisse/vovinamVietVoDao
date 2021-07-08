<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CombatRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CombatCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CombatCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Combat::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/combat');
        CRUD::setEntityNameStrings('combat', 'combats');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('joueurBleu')->label('Joueur Bleu');
        CRUD::column('joueurRed')->label('Joueur Rouge');
        CRUD::column('scoreBlue')->label('Score Bleu');
        CRUD::column('scoreRed')->label('Score Rouge');
        CRUD::column('controllerBleu')->label('Manette Bleu');
        CRUD::column('controllerRed')->label('Manette Rouge');
        CRUD::column('arbitre_id');
        CRUD::column('jugeBleu')->label('Juge Bleu');
        CRUD::column('jugeRed')->label('Juge Rouge');
        CRUD::column('entraineurRed')->label('Entraineur Rouge');
        CRUD::column('entraineurBleu')->label('Entraineur Bleu');
        
        CRUD::column('date')->label('Date');
        CRUD::column('salle_id')->label('Salle');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CombatRequest::class);

        $this->crud->addField([
        'label' => "Joueur Bleu",
        'name' => "joueur_bleu_id",
        'type' => 'select',
        'entity'    => 'joueurBleu', 
        'model'     => "App\Models\Joueur"
        ]);
        $this->crud->addField([
        'label' => "Entraineur Bleu",
        'name' => "entraineur_bleu_id",
        'type' => 'select',
        'entity'    => 'entraineurBleu', 
        'model'     => "App\Models\Entraineur"
        ]);
        $this->crud->addField([
        'label' => "Juge Bleu",
        'name' => "juge_bleu_id",
        'type' => 'select',
        'entity'    => 'jugeBleu', 
        'model'     => "App\Models\Juge"
        ]);
        $this->crud->addField([
        'label' => "Manette Bleu",
        'name' => "controller_bleu_id",
        'type' => 'select',
        'entity'    => 'controllerBleu', 
        'model'     => "App\Models\Controller"
        ]);
        CRUD::field('scoreBlue')->label('Score Bleu');
        CRUD::field('scoreRed')->label('Score Rouge');
        $this->crud->addField([
        'label' => "Joueur Rouge",
        'name' => "joueur_red_id",
        'type' => 'select',
        'entity'    => 'joueurRed', 
        'model'     => "App\Models\Joueur"
        ]);
        $this->crud->addField([
        'label' => "Entraineur Rouge",
        'name' => "entraineur_red_id",
        'type' => 'select',
        'entity'    => 'entraineurRed', 
        'model'     => "App\Models\Entraineur"
        ]);
        $this->crud->addField([
        'label' => "Manette Rouge",
        'name' => "controller_red_id",
        'type' => 'select',
        'entity'    => 'controllerRed', 
        'model'     => "App\Models\Controller"
        ]);
        $this->crud->addField([
        'label' => "Juge Rouge",
        'name' => "juge_red_id",
        'type' => 'select',
        'entity'    => 'jugeRed', 
        'model'     => "App\Models\Juge"
        ]);
        CRUD::field('arbitre_id');
        CRUD::field('date')->label('Date');
        CRUD::field('salle_id')->label('Salle');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
