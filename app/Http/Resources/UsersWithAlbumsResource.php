<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersWithAlbumsResource extends JsonResource
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
            "name" => $this->name,
            "username" => $this->username,

            /*ALBUMS WITH PHOTOS belong to this user*/
            "albums" => AlbumWithPhotosResource::collection($this->albums),
        ];
    }
}
