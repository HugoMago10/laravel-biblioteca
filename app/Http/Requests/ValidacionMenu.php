<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Admin\Menu;
use App\Rules\ValidarCampoUrl;

class ValidacionMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//se pone true para la validacion menu
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Se crea con php artisan make:rule nombre_de_regla
        return [
            'nombre' => [
                'required',
                Rule::unique('menu')->ignore($this->id,'id_menu')],
            'url'=> ['required','max:100', new ValidarCampoUrl],
            'icono'=>'nullable|max:50'
        ];
    }
    /* laravel tiene mensaje por defecto pero tambien podemos crear nuestros mensajes */
    /* public function messages(){
        return [
            'nombre.required'=>'El campo nombre es necesario',
            'url.required'=>'El campo url es necesario',
        ];
    } */
}
