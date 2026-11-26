<?php

namespace App\Laravel\Transformers;

use App\Laravel\Models\CMS;
use League\Fractal\TransformerAbstract;

use App\Laravel\Traits\ResponseGenerator;

class CMSTransformer extends TransformerAbstract
{
    use ResponseGenerator;

    public function transform(CMS $cms)
    {
        return [
            'id' => $cms->id ?: 0,
            'section' => $cms->section ?: "",
            'content' => $cms->content ?: "",
            'page' => $cms->page ?: "",
            'date_created' => $this->date_response($cms->created_at),
            'date_modified' => $this->date_response($cms->updated_at),
        ];
    }
}
