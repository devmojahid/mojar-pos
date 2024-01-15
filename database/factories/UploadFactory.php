<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Upload>
 */
class UploadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => $this->faker->word,
            'file_path' => $this->faker->word,
            'file_type' => $this->faker->word,
            'file_size' => $this->faker->word,
            'file_extension' => $this->faker->word,
            'file_mime_type' => $this->faker->word,
            'disk' => $this->faker->word,
            'url' => $this->faker->imageUrl(),
            'uploaded_by' => $this->faker->numberBetween(1, 4),
            'uploadable_id' => $this->faker->numberBetween(1, 5),
            'uploadable_type' => $this->faker->word,
        ];
    }
}
