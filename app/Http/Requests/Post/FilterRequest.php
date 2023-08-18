<?php
namespace App\Http\Requests\Post;
use Illuminate\Foundation\Http\FormRequest;
class FilterRequest extends FormRequest
{
    public function authorize(){return true;}
    public function rules(){return [
            'title' => 'required | string',
            'content' => 'required | string',
            'image' => 'string',
            'category_id'=>'',
            'tags' => '',
        ];}
}
