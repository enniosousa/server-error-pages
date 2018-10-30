<?php

//|----------------------------------------------------
//| link_to option can be only 'home', 'reload' or 'previous'
//|----------------------------------------------------
return [
    '400' => [
        'title' => '400 Bad Request',
        'description' => 'Lamento! O servidor de <em>:domain</em> não conseguiu entender a requisição devido à sintaxe inválida.',
        'icon' => 'fa fa-ban red',
        'button' => [
            'name' => "Voltar à página anterior",
            'link_to' => "previous",
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 400 indica que o servidor não conseguiu entender a requisição devido à sintaxe inválida.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Por favor volte a página anterior e verifique se configurou ou preencheu o formulário corretamente. Se você precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Verifique se fez tudo corretamente, ou entre em contato com provedor do site se você acredita que isso é um erro.',
            ],
        ],
    ],
    '401' => [
        'title' => '401 Unauthorized',
        'description' => 'Opa! Você precisa estar autenticado para acessar este recurso em <em>:domain</em>.',
        'icon' => 'fa fa-lock red',
        'button' => [
            'name' => "Voltar à página anterior",
            'link_to' => "previous",
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 401 indica que a solicitação não foi aplicada porque não possui credenciais de autenticação válidas.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => "Atualize a página ou tente fazer login novamente. Se você precisar de assistência imediata, por favor entre em contato."
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => "Atualize a página ou tente fazer login novamente. Se o erro persistir entre em contato com provedor do site."
            ],
        ],
    ],
    '403' => [
        'title' => '403 Forbidden',
        'description' => 'Lamento! Você não tem permissão de acesso para isso em <em>:domain</em>.',
        'icon' => 'fa fa-ban red',
        'button' => [
            'name' => 'Leve-me à página inicial',
            'link_to' => 'home',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 403 indica que você não tem permissão para acessar esta página ou arquivo. Em geral, servidores web e sites tem diretórios e arquivos que não são aberto ao público por motivos de segurança.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Por favor volte a página anterior e verifique se você deveria está no lugar certo. Se você precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Verifique se você está no lugar certo e entre em contato com provedor do site se você acredita que isso é um erro.',
            ],
        ],
    ],
    '404' => [
        'title' => '404 Not Found',
        'description' => 'Não encontramos o que você está procurando <em>:domain</em>.',
        'icon' => 'fa fa-frown-o red',
        'button' => [
            'name' => 'Leve-me à página inicial',
            'link_to' => 'home',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 404 indica que o arquivo ou a página que você está procurando não existe.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Por favor volte a página anterior e verifique se você deveria está no lugar certo. Se você precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Verifique se você está no lugar certo e entre em contato com provedor do site se você acredita que isso é um erro.',
            ],
        ],
    ],
    '405' => [
        'title' => "405 Method not allowed",
        'description' => "Você solicitou esta página com um método HTTP inválido ou inexistente em <em>:domain</em>.",
        'icon' => "fa fa-ban orange",
        'button' => [
            'name' => "Voltar a página anterior",
            'link_to' => "previous",
        ],
        'why' => [
            'title' => "O que aconteceu?",
            'description' => "O erro 405 indica que o método de solicitação é conhecido pelo servidor, mas foi desativado e não pode ser usado."
        ],
        'what_do' => [
            'title' => "O que posso fazer?",
            'visitor' => [
                'title' => "Se você é um visitante do site",
                'description' => "Vá para a página anterior e tente novamente. Se você precisar de assistência imediata, por favor entre em contato."
            ],
            'owner' => [
                'title' => "Se você é o proprietário do site",
                'description' => "Vá para a página anterior e tente novamente. Se o erro persistir entre em contato com provedor do site."
            ],
        ],
    ],
    '408' => [
        'title' => '408 Request Timeout',
        'description' => 'O servidor em <em>:domain</em> excedeu o limite de tempo execução antes de concluir a tarefa.',
        'icon' => 'fa fa-clock-o red',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 408 indica que o tempo limite de execução do servidor foi atingido antes de concluir a requisição.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Atualize a página e tente novamente.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Atualize a página. Se o erro persistir entre em contato com provedor do site.',
            ],
        ],
    ],
    '419' => [
        'title' => '419 Authentication Timeout',
        'description' => "A página expirou por inatividade <em>:domain</em>.",
        'icon' => "fa fa-lock red",
        'button' => [
            'name' => 'Leve-me à página inicial',
            'link_to' => 'home',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => "O erro 419 denota que uma autenticação anteriormente válida expirou."
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => "Atualize a página ou tente fazer login novamente. Se você precisar de assistência imediata, por favor entre em contato."
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => "Atualize a página ou tente fazer login novamente. Se o erro persistir entre em contato com provedor do site."
            ],
        ],
    ],
    '429' => [
        'title' => '429 Too Many Requests',
        'description' => 'O servidor está retornando uma notificação de limite alcançado para <em>:domain</em>.',
        'icon' => 'fa fa-dashboard red',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'Este erro significa que o limite de requisições ao servidor que você está acessando foi atingido.</p><p class="lead">O limite de requisições é mais alto do que um humano pode requisitar, este site tem proteção contra solicitações e ataques automatizados.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'O melhor a fazer é ir com calma nas requisições e tentar novamente em alguns minutos. Nos desculpamos por qualquer inconveniente.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Este erro ocorre de forma breve, o melhor a fazer é esperar alguns minutos que tudo deve voltar funcionar normalmente. Se o erro persistir, por favor entre em contato.',
            ],
        ],
    ],
    '500' => [
        'title' => '500 Internal Server Error',
        'description' => 'O servidor web está retornando um erro interno para <em>:domain</em>.',
        'icon' => 'glyphicon glyphicon-fire red',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 500 indica que existem problemas com o software do servidor causando mal funcionamento.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Nada que você possa fazer no momento. Se você precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Este erro só pode ser corrigido por administradores do servidor, por favor, entre em contato com o provedor do site.',
            ],
        ],
    ],
    '502' => [
        'title' => '502 Bad Gateway',
        'description' => 'O servidor está retornando um erro de rede inesperado para <em>:domain</em>.',
        'icon' => 'fa fa-bolt orange',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 502 indica que um servidor de rede (gateway ou proxy) recebeu uma resposta inválida do servidor upstream que acessou para cumprir o pedido.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => '<a href="http://isup.me/:domain" target="_blank" rel="nofollow">Verificar se este site está offline para todos ou apenas para você.</a>',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Limpar o cache do seu navegador e atualizar a página pode resolver este problema. Se o problema persistir você e precisar de assistência imediata, por favor entre em contato.',
            ],
        ],
    ],
    '503' => [
        'title' => '503 Service Unavailable',
        'description' => 'O servidor está retornando um inesperado erro temporário para <em>:domain</em>.',
        'icon' => 'fa fa-exclamation-triangle orange',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 503 indica que esta é uma condição temporária por sobrecarga ou manutenção no servidor. Este erro é normalmente um interrupção temporária.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Se você precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Este erro ocorre de forma breve, o melhor a fazer é esperar alguns minutos que tudo deve voltar funcionar normalmente.',
            ],
        ],
    ],
    '504' => [
        'title' => '504 Gateway Timeout',
        'description' => 'O servidor está retornando um erro de rede inesperado para <em>:domain</em>.',
        'icon' => 'fa fa-clock-o orange',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'O erro 504 indica que a comunicação lenta do IP entre os servidores do back-end para cumprir o pedido.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => '<a href="http://isup.me/:domain" target="_blank" rel="nofollow">Verificar se este site está offline para todos ou apenas para você.</a><p></p><p>Limpar o cache do seu navegador e atualizar a página pode resolver este problema. Se o problema persistir você e precisar de assistência imediata, por favor entre em contato.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Limpar o cache do seu navegador e atualizar a página pode resolver este problema. Se o problema persistir você e precisar de assistência imediata, por favor entre em contato.',
            ],
        ],
    ],
    'maintenance' => [
        'title' => 'Manutenção Temporária',
        'description' => 'O servidor do site <em>:domain</em> está nesse momento em manutenção.',
        'icon' => 'fa fa-cogs green',
        'button' => [
            'name' => 'Tente esta página novamente',
            'link_to' => 'reload',
        ],
        'why' => [
            'title' => 'O que aconteceu?',
            'description' => 'Servidores e sites, assim como os carros, precisam regularmente de manutenção para continuarem funcionando.',
        ],
        'what_do' => [
            'title' => 'O que posso fazer?',
            'visitor' => [
                'title' => 'Se você é um visitante do site',
                'description' => 'Se você precisar de assistência imediata, por favor entre em contato. Nos desculpamos pelo inconveniente.',
            ],
            'owner' => [
                'title' => 'Se você é o proprietário do site',
                'description' => 'Geralmente a manutenção ocorre de forma rápida, o melhor a fazer é esperar alguns minutos e tentar novamente.',
            ],
        ],
    ],
];
