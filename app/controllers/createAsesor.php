<?php

    session_start();

    require_once '../assets/stripe-php/init.php';
    require_once '../models/User.php';
    require_once '../models/config/Connection.php';

    $user = new User(Connection::conn());

    $stripe = new \Stripe\StripeClient([
        'api_key' => 'sk_test_51P0IeWP9Ot3ecyAmM9aCRnphdEMkJJoLtlHaomOPghHWr8Pt35fH74cCqFN5jYPXYFXNmUphODU0m8tHzVorVm0s00lMeZ1qwy'
    ]);

    $_SESSION['usuario']['false_stripe'] = 'acct_1P0ruc05JB1M6W66';
    

    if (isset($_SESSION['usuario']['false_stripe']) ) {

    $account = $stripe->accounts->retrieve(
        $_SESSION['usuario']['false_stripe'],
        []
    );

    if ($account['charges_enabled'] == false) {
        $url =  $stripe->accountLinks->create([
            'account' => $_SESSION['usuario']['false_stripe'],
            'refresh_url' => 'http://localhost/advisorysync/dynamic/refresh',
            'return_url' => 'http://localhost/advisorysync/dynamic/return',
            'type' => 'account_onboarding',
        ]);

        echo json_encode(['url' => $url->url]);
    }else{
        try {
            $res = $user->updateUser($_SESSION['usuario']['correo'], $_SESSION['usuario']['false_stripe']);
            $_SESSION['createAdviser'] = true;
        } catch (\Throwable $th) {
            $_SESSION['createAdviser'] = false;
        }

        echo json_encode(['status' => 'ok']);
    }

}else{

    $account = $stripe->accounts->create([
        'type' => 'express',
        'country' => 'MX',
        'email' => 'ejemplo5@example.com',
        'capabilities' => [
        'card_payments' => ['requested' => true],
        'transfers' => ['requested' => true],
        ],
    ]);

    $_SESSION['usuario']['false_stripe'] = $account['id'];

    $url =  $stripe->accountLinks->create([
        'account' => $_SESSION['usuario']['false_stripe'],
        'refresh_url' => 'http://localhost/advisorysync/dynamic/refresh',
        'return_url' => 'http://localhost/advisorysync/dynamic/return',
        'type' => 'account_onboarding',
    ]);

    echo json_encode(['url' => $url->url]);
}

?>