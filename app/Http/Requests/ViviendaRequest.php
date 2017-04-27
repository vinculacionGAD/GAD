<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViviendaRequest extends FormRequest
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
            'tipo_construccion'=>'required|max:45',
            'anios_vida'=>'required|min:1',
            'ubicacion'=>'required|max:45'
        ];
    }
}
