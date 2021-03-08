<?php

namespace Database\Factories;

use App\Models\ChatMessages;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatMessagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChatMessages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            //
            'messages' => $this->faker->text,
            'user_id' =>\App\Models\User::query()
                            ->inRandomOrder()
                            ->firstOr(function () {
                                return factory(\App\Models\User::class)->create();
                        }),

        ];
    }
}
