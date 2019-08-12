<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
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
//            'popup_url' => route('majd-dummy-show', ['id' => $this->id]),
            'name' => $this->name,
            'guard_name' => $this->email,
            'created_at' => [
                'display' => Carbon::parse($this->created_at)->format('d M Y'),
                'timestamp' => $this->created_at
            ],
            'updated_at' => [
                'display' => Carbon::parse($this->updatet_at)->format('d M Y'),
                'timestamp' => $this->updatet_at
            ],
        ];
    }
}
