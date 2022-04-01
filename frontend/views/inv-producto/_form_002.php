

        <div class="ibox">
            <div class="ibox-content  p-md">

    <?= $form->field($model, 'inv_producto_impuesto_valor')->dropDownList($valor_impuesto) ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'inv_producto_costo')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'inv_producto_costo_moneda')->dropDownList($moneda,['options' => [
             2 => ['selected' => 'selected']]]) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'inv_producto_precio')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'inv_producto_precio_moneda')->dropDownList($moneda) ?>
        </div>
    </div>
</div>
</div>