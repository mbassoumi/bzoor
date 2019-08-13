<?php


namespace App\Http\DataTables;


use App\Http\Resources\RoleResource;
use App\Role;
use Bassoumi\BassoumiDataTable\Classes\BassoumiDataTable;
use Illuminate\Database\Eloquent\Builder;

class RoleDataTable extends BassoumiDataTable
{

    protected $ajaxUrl = '';

    protected $dataTableName = 'Roles';

    protected $popup = true;

    protected $resourceClass = RoleResource::class;


    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            [
                'title' => 'ID',
                'style' => [
                    'min-width' => '`100px',
                ],

            ],
            [
                'title' => 'Name',
            ],
            [
                'title' => 'Created At',
            ],
            [
                'title' => 'Updated At',
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
                'data' => 'name',
                'name' => 'name'
            ],
            [
                'data' => [
                    '_' => "created_at.display",
                    'sort' => "created_at.timestamp"
                ],
                'name' => 'created_at'
            ],
            [
                'data' => [
                    '_' => "updated_at.display",
                    'sort' => "updated_at.timestamp"
                ],
                'name' => 'updated_at'
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
                'placeholder' => 'Search Name',
                'name' => 'name',
                'type' => 'text',
                'value' => null,
                'operator' => 'like',
                'function' => function (Builder $query, $name, $value) {
                    return $query->where($name,'like', '%'.$value.'%');
                }
            ],
            [
                'placeholder' => 'Search Created At',
                'name' => 'created_at',
                'type' => 'daterange',
                'value' => null,
                'operator' => 'between',
            ],
            [
                'placeholder' => 'Search Updated At',
                'name' => 'updated_at',
                'type' => 'daterange',
                'operator' => 'between',
                'value' => null,
            ],

        ];
    }

    public function query(): Builder
    {
        return Role::query();
    }
}
