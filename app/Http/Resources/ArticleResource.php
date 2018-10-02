<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'title' => $this->title,
<<<<<<< HEAD
            'category' => $this->category->category
=======
            'category' => $this->category,
            'created_at' => $this->created_at
>>>>>>> 1ce7303e201cc24ef146a89fc9ace8b057f7f6eb
        ];
    }
}
