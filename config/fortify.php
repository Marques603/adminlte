<?php

use Laravel\Fortify\Features;

return [

/*
|--------------------------------------------------------------------------
| Guard do Fortify
|--------------------------------------------------------------------------
|
| Aqui você pode especificar qual guard de autenticação o Fortify usará
| ao autenticar usuários. Esse valor deve corresponder a um dos guards
| já presentes no seu arquivo de configuração "auth".
|
*/

    'guard' => 'web',

/*
|--------------------------------------------------------------------------
| Broker de Senhas do Fortify
|--------------------------------------------------------------------------
|
| Aqui você pode especificar qual broker de senhas o Fortify pode usar
| quando um usuário estiver redefinindo sua senha. Esse valor deve
| corresponder a um dos brokers de senha configurados no arquivo "auth".
|
*/

    'passwords' => 'users',

/*
|--------------------------------------------------------------------------
| Nome de Usuário / E-mail
|--------------------------------------------------------------------------
|
| Este valor define qual atributo do model deve ser considerado como o
| campo de "nome de usuário" da sua aplicação. Normalmente, pode ser o
| endereço de e-mail dos usuários, mas você pode alterar este valor.
|
| Por padrão, o Fortify espera que os pedidos de recuperação e redefinição
| de senha tenham um campo chamado 'email'. Se sua aplicação usar outro
| nome para esse campo, você pode defini-lo abaixo conforme necessário.
|
*/

    'username' => 'email',

    'email' => 'email',

/*
|--------------------------------------------------------------------------
| Nomes de Usuário em Minúsculas
|--------------------------------------------------------------------------
|
| Este valor define se os nomes de usuário devem ser convertidos para
| minúsculas antes de serem salvos no banco de dados, já que alguns bancos
| de dados fazem distinção entre maiúsculas e minúsculas. Você pode
| desabilitar isso na sua aplicação, se necessário.
|
*/

    'lowercase_usernames' => true,

/*
|--------------------------------------------------------------------------
| Caminho Inicial (Home)
|--------------------------------------------------------------------------
|
| Aqui você pode configurar o caminho para onde os usuários serão redirecionados
| após autenticação ou redefinição de senha, quando essas operações forem
| bem-sucedidas e o usuário estiver autenticado. Você pode alterar isso.
|
*/

    'home' => '/',

/*
|--------------------------------------------------------------------------
| Prefixo / Subdomínio das Rotas do Fortify
|--------------------------------------------------------------------------
|
| Aqui você pode especificar qual prefixo o Fortify usará em todas as rotas
| que ele registrar na aplicação. Se necessário, você pode também definir
| o subdomínio sob o qual todas as rotas do Fortify estarão disponíveis.
|
*/

    'prefix' => '',

    'domain' => null,

/*
|--------------------------------------------------------------------------
| Middleware das Rotas do Fortify
|--------------------------------------------------------------------------
|
| Aqui você pode especificar quais middlewares o Fortify usará nas rotas
| que ele registrar na aplicação. Se necessário, você pode alterá-los,
| mas normalmente os padrões fornecidos são os ideais.
|
*/

    'middleware' => ['web'],

/*
|--------------------------------------------------------------------------
| Limitação de Taxa (Rate Limiting)
|--------------------------------------------------------------------------
|
| Por padrão, o Fortify limita os logins a cinco tentativas por minuto
| para cada combinação de e-mail e endereço IP. No entanto, se desejar
| especificar um limitador personalizado, você pode definí-lo aqui.
|
*/

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

/*
|--------------------------------------------------------------------------
| Registrar Rotas de Visualização
|--------------------------------------------------------------------------
|
| Aqui você pode especificar se as rotas que retornam views devem ser
| desabilitadas, caso não precise delas ao criar sua própria aplicação.
| Isso é especialmente útil em aplicações SPA (single-page application).
|
*/

    'views' => true,

/*
|--------------------------------------------------------------------------
| Funcionalidades
|--------------------------------------------------------------------------
|
| Algumas das funcionalidades do Fortify são opcionais. Você pode desabilitá-las
| removendo-as deste array. Pode remover apenas algumas ou todas, se necessário.
|
*/

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // // Features::emailVerification(),
        // Features::updateProfileInformation(),
        // Features::updatePasswords(),
        // Features::twoFactorAuthentication([
        //     'confirm' => true,
        //     'confirmPassword' => true,
        //     // 'window' => 0,
        // ]),
    ],

];
