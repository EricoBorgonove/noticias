<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => ['title' => 'Edição de Noticia']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Edição de Noticia']); ?>

<div class="container pt-5">
            <?php if(session()->has('mensagem')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('mensagem')); ?>

            </div>
        <?php endif; ?>
        <form action="/noticias/<?php echo e($noticia->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control" value= "<?php echo e($noticia->titulo); ?>" >
            </div>
            
            <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5" ><?php echo e($noticia->conteudo); ?></textarea>
            </div>

            <div class="form-group">
                    <label for="imagem">Imagem Destaque</label>
                    <input type="file" name="imagem" />
                    <?php if($noticia->imagem): ?>
                        <img src=" <?php echo e($noticia-> imagem); ?>" alt="" height="100px" class="d-block">
                    <?php endif; ?>
            </div>    

            <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="A" <?php echo e($noticia->status=="A" ? "selected='selected'":""); ?>>Ativo</option>
                        <option value="I" <?php echo e($noticia->status=="I" ? "selected='selected'":""); ?>>Inativo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data_publicacao">Data da Publicação</label>
                    <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="<?php echo e(optional($noticia->data_publicacao)->format("d/m/Y")); ?>">

                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="\noticias" class="btn btn-info">Voltar</a>

            </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>        <?php /**PATH /home/ifpk_119/Documentos/Projetos/noticias/resources/views/noticias/edit.blade.php ENDPATH**/ ?>