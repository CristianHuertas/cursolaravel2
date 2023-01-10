<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Image::class;


    public function definition()

    
    {
        $imagen = $this->faker->image('public/storage', 640, 480, null, false);
        $name= $this->faker->unique()->sentence();

        return [
            'url' => 'posts/' . $imagen
        ];
    }
}
