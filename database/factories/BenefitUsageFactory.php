<?php

namespace OpenSaaS\Subify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OpenSaaS\Subify\Persistence\Models\Benefit;
use OpenSaaS\Subify\Persistence\Models\BenefitUsage;

class BenefitUsageFactory extends Factory
{
    protected $model = BenefitUsage::class;

    public function definition(): array
    {
        return [
            'benefit_id' => Benefit::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 100),
            'subscriber_id' => $this->faker->randomNumber(),
            'subscriber_type' => $this->faker->word,
            'expired_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
        ];
    }
}
