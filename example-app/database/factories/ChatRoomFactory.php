<?php

namespace Database\Factories;

use App\Models\ChatRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChatRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'user_id' =>\App\Models\User::query()
                    ->inRandomOrder()
                    ->firstOr(function () {
                    return factory(\App\Models\User::class)->create();
        }),
        ];
    }
}
