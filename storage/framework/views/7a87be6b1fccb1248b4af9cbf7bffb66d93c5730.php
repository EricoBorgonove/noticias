
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => ['title' => 'Formulário de Noticias Inativas']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Formulário de Noticias Inativas']); ?>


    <div class="container pt-5">
        <?php if(session()->has('mensagem')): ?>
            <div class="alert alert-sucess">
                <?php echo e(session()->get('mensagem')); ?>

            </div>
        <?php endif; ?>

        <a href="/noticias/create" class="btn btn-primary"> Nova Notícia </a>
        <a href="/noticias/" class="btn btn-primary"> Ativos </a>
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
                        <td><?php echo e($noticia->status_formatado); ?></td>
                        <td><?php echo e(optional($noticia->data_publicacao)->format("d/m/Y")); ?></td>
                        <td><img src="<?php echo e($noticia->imagem); ?>" height="40px"></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        
        <?php echo e($noticias->links()); ?>

    </div>

    <p>testte</p>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>        



<?php /**PATH /home/ifpk_119/Documentos/Projetos/noticias/resources/views/noticias/indexinativo.blade.php ENDPATH**/ ?>