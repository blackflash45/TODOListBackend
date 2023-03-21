<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class todoget extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
      
        return [
            'id' => $this->id,
            'Addtodo' => $this->Addtodo,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime
            
        ];
    }
}
