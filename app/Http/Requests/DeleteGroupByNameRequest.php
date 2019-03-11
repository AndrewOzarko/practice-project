<?php

namespace App\Http\Requests;

use App\Ship\Abstraction\Request;
use Illuminate\Foundation\Http\FormRequest;

class DeleteGroupByNameRequest extends Request
{
    protected $urlParameters = ['name'];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|exists:groups,name'
        ];
    }
}
