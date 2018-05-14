<?php
//|----------------------------------------------------
//| link_to option can be only 'home', 'reload' or 'previous'
//|----------------------------------------------------
return [
    "403" => [
        "title" => "403 Prohibido",
        "description" => "¡Lo siento! No tiene permisos de acceso para eso en <em>:domain</em>.",
        "icon" => "fa fa-ban red",
        "button" => [
            "name" => "Llévame a la página de inicio",
            "link_to" => "home"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 403 indica que no tiene permiso para acceder al archivo o la página. En general, los servidores web y los sitios web tienen directorios y archivos que no están abiertos a la red pública por razones de seguridad."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Utilice el botón atrás de su navegador y verifique que se encuentra en el lugar correcto. Si necesita asistencia inmediata, envíenos un correo electrónico en su lugar."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Por favor comprueba que estás en el lugar correcto y ponerse en contacto con su proveedor de sitio web si cree que esto es un error."
            ]
        ]
    ],
    "404" => [
        "title" => "404 Not Found",
        "description" => "No pudimos encontrar lo que estás buscando <em>:domain</em>.",
        "icon" => "fa fa-frown-o red",
        "button" => [
            "name" => "Llévame a la página de inicio",
            "link_to" => "home"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 404 implica que el archivo o la página que está buscando no se pudo encontrar."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Utilice el botón Atrás de su navegador y verifique que se encuentra en el lugar correcto. Si necesita asistencia inmediata, envíenos un correo electrónico en su lugar."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Por favor comprueba que estás en el lugar correcto y ponerse en contacto con su proveedor de sitio web si cree que esto es un error."
            ]
        ]
    ],
    '405' => [
        'title' => "405 Method not allowed",
        'description' => "Solicitó esta página con un método HTTP no válido o inexistente <em>:domain</em>.",
        'icon' => "fa fa-ban orange",
        'button' => [
            'name' => "Volver a la página anterior",
            'link_to' => "previous",
        ],
        'why' => [
            'title' => "¿Que pasó?",
            'description' => "El error 405 indica que el método de solicitud es conocido por el servidor, pero se ha deshabilitado y no se puede usar."
        ],
        'what_do' => [
            'title' => "¿Que puedo hacer?",
            'visitor' => [
                'title' => "Si eres un visitante del sitio",
                'description' => "Vaya a la página anterior y vuelva a intentarlo. Si necesita asistencia inmediata, envíenos un correo electrónico."
            ],
            'owner' => [
                'title' => "Si eres el propietario del sitio",
                'description' => "Vaya a la página anterior y vuelva a intentarlo. Si el error persiste, póngase en contacto con su proveedor de sitio web."
            ],
        ],
    ],
    '419' => [
        'title' => '419 Authentication Timeout',
        'description' => "La página ha expirado debido a inactividad <em>:domain</em>.",
        'icon' => "fa fa-lock red",
        'button' => [
            "name" => "Llévame a la página de inicio",
            "link_to" => "home"
        ],
        'why' => [
            'title' => "¿Que pasó?",
            'description' => "El error 419 denota que la autenticación previamente válida ha expirado."
        ],
        'what_do' => [
            'title' => "¿Que puedo hacer?",
            'visitor' => [
                'title' => "Si eres un visitante del sitio",
                'description' => "Actualice esta página o intente iniciar sesión de nuevo. Si necesita asistencia inmediata, envíenos un correo electrónico."
            ],
            'owner' => [
                'title' => "Si eres el propietario del sitio",
                'description' => "Actualice esta página o intente iniciar sesión de nuevo. Si el error persiste, póngase en contacto con su proveedor de sitio web."
            ],
        ],
    ],
    "429" => [
        "title" => "429 Too Many Requests",
        "description" => "El servidor web está devolviendo una notificación de limitación de velocidad <em>:domain</em>.",
        "icon" => "fa fa-dashboard red",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "Este error significa que ha excedido el límite de velocidad de solicitud para el servidor web al que está accediendo. </p><p class=\"lead\"> Los umbrales de límite de frecuencia se configuran más altos que una navegación humana que este sitio debería poder alcanzar y principalmente para la protección contra solicitudes y ataques automatizados."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Lo mejor que puede hacer es reducir la velocidad con sus solicitudes e intentar nuevamente en unos minutos. Nos disculpamos por cualquier inconveniente."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Es probable que este error sea muy breve, lo mejor es comprobarlo en unos minutos y probablemente todo vuelva a funcionar normalmente. Si el error persiste, comuníquese con el host de su sitio web."
            ]
        ]
    ],
    "500" => [
        "title" => "500 Internal Server Error",
        "description" => "El servidor web está devolviendo una notificación de limitación de velocidad <em>:domain</em>.",
        "icon" => "glyphicon glyphicon-fire red",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 500 implica que hay un problema con el software del servidor web que causa un mal funcionamiento."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Si usted necesita asistencia inmediata, por favor envíenos un correo electrónico. Nos disculpamos por cualquier inconveniente."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Este error solo puede ser resuelto por los administradores del servidor, póngase en contacto con su proveedor de sitio web."
            ]
        ]
    ],
    "502" => [
        "title" => "502 Bad Gateway",
        "description" => "El servidor web está devolviendo una notificación de limitación de velocidad <em>:domain</em>.",
        "icon" => "fa fa-bolt orange",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 502 implica que el servidor recibió una respuesta no válida de un servidor ascendente al que accedió para cumplir con la solicitud."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "<a href=\"http://isup.me/:domain\" target=\"_blank\" rel=\"nofollow\">Compruebe si este sitio web está disponible para todos o solo usted.</a>"
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Borrar el caché de su navegador y actualizar la página puede solucionar este problema. Si el problema persiste y necesita asistencia inmediata, comuníquese con el proveedor de su sitio web."
            ]
        ]
    ],
    "503" => [
        "title" => "503 Service Unavailable",
        "description" => "El servidor web está devolviendo un error temporal inesperado para <em>:domain</em>.",
        "icon" => "fa fa-exclamation-triangle orange",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 503 implica que se trata de una condición temporal debido a una sobrecarga temporal o al mantenimiento del servidor. Este error es normalmente una breve interrupción temporal."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Si usted necesita asistencia inmediata, por favor envíenos un correo electrónico. Nos disculpamos por cualquier inconveniente."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Es probable que este error sea muy breve, lo mejor es comprobarlo en unos minutos y probablemente todo vuelva a funcionar normalmente."
            ]
        ]
    ],
    "504" => [
        "title" => "504 Gateway Timeout",
        "description" => "El servidor web está devolviendo un error de red inesperado para <em>:domain</em>.\n",
        "icon" => "fa fa-clock-o orange",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "El error 504 implica que hay un problema de comunicación IP lento entre los servidores de servicios de fondo que intentan cumplir con esta solicitud."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "<a href=\"http://isup.me/:domain\" target=\"_blank\" rel=\"nofollow\">Compruebe si este sitio web está disponible para todos o solo usted.</a></p><p>Además, borrar el caché del navegador y actualizar la página puede solucionar este problema. Si el problema persiste y necesita asistencia inmediata, envíenos un correo electrónico en su lugar."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "Borrar caché del navegador y actualiza la página pueden eliminar este problema. Si el problema persiste y necesita ayuda inmediata, por favor comuníquese con su proveedor de sitio Web."
            ]
        ]
    ],
    "maintenance" => [
        "title" => "Mantenimiento temporal",
        "description" => "El servidor web para <em>:domain</em> Actualmente se está realizando un mantenimiento.",
        "icon" => "fa fa-cogs green",
        "button" => [
            "name" => "Prueba esta página otra vez",
            "link_to" => "Volver a cargar"
        ],
        "why" => [
            "title" => "¿Que pasó?",
            "description" => "Servidores y sitios web necesita un mantenimiento regular al igual que un coche para mantener y funcionando sin problemas."
        ],
        "what_do" => [
            "title" => "¿Que puedo hacer?",
            "visitor" => [
                "title" => "Si eres un visitante del sitio",
                "description" => "Si usted necesita asistencia inmediata, por favor envíenos un correo electrónico. Nos disculpamos por cualquier inconveniente."
            ],
            "owner" => [
                "title" => "Si eres el propietario del sitio",
                "description" => "El período de mantenimiento probablemente sea muy breve, lo mejor es comprobarlo en unos minutos y todo volverá a funcionar normalmente."
            ]
        ]
    ]
];
