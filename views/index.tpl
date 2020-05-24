{extends file = "layouts/app.tpl"}

{block name="content"}
        <h1>{php}echo config("app.name");{/php}</h1>

        <div class="card card-body">
                <form method="post" action="/todos/store">
                        <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Новая задача...">
                        </div>
                        <button class="btn btn-success">Создать</button>
                </form>
        </div>
        {include file="todo_list.tpl"}
{/block}