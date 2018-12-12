<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PagSeguro;

class PagSeguroController extends Controller
{
    public function action_boleto (Request $request) {
        $pagseguro = PagSeguro::setReference('ID do pedido')
            ->setSenderInfo([
            'senderName' => 'Nome Completo', //Deve conter nome e sobrenome
            'senderPhone' => '(32) 1324-1421', //Código de área enviado junto com o telefone
            'senderEmail' => 'email@email.com',
            'senderHash' => $request->pagseguro_token,
            'senderCPF' => '01489159223', //Ou CNPJ se for Pessoa Júridica
            ])
            ->setCreditCardHolder([
            'creditCardHolderBirthDate' => '10/02/2000',
            ])
            ->setShippingAddress([
            'shippingAddressStreet' => 'Rua/Avenida',
            'shippingAddressNumber' => 'Número',
            'shippingAddressDistrict' => 'Bairro',
            'shippingAddressPostalCode' => '12345-678',
            'shippingAddressCity' => 'Cidade',
            'shippingAddressState' => 'AP',
            ])
            ->setItems([
            [
                'itemId' => 'ID',
                'itemDescription' => 'Nome do Item',
                'itemAmount' => 12.14, //Valor unitário
                'itemQuantity' => '2', // Quantidade de itens
            ],
            [
                'itemId' => 'ID 2',
                'itemDescription' => 'Nome do Item 2',
                'itemAmount' => 12.14,
                'itemQuantity' => '2',
            ]
            ])
            ->send([
            'paymentMethod' => 'creditCard',
            'creditCardToken' => $request->pagseguro_token,
            'installmentQuantity' => '2',
            'installmentValue' => 50.20,
            ]);
        dd($pagseguro);
    }
}
