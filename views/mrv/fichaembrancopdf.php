<?php
ob_start();
$escola = new escola(@$_POST['id_inst']);
$cor = '#F5F5F5';
?>
<head>
    <style>

        .topo{
            font-size: 10pt;
            font-weight:bolder;
            border-style: solid;
            text-align: justify;
            padding: 5px;
            border: 1;
        }
        .topo2{
            font-size: 10pt;
            font-weight:bolder;
            text-align: center;
            border-style: solid;
            padding: 2px;

        }
        .topo3{
            font-size: 8pt;
            font-weight:bolder;
            text-align: left;
            border-style: solid;
            padding: 2px;
            border: 1;
        }
    </style>
</head>
<div>
    <table class="table tabs-stacked table-bordered">;
        <tr>
            <td colspan="6" class="topo2">
                <br />
                FORMULÁRIO DE INSCRIÇÃO
                <br /><br />
                SISTEMA DE RESERVA DE VAGA <?php echo date('Y') ?> - ESCOLAS TÉCNICAS
            </td>
        <br /><br />
        </tr>
        <tr>
            <td class="topo2" style="width: 10%">
                CH
            </td>
            <td class="topo2" style="width: 10%">
                RSE
            </td><td class="topo2" style="width: 10%">
                RA
            </td>       
            <td class="topo2" style="width: 15%">
                Data Nasc.
            </td>
            <td class="topo2" style="width: 10%">
                9º Ano
            </td>
            <td class="topo2" style="width: 45%">
                Nome do Aluno
            </td>    
        </tr>
        <tr>
            <td class="topo2" style="height: 20px"></td>
            <td class="topo2" style="height: 20px"></td>    
            <td class="topo2" style="height: 20px"></td>
            <td class="topo2" style="height: 20px"></td>
            <td class="topo2" style="height: 20px"></td>
            <td class="topo2" style="height: 20px"></td>
        </tr>
        <tr>
            <td colspan="6" class="topo">
                <br /><br />
                Eu,____________________________________________________________________________________________________________
                <br />
                portador do RG nº.: ________________________, responsável pelo aluno-candidato acima identificado, solicito a
                <br />
                inscrição do mesmo no Sistema de Reservas de Vagas/ITB/2022.
                <br /><br />
                Para  tanto,  declaro  residir  no  Município de Barueri, conforme  documentação anexa, e que, o  aluno-candidato estuda na Rede Municipal de Ensino de Barueri.
                <br /><br />
                Em conformidade com a Portaria nº 282/2022 de 03 de agosto de 2022.
                <br /><br/>
                OBS: Estou ciente que a falsidade na declaração dos documentos de residência  poderá  acarretar a desclassificação do aluno de acordo com a Lei Municipal 1635/07.
                <br /><br /><br/>
            </td>
        </tr>
        <tr>
            <td colspan="6" class="topo">
                <b>Data limite da Ficha de Inscrição com documentação: 31/08/2022.</b>
                <br />
                *Não receberemos inscrições e documentações após a data acima.
                <br />
            </td>
        </tr>
    </table>
</div>
<div>
    <table style="width: 100%">
        <tr>
            <td colspan="4" class="topo" style="width: 100%">
                RESPONSÁVEL LEGAL PELO ALUNO
            </td>
        </tr>  
        <tr>
            <td colspan="3" class="topo" style="width: 70%">
                Nome:
            </td>
            <td rowspan="6" class="topo" style="width: 30%">

            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style= "width: 70%">
                Endereço:
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style= "width: 70%">
                Telefone:
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style= "width: 70%">
                E-mail que a FIEB utilizará para informar o candidato.
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style= "width: 70%">
                E-mail:
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style= "width: 70%">
                Assinatura:
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo" style="width: 70%">
                Barueri, ___ de _______________ de 2022.
            </td>
            <td class="topo" style="width: 30%">
                Carimbo da U.E. e Data
            </td>
        </tr>
    </table>
</div>
<div style="page-break-after: always"></div>
<br /><br />
<!--
<div>
    <table style="width: 100%">
        <tr>
            <td colspan="3" style="font-weight:bold; font-size:10pt; background-color: #000000; color:#ffffff; text-align: center">
                PARA USO EXCLUSIVO DA UNIDADE ESCOLAR
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo">
                Comprovante de Residência
                <br /><br />
                (    ) Morador de Barueri há mais de 4 anos
                <br />
                (    ) Morador de Barueri menos de 4 anos
                <br />
                (    ) Não é morador de Barueri
                <br />
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo">
                Estudou do 6° ao 9º ano na Rede Municipal
                <br /><br />
                (    ) Sim       
                <br />
                (    ) Não
                <br />
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo">
                Média igual ou superior a 6,5
                <br /><br />
                (    ) Sim
                <br />
                (    ) Não
                <br />
            </td>
        </tr>
        <tr>
            <td colspan="3" class="topo3" style="text-align: center">
                <br />
                Secretaria de Educação
                <br />
                Rua C.PM José Maria Schiavelli, 125 - Jd. dos Camargos - Barueri - SP - CEP: 06410-335 - Fone/PABX (11) 4199-2900
                <br />
                E-mail: edu.gabinete@barueri.sp.gov.br
                <br />
                educacao.barueri.sp.gov.br
            </td>
        </tr>
    </table>
</div>
-->
<?php
tool::pdfescola('P', @$_POST['id_inst']);
?>