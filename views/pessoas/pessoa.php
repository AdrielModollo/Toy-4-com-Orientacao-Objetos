<html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
        <table class="table">  
            

            <table class="table">
               
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                </tr>

                <tr>
                <?php foreach($pessoas as $pessoa) : ?>
                    <td><?=$pessoa["Codigo"] ?></td>
                    <td><?=$pessoa["Nome"] ?></td>
                    <td> <form method="POST" action="alterar/<?=  $pessoa["Codigo"]; ?>">
                    <input type="hidden" name="pessoas_codigo" value="<?= $pessoa["Codigo"]; ?>">
                    <input class="btn btn-primary" type="submit" value="Alterar pessoa">
                    </form>
                </tr>
            </tr>
           
            <?php endforeach ?>
            </table>
            
            <h1>Cadastro de Pessoas</h1>
            <?php
                echo form_open("pessoas/cadastroPessoa");

                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
                ?>
        
        <div>
    </body>
</html>