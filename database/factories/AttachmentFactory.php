<?php

namespace Database\Factories;

use App\Models\Attachment;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::first()->id,
            'commission_id' => Commission::first()->id,
            'MIME' => 'image/png',
            'size' => 1024,
        ];
    }
}
