<?php

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'username' => 'test-user',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'terms' => true
    ]);

    $this->assertAuthenticated();
    $response->assertNoContent();
});
