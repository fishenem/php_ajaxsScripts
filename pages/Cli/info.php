<?php
session_start();
include('../../backend/verificar_login.php');
include('../../backend/conexao.php');
$nome = $_SESSION['usuario'];
$sql = "SELECT * FROM clientes where nome = '$nome'";
$query = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($query);
?>

<section class="panel col-lg-9">

    <header class="panel-heading">
        Seus dados:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> CPF</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i>Telefone</th>
                <th><i class="icon_mail_alt"></i>Emal</th>
            </tr>
            <?php
            while($linha = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['cpf'];?></td>
                <td><?=$linha['nome'];?></td>
                <td><?=$linha['telefone'];?></td>
                <td><?=$linha['email'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>
