<?php
ob_start();
$cor = '#F5F5F5';
?>

<head>
    <style>
        td{
            font-weight:bolder;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 1px;
            padding-bottom: 1px;
        }
        .topo{
            font-size: 8pt;
            font-weight:bolder;
            text-align: center;
            border-style: solid;
            border-width: 0.5px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 1px;
            padding-bottom: 1px;
        }
        .topo2{
            font-size: 8pt;
            font-weight:bold;
            text-align: center;
            border-style: solid;
            border-width: 0.5px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 1px;
            padding-bottom: 1px;
            background-color: #000000; 
            color: #ffffff;

        }
    </style>
</head>

<?php
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
$idinst = filter_input(INPUT_POST, 'idinst', FILTER_SANITIZE_STRING);
$id_li = filter_input(INPUT_POST, 'idlinha', FILTER_SANITIZE_NUMBER_INT);

$m = data::meses();
$status = [1 => 'Freq.', 6 => 'Encerrado'];

$escola = $model->pegaescola();
$cab = $model->cabecalhorelatorio($id_li);
$dados = transporte::LinhaAlunosAdaptado($id_li, $idinst);

if (!empty($cab)) {
    if (!empty($dados)) {
        if (!empty($proximaFolha)) {
            ?>
            <div style="page-break-after: always"></div>
            <?php
        } else {
            $proximaFolha = 1;
        }
        ?>

        <table style="font-weight:bold; font-size:8pt; text-align: center; width: 100%">
            <?php
            foreach ($cab as $v) {
                ?>
                <thead>
                    <tr>
                        <td colspan="7" style="font-weight:bold; font-size:10pt; background-color: #000000; color:#ffffff; text-align: center">
                            Lista de Alunos <?php echo $m[$mes] . '/' . date('Y') ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="topo" style="text-align:left; color: red; background-color: beige">
                            <?php echo $escola[$idinst] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="topo" style="width: 10%">
                            Empresa
                        </td>
                        <td class="topo" style="width: 40%">
                            Linha
                        </td>
                        <td class="topo" style="width: 10%">
                            Acessibilidade
                        </td>
                        <td class="topo" style="width: 10%">
                            Capacidade
                        </td>
                        <td class="topo" style="width: 10%">
                            Período
                        </td>
                        <td class="topo" style="width: 10%">
                            Nº Veículo
                        </td>
                        <td class="topo" style="width: 10%">
                            Telefone
                        </td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="topo" style="width: 20%">
                            <?php echo $v['n_em'] ?>
                        </td>
                        <td class="topo" style="width: 20%">
                            <?php echo $v['n_li'] ?>
                        </td>
                        <td class="topo" style="width: 15%">
                            <?php echo $v['acessibilidade'] ?>
                        </td>
                        <td class="topo" style="width: 15%">
                            <?php echo $v['capacidade'] ?>
                        </td>
                        <td class="topo" style="width: 10%">
                            <?php echo $v['periodo'] ?>
                        </td>
                        <td class="topo" style="width: 10%">
                            <?php echo $v['n_tv'] ?>
                        </td>
                        <td class="topo" style="width: 10%">
                            <?php echo $v['tel1'] ?>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
        <table style="font-weight:bold; font-size:8pt; text-align: center; width: 100%">
            <thead>
                <tr>
                    <td class="topo" style="width: 52%">
                        Nome Motorista
                    </td>
                    <td class="topo" style="width: 48%">
                        Nome Monitor
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="topo" style="width: 50%">
                        <?php echo $v['motorista'] ?>
                    </td>
                    <td class="topo" style="width: 50%">
                        <?php echo $v['monitor'] ?>
                    </td>
                </tr>
            </tbody>
        </table>  
        <div>
            <table style="font-weight:bold; font-size:8pt; text-align: center; width: 100%">
                <thead>
                    <tr>
                        <td class="topo2">
                            Seq.
                        </td>
                        <td class="topo2">
                            RA
                        </td>
                        <td class="topo2">
                            Nome Aluno
                        </td>
                        <td class="topo2">
                            Cód.Classe
                        </td>
                        <td class="topo2">
                            Data Nasc.
                        </td>
                        <td class="topo2">
                            Status
                        </td>
                    </tr>
                </thead>
                <?php
                $seq = 1;
                foreach ($dados as $d) {
                    ?>
                    <tbody>
                        <tr>
                            <td class="topo" style="background-color: <?php echo $cor ?>">
                                <?php echo $seq++ ?>
                            </td>
                            <td class="topo" style="background-color: <?php echo $cor ?>">
                                <?php echo $d['ra'] . "-" . $d['ra_dig'] ?>
                            </td>
                            <td class="topo" style="text-align:left; background-color: <?php echo $cor ?>">
                                <?php echo addslashes($d['n_pessoa']) ?>
                            </td>
                            <td class="topo" style="background-color: <?php echo $cor ?>">
                                <?php echo $d['codigo'] ?>
                            </td>
                            <td class="topo" style="background-color: <?php echo $cor ?>">
                                <?php echo data::converteBr($d['dt_nasc']) ?>
                            </td>
                            <td class="topo" style="background-color: <?php echo $cor ?>">
                                <?php
                                echo $status[$d['fk_id_sa']];
                                $cor = ($cor == '#F5F5F5') ? $cor = '#FAFAFA' : $cor = '#F5F5F5';
                                ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
    } else {
        echo "Não existe dados para relatório";
    }
} else {
    echo "Não existe dados para relatório";
}

tool::pdfsecretaria2('P');
?>