<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecordRequest extends Request
{
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
            'label' => 'required|max:64',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'recurring' => 'boolean',
        ];
    }
}