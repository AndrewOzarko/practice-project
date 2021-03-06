<?php

namespace App\Http\Requests;

use App\Ship\Abstraction\Request;
use Illuminate\Foundation\Http\FormRequest;

class GetStudentByIdRequest extends Request
{
    protected $urlParameters = ['id'];
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
            'id' => 'required|integer|exists:students,id'
        ];
    }
}
