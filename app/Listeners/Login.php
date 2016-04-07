<?php

Event::listen('Aacotroneo\Saml2\Events\Saml2LoginEvent', function (Saml2LoginEvent $event) {
    $user = $event->getSaml2User();
    $userData = [
        'id' => $user->getUserId(),
        'attributes' => $user->getAttributes(),
        'assertion' => $user->getRawSamlAssertion()
    ];
    $laravelUser = User::where('crsid', '=' , $userData['id'])->first(); //find user by ID or attribute
    if ($laravelUser === null) {
        // Create the user.
        echo "Can't find user\n";
        var_dump($userData);
        die;
        // TODO: Remove this and make it legit.
    }
    Auth::login($laravelUser);
});
