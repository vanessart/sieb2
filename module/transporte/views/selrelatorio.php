<?php
if (!defined('ABSPATH'))
    exit;

$id_inst = filter_input(INPUT_POST, 'id_inst', FILTER_SANITIZE_NUMBER_INT);

$a = dataErp::meses();
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
if (empty($mes)) {
    $mes = date("m");
}

if (user::session('id_nivel') == 10) {
    $relatorio = 'Gerente';
} else {
    $id_inst = toolErp::id_inst();
    $relatorio = 'Escola';
}
?>
<div class="body">
<div class="row form-control-plaintext">
    <div class="col-sm-12">
        <div class="fieldTop">
            Lista Escola
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-5">
        <?php
        if (user::session('id_nivel') == 10) {
            echo formErp::select('id_inst', escolas::idInst(), 'Escola', $id_inst, 1);
        } else {
            ?>
            <input type="hidden" name="id_inst" value="<?php echo $id_inst ?>" />
            <?php
        }
        ?>
    </div>
    <div class="col-sm-3">
        <?php echo formErp::select('mes', $a, 'Selecionar Mês', @$mes, 1, ['id_inst' => $id_inst]) ?>
    </div>
    <div class="col-sm-3">
        <br /><br />
    </div>
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-8">
            <div style="overflow: auto; height: 250px">
                <div style="font-weight:bold; font-size:12pt; text-align: center;padding: 10px; margin-top: 10px;">
                    Selecionar Linha
                </div>

                <?php
                $linha = $model->pegalinharel($id_inst);

                foreach ($linha as $k => $v) {
                    $linha[$k]['s'] = formulario::checkboxSimples('sel[]', $v['id_li'], NULL, NULL, 'id="' . $v['id_li'] . '"');
                }

                $form['array'] = $linha;
                $form['fields'] = [
                    'Código Linha' => 'id_li',
                    'Nome Linha' => 'n_li',
                    '<label for="chkAll" style="cursor:pointer">todos <input type="checkbox" name="chkAll" id="chkAll" onClick="checkAll(this)" style="cursor:pointer" /><label>' => 's'
                ];
                toolErp::relatSimples($form);
                ?>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="text-center" style="padding: 20px">
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/listaalunopdf" id="lista" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="la<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <button name="lista" value="Lista Alunos" onclick="listaaluno('lista')" onmouseover="la()" style="width: 80%;padding: 5px;" type="button" class="art-button" id="btnla">
                        Lista de Alunos
                    </button>
                </form> 
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/alunoPlan" id="ex" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="excel<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>  
                    <input type="hidden" name="id_inst" value="<?= $id_inst ?>" />
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <button name="lista" value="Lista Alunos" onclick="listaaluno('ex')" onmouseover="excel()" style="width: 80%;padding: 5px;" type="button" class="art-button" id="btnla">
                        Lista de Aluno em Excel
                    </button>
                </form> 
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/movimentacaoalunopdf" id="movi" method="POST">
                    <?php
                    if (!empty($mes)) {
                        ?>
                        <input type="hidden" name="mes" value="<?php echo $mes ?>" />
                        <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                        <button name="movi" value="Movimentação" onclick="listaaluno('movi')" style="width: 80%;padding: 5px;" type="button" class="art-button" id="btnmo">
                            Movimentação Exclusão/Inclusão
                        </button>
                        <?php
                    }
                    ?>
                </form> 
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/transpexcluido" id="ex" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="excel<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>  
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <button name="lista"  style="width: 80%;padding: 5px;" type="submit" class="art-button" id="btnla">
                        Movimentação Exclusão em Excel
                    </button>
                </form> 
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/transpincluido" id="ex" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="excel<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>  
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <button name="lista"  style="width: 80%;padding: 5px;" type="submit" class="art-button" id="btnla">
                        Movimentação Inclusão em Excel
                    </button>
                </form> 
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/frequenciapdf" id="controle" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="co<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <button name="controle" value="Controle Freq" onclick="listaaluno('controle')" onmouseover="co()" style="width: 80%;padding: 5px;" type="button" class="art-button" id="btnco">
                        Controle de Frequência
                    </button>
                </form>
                <br />
                <form target="_blank" action="<?php echo HOME_URI ?>/transporte/frequenciapdfbranco" id="controleb" method="POST">
                    <?php
                    foreach ($linha as $k => $v) {
                        ?>
                        <input id="cb<?php echo @$v['id_li'] ?>" type="hidden" name="sel[]" value="" />
                        <?php
                    }
                    ?>
                    <input type="hidden" name="mes" value="<?php echo @$mes ?>" />
                    <input type="hidden" name="idinst" value="<?php echo $id_inst ?>" />
                    <input type="hidden" name="relatorio" value="<?php echo $relatorio ?>" />
                    <button name="controleb" value="Controle Freq" onclick="listaaluno('controleb')" onmouseover="cb()" style="width: 80%;padding: 5px;" type="button" class="art-button" id="btncb">
                        Controle de Frequência em Branco
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>

    function listaaluno(formulario) {
        document.getElementById(formulario).submit();
    }

    function checkAll(o) {
        var boxes = document.getElementsByTagName("input");
        for (var x = 0; x < boxes.length; x++) {
            var obj = boxes[x];
            if (obj.type == "checkbox") {
                if (obj.name != "chkAll")
                    obj.checked = o.checked;
            }
        }
    }

<?php
$funcao = ['la', 'mo', 'co', 'excel', 'cb'];
foreach ($funcao as $f) {
    ?>
        function <?php echo $f ?>() {
    <?php
    foreach ($linha as $k => $v) {
        ?>
                if (document.getElementById("<?php echo $v['id_li'] ?>").checked) {
                    document.getElementById("<?php echo $f . $v['id_li'] ?>").value = '<?php echo $v['id_li'] ?>';
                } else {
                    document.getElementById("<?php echo $f . $v['id_li'] ?>").value = '';
                }
        <?php
    }
    ?>
        }
    <?php
}
?>
</script>