<?php
/* Smarty version 3.1.36, created on 2020-05-21 08:05:08
  from 'W:\domains\mvc.loc\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec60c0454efd6_65025853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46cd257cd6a4368da53f4531401b50705329062' => 
    array (
      0 => 'W:\\domains\\mvc.loc\\views\\index.tpl',
      1 => 1590037108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec60c0454efd6_65025853 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/books" method="post">
        <input type="text" name="name" placeholder="Название...">
        <input type="text" name="author" placeholder="Автор...">
        <button>Создать</button>
</form>


<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
        <li>
                <?php echo $_smarty_tpl->tpl_vars['book']->value->author;?>
, "<?php echo $_smarty_tpl->tpl_vars['book']->value->name;?>
"
                <form action="/books/delete/<?php echo $_smarty_tpl->tpl_vars['book']->value->id;?>
" method="POST">
                        <button>Удалить</button>
                </form>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<style>
        
</style><?php }
}
