<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "userId" => $this->user->id,
            "id" => $this->id,
            "title" => $this->title,
            "body" => $this->body,
        ];
    }
}
