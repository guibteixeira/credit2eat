<?php

$smarty = new Template();

$notif = new Produtos();
$notif->GetNotificacoes();

$smarty->assign('OI', $notif->GetItens());

$smarty->display('index.tpl');
?> 