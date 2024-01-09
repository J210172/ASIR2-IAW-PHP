<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/nf-fonts.min.css">
    <script src="/assets/js/jquery.min.js"></script>
</head>
<body>
    <template id="modal-1">
        <div class="modal-1">
            <div class="header">
                <div class="title"><b>{{title}}</b></div>
                <button
                    onclick="this.parentElement.parentElement.remove; this.parentElement.parentElement.parentElement.remove()"
                    class="btn close"
                    type="button"
                >x</button>
            </div>
            <div class="body">
                {{body}}
            </div>
        </div>
    </template>
    <template id="modal-2">
        <div class="modal-2">
            <div class="header">
                <div class="title"><b>{{title}}</b></div>
                <button
                    onclick="this.parentElement.parentElement.remove; this.parentElement.parentElement.parentElement.remove()"
                    class="btn close"
                    type="button"
                ></button>
            </div>
            <div class="body">
                {{body}}
            </div>
        </div>
    </template>
    <template id="login-form">
        <form action="#" method="get">
            <div class="input-set">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-set">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-set">
                <input type="submit"><input type="reset">
            </div>
        </form>
    </template>
    <template id="artist-form">
        <form action="" method="get">
            <div class="input-set">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-set">
                <label for="description">Description</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="input-set">
                <label for="alb_num">Number of albums</label>
                <input type="number" name="alb_num" id="alb_num">
            </div>
            <div class="input-set">
                <label>
                    Is spanish
                    <input type="checkbox" name="spanish" id="spanish">
                </label>
            </div>
            <div class="input-set">
                <input type="submit" value="Save"><input type="reset">
            </div>
        </form>
    </template>
    <template id="artist-details">
    </template>
    <template id="artist-deletion">
    </template>
    <template id="user-row">
        <tr>
            <td>{{id}}</td>
            <td>{{name}}</td>
            <td>{{alb_num}}</td>
            <td class="{{bool-class}}">{{is_aragones}}</td>
            <td>
                <ul class="flex x-center">
                    <li><button class="btn icon-only inline open-edit-form"><i class="icon md primary nf-fa-edit"></i></button></li>
                    <li><button class="btn icon-only inline"><i class="icon md danger nf-fa-trash_o"></i></button></li>
                </ul>
            </td>
        </tr>
    </template>
    
    <header class="flex space-evenly">
        <h1>Modal page</h1>
        <ul class="flex center">
            <button id="add-row" class="p-0 btn circle"><i class="icon lg success nf-fa-plus"></i></button>
            <button id="refresh-table" class="p-0 btn circle"><i class="icon lg primary nf-fa-refresh"></i></button>
            <button id="user" class="btn circle"><i class="icon lg secondary nf-fa-user"></i></button>
        </ul>
    </header>
    <div class="container">
        <div class="box">
            <table id="users-table" class="w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Numb Albs</th>
                        <th>Aragones</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="w-100 mt-auto">
        <p>made by yo</p>
    </footer>
    <script>
        function open_modal(title, body) {
            let modal = $('template#modal-2').html();
            modal = '<div class="backdrop">' + modal + '</div>';
            modal = modal.replace('{{title}}', title);
            modal = modal.replace('{{body}}', body);
            $('body').prepend(modal);
        }

        $('.open-edit-form').on('click', function() {
           let modal_body = $('template#artist-form').html();
           open_modal('Edit', modal_body);
        });

        $('#refresh-table').on('click', function() {
            let table = $('table#users-table tbody');
            let tmp_row = $('template#user-row').html();

            tmp_row=tmp_row.replace('{{id}}', '69');
            tmp_row=tmp_row.replace('{{name}}', 'HoHoHooo!!');
            tmp_row=tmp_row.replace('{{alb_num}}', '3');
            tmp_row=tmp_row.replace('{{is_aragones}}', 'Si');
            tmp_row=tmp_row.replace('{{bool-class}}', 'bien');

            table.append(tmp_row);
        });
        /*
        $(function() {
            let modal_body = $('template#artist-form').html();
            open_modal('Test', modal_body);     
        })*/
    </script>
</body>
</html>