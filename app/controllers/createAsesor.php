<?php

    session_start();

    require_once '../assets/stripe-php/init.php';

    $stripe = new \Stripe\StripeClient([
        'api_key' => 'sk_test_51P0IeWP9Ot3ecyAmM9aCRnphdEMkJJoLtlHaomOPghHWr8Pt35fH74cCqFN5jYPXYFXNmUphODU0m8tHzVorVm0s00lMeZ1qwy'
    ]);

if (isset($_SESSION['usuario']['id_stripe']) ) {
    // echo 'asesor';
    
    // $account = $stripe->accounts->retrieve(
    //     'acct_1P1jLJ064MKrgUGM',
    //     []
    //   );

    $account = $stripe->accounts->retrieve(
        'acct_1P1jLJ064MKrgUGM',
        []
    );

    if ($account['charges_enabled'] == false) {
        $url =  $stripe->accountLinks->create([
            'account' => 'acct_1P1jLJ064MKrgUGM',
            'refresh_url' => 'http://localhost/advisorysync/dynamic/refresh',
            'return_url' => 'http://localhost/advisorysync/dynamic/return',
            'type' => 'account_onboarding',
        ]);

        echo json_encode(['url' => $url->url]);
    }else{
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

    $_SESSION['usuario']['id_stripe'] = $account['id'];

    $url =  $stripe->accountLinks->create([
        'account' => $_SESSION['usuario']['id_stripe'],
        'refresh_url' => 'http://localhost/advisorysync/dynamic/refresh',
        'return_url' => 'http://localhost/advisorysync/dynamic/return',
        'type' => 'account_onboarding',
    ]);

    // header("location: {$url['url']}");

    echo json_encode(['url' => $url->url]);
}

?>