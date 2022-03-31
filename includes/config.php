<?php

/**
* Credenciais para conexão com o Banco de Dados.
**/

define ('HOST', 'ec2-3-230-122-20.compute-1.amazonaws.com');

define ('USUARIO', 'xkpicqcwkgkefp');

define ('SENHA', '201bff122d568104d95c373ec3ae48504b8d508f884b99fa76653f1e85d28ca3');

define ('BD', 'dehaak4nq6a2br');

/**
* Caso queira guardar erros SQL
**/

define ('ERROS_SQL', false);

define ('TOKEN', '5167187800:AAH7LMvlE7BPpZJ0SSYQcXb3MICakU4QStY');

define ('CANAL', '@FlavinAdS');

define ('ADM', '5030535253');

define ('TIME_ZONE', 'America/Sao_Paulo');

/**
* false para que os usuários não tenham limite de divulgação.
**/

define ('LIMITAR_DIVULGACAO', true);

/**
* Tempo para a próxima divulgação em segundos.
* O tempo padrão e 24h em segundos 86400.
**/

define ('PROXIMA_DIVULGACAO', 300);

/**
* Número de advertências para o usuário ser bloqueado.
**/

define ('NUMERO_ADVERTENCIAS', 3);

/**
* Link de um banner de divulgação para que o usuário também possa divulgar o seu canal.
**/

define ('BANNER_RETIBUIR', '');

/**
* Se true o usuário terá que se tornar membro do canal para que possa fazer divulgações.
**/

define ('SO_MEMBROS', true);

/*
* Se true a divulgação será enviada diretamente para o canal sem passar pela confirmação do adm.
*/

define ('DIVULGACAO_DIRETA', true);
