<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CombatHistoricRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CombatHistoricCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CombatHistoricCrudController extends CrudController
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
        CRUD::setModel(\App\Models\CombatHistoric::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/combathistoric');
        CRUD::setEntityNameStrings('combathistoric', 'combat_historics');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('joueurBleu');
        CRUD::column('entraineurBleu');
        CRUD::column('jugeBleu');
        CRUD::column('controllerBleu');
        CRUD::column('scoreBlue');
        CRUD::column('scoreRed');
        CRUD::column('joueurRed');
        CRUD::column('entraineurRed');
        CRUD::column('controllerRed');
        CRUD::column('jugeRed');
        CRUD::column('arbitre_id');
        CRUD::column('date');
        CRUD::column('salle_id');

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
        CRUD::setValidation(CombatHistoricRequest::class);

        $this->crud->addField([
        'label' => "joueur_bleu_id",
        'name' => "joueur_bleu_id",
        'type' => 'select',
        'entity'    => 'joueurBleu', 
        'model'     => "App\Models\Joueur"
        ]);
        $this->crud->addField([
        'label' => "entraineur_bleu_id",
        'name' => "entraineur_bleu_id",
        'type' => 'select',
        'entity'    => 'entraineurBleu', 
        'model'     => "App\Models\Entraineur"
        ]);
        $this->crud->addField([
        'label' => "juge_bleu_id",
        'name' => "juge_bleu_id",
        'type' => 'select',
        'entity'    => 'jugeBleu', 
        'model'     => "App\Models\Juge"
        ]);
        $this->crud->addField([
        'label' => "controller_bleu_id",
        'name' => "controller_bleu_id",
        'type' => 'select',
        'entity'    => 'controllerBleu', 
        'model'     => "App\Models\Controller"
        ]);
        CRUD::field('scoreBlue');
        CRUD::field('scoreRed');
        $this->crud->addField([
        'label' => "joueur_red_id",
        'name' => "joueur_red_id",
        'type' => 'select',
        'entity'    => 'joueurRed', 
        'model'     => "App\Models\Joueur"
        ]);
        $this->crud->addField([
        'label' => "entraineur_red_id",
        'name' => "entraineur_red_id",
        'type' => 'select',
        'entity'    => 'entraineurRed', 
        'model'     => "App\Models\Entraineur"
        ]);
        $this->crud->addField([
        'label' => "controller_red_id",
        'name' => "controller_red_id",
        'type' => 'select',
        'entity'    => 'controllerRed', 
        'model'     => "App\Models\Controller"
        ]);
        $this->crud->addField([
        'label' => "juge_red_id",
        'name' => "juge_red_id",
        'type' => 'select',
        'entity'    => 'jugeRed', 
        'model'     => "App\Models\Juge"
        ]);
        CRUD::field('arbitre_id');
        CRUD::field('date');
        CRUD::field('salle_id');

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
