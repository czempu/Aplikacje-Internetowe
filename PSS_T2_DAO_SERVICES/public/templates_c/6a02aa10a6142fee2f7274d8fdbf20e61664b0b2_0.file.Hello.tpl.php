<?php
/* Smarty version 4.3.4, created on 2024-12-23 15:48:26
  from 'C:\xampp2\htdocs\szp\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6769783a4c0127_94162055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a02aa10a6142fee2f7274d8fdbf20e61664b0b2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\szp\\app\\views\\Hello.tpl',
      1 => 1734965278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6769783a4c0127_94162055 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <h1>Test WebSocket</h1>
    <div id="messages"></div>
    <input type="text" id="messageInput" placeholder="Wpisz wiadomość">
    <button id="sendButton">Wyślij</button>

    <?php echo '<script'; ?>
>
        // Utworzenie połączenia z serwerem WebSocket
        const socket = new WebSocket('ws://localhost:8080');

        // Obsługa wiadomości od serwera
        socket.onmessage = function(event) {
            const messagesDiv = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = event.data;
            messagesDiv.appendChild(newMessage);
        };

        // Obsługa otwarcia połączenia
        socket.onopen = function() {
            console.log('Połączono z serwerem WebSocket');
        };

        // Obsługa zamknięcia połączenia
        socket.onclose = function() {
            console.log('Połączenie zamknięte');
        };

        // Obsługa błędów
        socket.onerror = function(error) {
            console.error('Błąd WebSocket:', error);
        };

        // Wysyłanie wiadomości
        document.getElementById('sendButton').addEventListener('click', function() {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value;

            if (message !== '') {
                socket.send(message); // Wyślij wiadomość do serwera
                messageInput.value = ''; // Wyczyść pole tekstowe
            }
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
