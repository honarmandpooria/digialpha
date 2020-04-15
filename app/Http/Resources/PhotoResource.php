<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
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
            "albumId" => $this->album->id,
            "id" => $this->id,
            "title" => $this->title,
            "url" => $this->url,
            "thumbnailUrl" => $this->thumbnailUrl
        ];
    }
}
