<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Person extends JsonResource
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
            'Id'=>$this->Id,
            'Name'=> $this->Name,
            'Surname'=> $this->Surname,
            'Phone'=> $this->Phone,
            'Mail'=> $this->Mail,
            'BuildingNo'=>$this->BuildingNo,
            'Floor'=>$this->Floor,
            'DoorNo'=>$this->DoorNo,
            'RoomNo'=>$this->RoomNo,
            'Gender'=>$this->Gender,
            'ApplicationId'=>$this->ApplicationId,
            'Photo'=> base64_encode($this->Photo)

        ];

    }
}
