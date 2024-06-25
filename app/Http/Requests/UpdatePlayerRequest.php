<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlayerRequest extends FormRequest
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
            'Player_name'       => 'required|string|max:255',
            'Player_document'   => 'required|string|min:6|max:10|unique:Players',
            'Player_email'      => 'required|email:rfc,dns',
            'Player_phone'      => 'required|string|min:7|max:10',
            'Player_photo'      => 'image|mimes:png|max:2048',
            'Player_age'        => 'required|numeric|min:14',
            'Player_number'     => 'required|numeric|min:1|max:99',
            'Player_position'   => 'string|max:255',
            'Team_id'           => 'numeric|max:255',
        ];
    }

    public function messages()
    {
        return [
            // 'Player_name.required' => 'El :attribute es obligatorio.',
            // 'Player_name.string' => 'El :attribute debe ser de tipo texto.',
            // 'Player_name.max' => 'El :attribute debe ser de maximo 255 caracteres.',
            // 'Player_document.required' => 'El :attribute es obligatorio.',
            // 'Player_document.string' => 'El campo :attribute debe ser de tipo numerico.',
            // 'Player_document.min' => 'El campo :attribute debe tener un valor minimo de 6.',
        ];
    }

    public function attributes()
    {
        return [
            'Player_name'       => 'nombre del jugador',
            'Player_document'   => 'N° de documento del jugador',
            'Player_email'      => 'Correo del jugador',
            'Player_phone'      => 'Telefono celular del jugador',
            'Player_photo'      => 'foto del jugador',
            'Player_age'        => 'edad del jugador',
            'Player_number'     => 'numero de camiseta',
            'Player_position'   => 'posicion del jugador'
        ];
    }
}
