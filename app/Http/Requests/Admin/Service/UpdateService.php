<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateService extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.service.edit', $this->service);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'slug' => ['sometimes', Rule::unique('services', 'slug')->ignore($this->service->getKey(), $this->service->getKeyName()), 'string'],
            'name' => ['sometimes', 'string'],
            'title' => ['sometimes', 'string'],
            'description' => ['sometimes', 'string'],
            'description_long' => ['nullable', 'string'],
            'description_short' => ['nullable', 'string'],
            'img_cover_alt' => ['nullable', 'string'],
            'has_page' => ['nullable', 'boolean'],
            'featured' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
            
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
