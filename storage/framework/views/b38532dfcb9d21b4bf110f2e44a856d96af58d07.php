<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Notícias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php if(session()->has('mensagem')): ?>
        <div class="alert alert-sucess">
            <?php echo e(session()->get('mensagem')); ?>

        </div>
    <?php endif; ?>

    <div class="container pt-5">
        <a href="/noticias/create" class="btn btn-primary"> Nova Notícia </a>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Ações</th>
            <th scope="col">Titulo</th>
            <th scope="col">Status</th>
            <th scope="col">Data Publicação</th>
            <th scope="col">Imagem</th>

            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="/noticias/<?php echo e($noticia->id); ?>/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/noticias/<?php echo e($noticia->id); ?>" class="d-inline-block" method="POST" onsubmit="confirmarExclusao(event)">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td><?php echo e($noticia->titulo); ?></td>
                        <td><?php echo e($noticia->status); ?></td>
                        <td><?php echo e($noticia->data_publicacao); ?></td>
                        <td><img src="<?php echo e($noticia->imagem); ?>" height="40px"></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>


   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<!-- <?php
    use Illuminate\Support\Carbon;

    $saoPaulo = Carbon::now(new DateTimeZone('America/Sao_Paulo'));
    print('São Paulo - ' . $saoPaulo); echo '<br/>';
    $d = Carbon::now();
    print($d->toTimeString());

    
$input  = '21/05/2022';
$format = 'd/m/Y';

$date = Carbon::createFromFormat($format, $input)->format('Y-m-d');
print($date); echo '<br/>';


    

?> -->




</body>
</html>        



<?php /**PATH /home/ifpk_117/projetos/noticias/resources/views/noticias/index.blade.php ENDPATH**/ ?>