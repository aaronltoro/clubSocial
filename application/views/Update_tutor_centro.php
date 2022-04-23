<div>

    <?php $tutor_centro = $this->tutor_centro; ?>

    <form id="modify_tutor_centro">
        <div class="row item item_mod">
            <div class="col-sm-8 offset-2 mt-3 wrapper">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="<?php echo $tutor_centro[0]['nombre'] ?>">
            </div>
        </div>
        <div class="row item item_mod">
            <div class="col-sm-8 offset-2 mt-3 wrapper">
                <label for="telefono">Tlf</label>
                <input class="form-control" type="text" name="telefono" value="<?php echo $tutor_centro[0]['telefono'] ?>">
            </div>
        </div>
        <div class="row item item_mod">
            <div class="col-sm-8 offset-2 mt-3 wrapper">
                <label for="correo">E-Mail</label>
                <input class="form-control" type="email" name="correo" value="<?php echo $tutor_centro[0]['correo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 offset-5 mt-3 mb-3 d-flex justify-content-center">
                <button class="btn btn-warning btn_add" type="button" onclick="modify_tutor_centro(<?php echo $tutor_centro[0]['id'] ?>)">Modificar</button>
            </div>
        </div>
    </form>
</div>

<script>
    //Script para los label de los inputs
    $(document).ready(function() {
        $('input').each(function() {
            $(this).on('focus', function() {
                $(this).parent('.wrapper').addClass('active');
            });
            $(this).on('blur', function() {
                if ($(this).val().length === 0) {
                    $(this).parent('.wrapper').removeClass('active');
                }
            });
            if ($(this).val() !== '') $(this).parent('.wrapper').addClass('active');
        });
    });
</script>