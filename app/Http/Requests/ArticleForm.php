<?php

namespace App\Http\Requests;

use Response;
use Illuminate\Foundation\Http\FormRequest;

class ArticleForm extends BackendForm
{
    public function rules()
    {

        return [
            'cate_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ];

    }
}
