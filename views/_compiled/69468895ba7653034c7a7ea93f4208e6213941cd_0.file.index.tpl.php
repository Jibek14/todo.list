<?php
/* Smarty version 3.1.36, created on 2020-05-21 17:13:25
  from 'W:\domains\todo.list\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec68c851b8e66_12175630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69468895ba7653034c7a7ea93f4208e6213941cd' => 
    array (
      0 => 'W:\\domains\\todo.list\\views\\index.tpl',
      1 => 1590070372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:todo_list.tpl' => 1,
  ),
),false)) {
function content_5ec68c851b8e66_12175630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9951135455ec68c851b0945_05870910', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/app.tpl");
}
/* {block "content"} */
class Block_9951135455ec68c851b0945_05870910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9951135455ec68c851b0945_05870910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1><?php echo config("app.name");?></h1>

        <div class="card card-body">
                <form method="post" action="/todos/store">
                        <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Новая задача...">
                        </div>
                        <button class="btn btn-success">Создать</button>
                </form>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:todo_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
