<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreService extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.service.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'slug' => ['required', Rule::unique('services', 'slug'), 'string'],
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'meta_title' => ['string'],
            'meta_description' => ['string'],
            'description_short' => ['nullable', 'string'],
            'second_title' => ['nullable', 'string'],
            'second_content' => ['nullable', 'string'],
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
