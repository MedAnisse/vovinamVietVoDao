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
        CRUD::column('date');
        CRUD::column('round');
        CRUD::column('scoreRed');
        CRUD::column('scoreBlue');
        CRUD::column('entraineurRed');
        CRUD::column('entraineurBlue');
        CRUD::column('salle_id');
        CRUD::column('joueurBlue');
        CRUD::column('joueurRed');
        CRUD::column('arbitre_id');

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

        CRUD::field('date');
        CRUD::field('round');
        CRUD::field('scoreRed');
        CRUD::field('scoreBlue');
        CRUD::field('entraineurRed');
        CRUD::field('entraineurBlue');
        CRUD::field('salle_id');
        CRUD::field('joueurBlue');
        CRUD::field('joueurRed');
        CRUD::field('arbitre_id');

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
