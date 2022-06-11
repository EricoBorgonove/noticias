

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => ['title' => 'Formulário de Noticias']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Formulário de Noticias']); ?>
    <div class="container pt-5">
            <?php if(session()->has('mensagem')): ?>
                <div class="alert alert-sucess">
                    <?php echo e(session()->get('mensagem')); ?>

                </div>
            <?php endif; ?>

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
                        <td><?php echo e($noticia->status_formatado); ?></td>
                        <td><?php echo e(optional($noticia->data_publicacao)->format("d/m/Y")); ?></td>
                        <td><img src="<?php echo e($noticia->imagem); ?>" height="40px"></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        <?php echo e($noticias->links()); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>        



<?php /**PATH /home/ifpk_119/Documentos/Projetos/noticias/resources/views/noticias/index.blade.php ENDPATH**/ ?>