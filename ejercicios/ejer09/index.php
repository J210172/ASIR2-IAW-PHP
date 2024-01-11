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
                    class="btn close"
                    type="button"
                >x</button>
            </div>
            <div class="body"></div>
        </div>
    </template>
    <template id="modal-2">
        <div class="modal-2">
            <div class="header">
                <div class="title"><b>{{title}}</b></div>
                <button
                    class="btn close"
                    type="button"
                ></button>
            </div>
            <div class="body"></div>
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
        <form method="DELETE">        
            <div class="input-set">
                <button class="btn secondary">Cancelar</button>
                <input class="btn danger" type="submit" value="Delete">
            </div>
        </form>
    </template>
    <template id="user-row">
        <tr>
            <td>{{id}}</td>
            <td>{{name}}</td>
            <td>{{alb_num}}</td>
            <td class="{{bool-class}}">{{is_aragones}}</td>
            <td>
                <ul class="flex x-center">
                    <li><button class="btn icon-only inline artist-edit-form"><i class="icon md primary nf-fa-edit"></i></button></li>
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
        // TODO: Extract this to his own class 
        class Modal {
            #title;
            #body;
            #modal;

            constructor(title, body) {
                this.#title = title;
                this.#body = body;
            }
            
            set title(title) {
                this.#title = title; 
            }

            get title() {
                return this.#title;
            }
            
            set body(body) {
                this.#body = body; 
            }

            get body() {
                return this.#body;
            }

            get modal() {
                return this.#modal;
            }

            get template() {
                return $('template#modal-2').html();
            }

            #build_modal() {
                let html_modal = '<div class="backdrop">' + this.template + '</div>';
                html_modal = html_modal.replace('{{title}}', this.#title);
                let modal = jQuery(html_modal);
                
                modal.find('.body').append(this.#body);
                modal.find('.close').on('click', this.close_modal);

                this.#modal = modal;
                
            }

            open_modal() {
                this.#build_modal();
                $('.body').prepend(this.#modal);
            }

            close_modal() {
                console.log("CECEECECRRARRAR");
                this.#modal.remove();
            }
            
        }
        
        let artistas = [
            {
                id: 65,
                name: "Pepe",
                alb_num: 3,
                is_aragones: false
            },
            {
                id: 69,
                name: "SUPER",
                alb_num: 69,
                is_aragones: true
            },
        ]

        function add_row(id, name, alb_num, is_aragones) {
            let tmp_row = $('template#user-row').html();
            
            tmp_row=tmp_row.replace('{{id}}', id);
            tmp_row=tmp_row.replace('{{name}}', name);
            tmp_row=tmp_row.replace('{{alb_num}}', alb_num);
            
            if (is_aragones) {
                tmp_row=tmp_row.replace('{{is_aragones}}', 'Si');
                tmp_row=tmp_row.replace('{{bool-class}}', 'bien');
            } else {
                tmp_row=tmp_row.replace('{{is_aragones}}', 'no');
                tmp_row=tmp_row.replace('{{bool-class}}', 'mal');
            }

            let row = jQuery(tmp_row);
            row.find('.artist-delete-form').on('click', function() {
                let modal_body = $('template#artist-deletion').clone();
                let modal = new Modal('Edit', modal_body)
                modal.open_modal();
            });

            row.find('.artist-edit-form').on('click', function() {
                let modal_body = $('template#artist-form').clone()
                let modal = new Modal('delete', modal_body)
                modal.open_modal();
            });

            return row;
        }

        function build_table() {            
            let table = $('table#users-table tbody');
            artistas.forEach(artista => {
                table.append(add_row(artista.id, artista.name, artista.alb_num, artista.is_aragones));
            });
        }
        
        $('#refresh-table').on('click', function() {
            build_table();
        });
        $(function() {
            build_table();
        });


        /*
        $(function() {
            let modal_body = $('template#artist-form').html();
            open_modal('Test', modal_body);     
        })*/
    </script>
</body>
</html>