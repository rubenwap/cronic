<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

      //here you add the logic to authorize changes by types of user
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

          'title' => 'required',
          'start' => 'required',
          'end' => 'required'

        //  'published_at' => 'required'
            //
        ];
    }
}
