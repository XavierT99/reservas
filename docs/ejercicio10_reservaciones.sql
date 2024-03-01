===Base de datos ejercicio10_reservaciones

== Estructura de tabla para la tabla cliente

|------
|Columna|Tipo|Nulo|Predeterminado
|------
|//**ID_cliente**//|int(11)|No|
|Nombre|varchar(255)|Sí|NULL
|Email|varchar(255)|Sí|NULL
|Telefono|varchar(15)|Sí|NULL
|Direccion|varchar(255)|Sí|NULL
== Volcado de datos para la tabla cliente

|1003677091|Xavier Torres|xavier-torres99@hotmail.com|0996823993|Ibarra
== Estructura de tabla para la tabla reserva

|------
|Columna|Tipo|Nulo|Predeterminado
|------
|//**ID_reserva**//|int(11)|No|
|Fecha|date|Sí|NULL
|Estado|varchar(50)|Sí|NULL
|Precio|decimal(10,2)|Sí|NULL
|Habitacion|varchar(10)|Sí|NULL
== Volcado de datos para la tabla reserva

|1|2024-03-08|Activo|25.00|10
== Estructura de tabla para la tabla reserva_clientes

|------
|Columna|Tipo|Nulo|Predeterminado
|------
|//**ID_cliente**//|int(11)|No|
|//**ID_reserva**//|int(11)|No|
== Volcado de datos para la tabla reserva_clientes
