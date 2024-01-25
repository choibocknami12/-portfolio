<?php

namespace Database\Seeders;

use App\Models\ClassPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClassPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            $date = $faker->dateTimeBetween('-2 years', '+1 years');
            $enrollmentID = $faker->numberBetween(1, 50000);
            $paymentAmount = $faker->numberBetween(15000, 130000);
            $paymentAmount = floor($paymentAmount / 100) * 100;
                        
            ClassPayment::create([
                'EnrollmentID' => $enrollmentID,
                'PaymentAmount' => $paymentAmount,
                'PaymentMeans' => '1',
                'PaymentState' => '1',
                'created_at' => $date,
            ]);

            
            
        }
    }
}
