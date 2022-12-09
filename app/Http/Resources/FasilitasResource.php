<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FasilitasResource extends JsonResource
{
    // buat property
    public $status;
    public $message;

    public function __construct($status, $message, $resource){
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'success' => $this->message,
            'status' => $this->status,
            'data' => $this->resource
        ];
    }
}