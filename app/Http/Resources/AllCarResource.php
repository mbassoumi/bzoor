<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllCarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'model' => $this->car_model_parent_id,
            'sub_model' => $this->car_model_id,
            'model_year' => $this->model_year,
            'gear_type' => $this->gear_type,
            'fuel' => $this->fuel,
            'engine_size' => $this->engine_size,
            'engine_power' => $this->engine_power,
            'distance' => $this->distance,
            'price' => $this->price,
            'passenger_number' => $this->passenger_number,
            'previous_holders_number' => $this->previous_holders_number,
            'color' => $this->color,
            'sold_at' => $this->sold_at,

        ];
    }
}
