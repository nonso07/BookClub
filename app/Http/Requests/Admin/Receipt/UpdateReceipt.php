<?php

namespace App\Http\Requests\Admin\Receipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateReceipt extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.receipt.edit', $this->receipt);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['nullable', 'string'],
            'last_name' => ['nullable', 'string'],
            'Department' => ['nullable', 'string'],
            'Reg_no' => ['sometimes', 'string'],
            'phoneNum' => ['sometimes', 'string'],
            'trans_id' => ['sometimes', 'string'],
            'amount' => ['sometimes', 'integer'],
            'fees' => ['sometimes', 'integer'],
            'Receipt_plan' => ['nullable', 'string'],
            'enabled' => ['sometimes', 'boolean'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
