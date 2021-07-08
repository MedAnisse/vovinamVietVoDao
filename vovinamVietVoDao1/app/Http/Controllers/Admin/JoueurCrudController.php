<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JoueurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JoueurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JoueurCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Joueur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/joueur');
        CRUD::setEntityNameStrings('joueur', 'joueurs');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        //CRUD::column('technique');
        CRUD::column('name')->label('Nom');
        CRUD::column('lastName')->label('Prénom');
        CRUD::column('phone')->label('Téléphone');
        CRUD::column('birthdate')->label('Date_De_Naissance');
        CRUD::column('poid')->label('Poid');
        CRUD::column('club_id')->label('Club');
        $this->crud->addColumn([
    'name'  => 'technique', 
    'label' => 'technique', 
    'type'  => 'table'
]);
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
        CRUD::setValidation(JoueurRequest::class);
        CRUD::field('name')->label('Nom');
        CRUD::field('lastName')->label('Prénom');
        CRUD::field('phone')->label('Téléphone');
        CRUD::field('birthdate')->label('Date_De_Naissance');
        CRUD::field('poid')->label('Poid');
        CRUD::field('club_id')->label('Club');
       //CRUD::field('technique');
        $this->crud->addField([   
    'name'            => 'technique',
    'label'           => 'technique',
    'type'            => 'table',
    'entity_singular' => 'option'
                            ]);

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




