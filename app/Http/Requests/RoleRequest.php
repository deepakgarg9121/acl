<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleRequest extends Request
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
            'name' => 'required|unique:roles,name,'.$this->segment(2),'|max:255',
            'label' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Enter the role',
            'name.unique' => 'The entered role already in use',
            'label.required' => 'Enter the label for role',
        ];
    }
}