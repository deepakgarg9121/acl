<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GroupRequest extends Request
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
        if(isset($_POST['roleGroup'])){
            return [
                'roleGroup' => 'required',
                'roleForGroup' => 'required',
            ];
        }
        return [
            'name' => 'required|unique:groups,name,'.$this->segment(2),'|max:255',
            'label' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Enter the group',
            'name.unique' => 'The entered group already in use',
            'label.required' => 'Enter the label for group',
            'roleGroup.required' => 'Select the group',
            'roleForGroup.required' => 'Select atleast one role',
        ];
    }
}
