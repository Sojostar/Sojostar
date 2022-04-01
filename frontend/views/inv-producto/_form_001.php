

        <div class="ibox">
            <div class="ibox-content  p-md">
    <?= $form->field($model, 'inv_producto_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_np')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_ns')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_unidad')->dropDownList($unidad_venta) ?>

    <?= $form->field($model, 'inv_producto_categoria')->dropDownList($categoria) ?>

    <?= $form->field($model, 'inv_producto_comentario')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'adm_empresa_id')->textInput() ?>
<br>
    <div class="input-group mt-3">
        <div class="custom-file">
            <?= 'juan' /*$form->field($model, 'inv_producto_imagen')->fileInput(['class' => 'custom-file-input', 'type'=>'file'])->label('Your Label',['class'=>'custom-file-label','for'=>'invproducto-inv_producto_imagen']) */ ?>
        </div>
    </div>
    <div class="input-group mt-3">
        <div class="custom-file">
            <?= $form->field($model, 'inv_producto_imagen')->fileInput() ?>
        </div>
    </div>
    <?php 

    ?>
</div>
</div>