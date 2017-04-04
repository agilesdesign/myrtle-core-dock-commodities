<?php

namespace Myrtle\Core\Commodities\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Myrtle\Commodities\Models\Commodity;

class SaveCommodityForm extends FormRequest
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
            'name' => 'required',
        ];
    }

    public function process()
    {
        $method = debug_backtrace()[1]['function'];

        return call_user_func_array([$this, $method], func_get_args());
    }

    public function store()
    {
        return Commodity::create($this->only('name'));
    }

    public function update(Commodity $commodity)
    {
        $commodity->update($this->only('name'));

        return $commodity;
    }
}
