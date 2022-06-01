<?php

namespace App\Http\Requests\Admin\Video;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreVideo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.video.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'video_link' => ['required', 'string'],
            'service_id' => ['required', 'integer'],
            'order' => ['nullable', 'integer'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'thumb_default' => ['required', 'string'],
            'thumb_medium' => ['required', 'string'],
            'thumb_high' => ['required', 'string'],
            
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
