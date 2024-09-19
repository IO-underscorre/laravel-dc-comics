<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:125',
            'series' => 'required|min:3|max:125',
            'issue_number' => 'required|numeric|min:0|max:65535',
            'summary' => 'nullable|max:65535',
            'cover_image' => [
                'nullable',
                'url',
                'max:510',
                function ($attribute, $value, $fail) {
                    $headers = @get_headers($value, 1);

                    if ($headers && isset($headers['Content-Type'])) {
                        $content_type = is_array($headers['Content-Type']) ? $headers['Content-Type'][0] : $headers['Content-Type'];

                        if (!str_contains($content_type, 'image')) {
                            $fail('The cover URL must be a valid image URL.');
                        }
                    } else {
                        $fail('The cover URL must be a valid image URL.');
                    }
                },
            ],
            'release_date' => 'nullable|date',
            'page_count' => 'nullable|min:0|max:65535',
            'price' => 'required|decimal:0,2|min:0|max:999999.99',
        ];
    }
}
