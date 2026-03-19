<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $customer = $this->route('customer') ? $this->route('customer') : null;
        

        // Assuming $customer is the model instance you are updating
        return [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('customers')->ignore($customer->id),
            ],
            'phone' => [
                'required',
                'max:255',
                Rule::unique('customers')->ignore($customer->id),
            ],
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'postal_code' => 'max:10|nullable',
            'company' => 'max:255|nullable',
        ];
    }
}
