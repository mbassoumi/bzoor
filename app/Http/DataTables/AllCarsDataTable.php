<?php


namespace App\Http\DataTables;


use App\Http\Resources\AllCarResource;
use App\Models\Car;
use Bassoumi\BassoumiDataTable\Classes\BassoumiDataTable;
use Illuminate\Database\Eloquent\Builder;

class AllCarsDataTable extends BassoumiDataTable
{

    protected $ajaxUrl = '';

    protected $dataTableName = 'All Cars';

    protected $popup = true;

    protected $resourceClass = AllCarResource::class;


    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            [
                'title' => 'ID',
                'style' => [
                    'min-width' => '100px',
                ],

            ],
            [
                'title' => 'Model',
            ],
            [
                'title' => 'Sub Model',
            ],
            [
                'title' => 'Year',
            ],
            [
                'title' => 'Gear Type',
            ],
            [
                'title' => 'Fuel',
            ],
            [
                'title' => 'Engine Size',
            ],
            [
                'title' => 'Engine Power',
            ],
            [
                'title' => 'Distance',
            ],
            [
                'title' => 'Price',
            ],
            [
                'title' => '#Passenger',
            ],
            [
                'title' => '#Previous Holders',
            ],
            [
                'title' => 'Color',
            ],

        ];
    }

    public function columns(): array
    {
        // TODO: Implement columns() method.
        return [
            [
                'data' => 'id',
                'name' => 'id'
            ],
            [
                'data' => 'model',
                'name' => 'car_model_parent_id'
            ],
            [
                'data' => 'sub_model',
                'name' => 'car_model_id'
            ],
            [
                'data' => 'model_year',
                'name' => 'model_year'
            ],
            [
                'data' => 'gear_type',
                'name' => 'gear_type'
            ],
            [
                'data' => 'fuel',
                'name' => 'fuel'
            ],
            [
                'data' => 'engine_size',
                'name' => 'engine_size'
            ],
            [
                'data' => 'engine_power',
                'name' => 'engine_power'
            ],
            [
                'data' => 'distance',
                'name' => 'distance'
            ],
            [
                'data' => 'price',
                'name' => 'price'
            ],
            [
                'data' => 'passenger_number',
                'name' => 'passenger_number'
            ],
            [
                'data' => 'previous_holders_number',
                'name' => 'previous_holders_number'
            ],
            [
                'data' => 'color',
                'name' => 'color'
            ]
        ];
    }

    public function filters()
    {
        return [
            [
                'placeholder' => 'Search ID',
                'name' => 'id',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search Model',
                'name' => 'car_model_parent_id',
                'type' => 'select',
                'selected' => null,
                'operator' => '=',
                'options' => [
                    1 => 'Parent Car'
                ],
            ],
            [
                'placeholder' => 'Search Sub Model',
                'name' => 'car_model_id',
                'type' => 'select',
                'selected' => null,
                'operator' => '=',
                'options' => [
                    2 => 'Sub Car 1',
                    3 => 'Sub Car 2',
                    4 => 'Sub Car 3',
                ],
            ],

            [
                'placeholder' => 'Search Model Year',
                'name' => 'model_year',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],

            [
                'placeholder' => 'Search Gear Type',
                'name' => 'gear_type',
                'type' => 'select',
                'selected' => null,
                'operator' => '=',
                'options' => [
                    'automatic' => 'Automatic',
                    'gear' => 'Gear',
                ],
            ],
            [
                'placeholder' => 'Search Fuel',
                'name' => 'fuel',
                'type' => 'select',
                'selected' => null,
                'operator' => '=',
                'options' => [
                    'solar' => 'Solar',
                    'benzene' => 'Benzene',
                ],
            ],
            [
                'placeholder' => 'Search Engine Size',
                'name' => 'engine_size',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search Engine Power',
                'name' => 'engine_power',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search Distance',
                'name' => 'distance',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search Price',
                'name' => 'price',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search #Passenger',
                'name' => 'passenger_number',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search #Previous Holders',
                'name' => 'previous_holders_number',
                'type' => 'number',
                'value' => null,
                'operator' => '=',
            ],
            [
                'placeholder' => 'Search Color',
                'name' => 'color',
                'type' => 'text',
                'value' => null,
                'operator' => 'like',
            ]

        ];
    }

    public function query(): Builder
    {
        return Car::query();
    }
}
