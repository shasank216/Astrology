<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\PaymentGateway;
use Illuminate\Database\Seeder;

class DefaultPaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentGateways = [
            [
                'payment_gateway_id' => Appointment::MANUALLY,
                'payment_gateway' => Appointment::PAYMENT_METHOD[1],
            ],
            [
                'payment_gateway_id' => Appointment::STRIPE,
                'payment_gateway' => Appointment::PAYMENT_METHOD[2],
            ],
            [
                'payment_gateway_id' => Appointment::PAYSTACK,
                'payment_gateway' => Appointment::PAYMENT_METHOD[3],
            ],
            [
                'payment_gateway_id' => Appointment::PAYPAL,
                'payment_gateway' => Appointment::PAYMENT_METHOD[4],
            ],
            [
                'payment_gateway_id' => Appointment::RAZORPAY,
                'payment_gateway' => Appointment::PAYMENT_METHOD[5],
            ],
            [
                'payment_gateway_id' => Appointment::AUTHORIZE,
                'payment_gateway' => Appointment::PAYMENT_METHOD[6],
            ],
            [
                'payment_gateway_id' => Appointment::PAYTM,
                'payment_gateway' => Appointment::PAYMENT_METHOD[7],
            ],
        ];

        foreach ($paymentGateways as $paymentGateway) {
            PaymentGateway::create($paymentGateway);
        }
    }
}
