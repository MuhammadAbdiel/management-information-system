<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'item_unit_id' => ['required'],
            'item_type_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
        ];
    }
}
