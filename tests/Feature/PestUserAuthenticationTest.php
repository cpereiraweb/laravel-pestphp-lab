<?php

it('PEST: Testa a exibição da tela de Login', function () {
    $response = $this->get('/login');
    $response->assertStatus(200);
});

it('PEST: Testa se um usuário recém-criado consegue acessar o sistema', function () {
    $user = \App\Models\User::factory()->create();

    actingAs($user)->get('/dashboard')->assertSee($user->name);

});
