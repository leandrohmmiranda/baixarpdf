<?php
require_once 'pdf_consultamargemdeconsignacao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div id="div_campos" class="col-md-12">
        <div class="container col-xs-10 col-sm-8 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-1 col-lg-offset-1">
            <div id="alert" class="mensagem">
                <button class="close"><i class="fa-solid fa-circle-xmark"></i></button>
                <strong>Congratulations!</strong> You successfully tied your shoelace!
            </div>
            <div style="text-align: left;">
                <h2 class=" title"><i class="fa-solid fa-filter-circle-dollar" style="color:#1384AD;"></i> Consulta Margem de Consignação</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-md-6">
                        <div class="panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"> Resumo da Margem: <span>última atualização: 01/05/2023</span></h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4 cards">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <p class="text-center">Margem de:</p>
                                                <div class="text-center vr-fundo">
                                                    <p class="text-center vr-positivo">35%</p>
                                                </div>
                                                <p class="text-center vr-positivo">R$ 3.200,00</p>
                                                <p class="text-center vr-texto">Valor da margem de:</p>
                                                <hr>
                                                <p class="text-center margem-utilizada">Margem utilizada</p>
                                                <ul class="ul-margem">
                                                    <li class="texto-esquerda">Empréstimos: <span class="texto-direita">3.000,00</span></li>
                                                    <li class="texto-esquerda">Mensalidades: <span class="texto-direita">100,00</span></li>
                                                    <li class="texto-esquerda">Convênios: <span class="texto-direita">250,00</span></li>
                                                </ul>
                                                <hr>
                                                <ul class="ul-black-1">
                                                    <li class="texto-esquerda">Total Utilizado<span class="texto-direita">3.350,00</span></li>
                                                </ul>
                                                <p class="text-center" style="font-weight: 700; text-transform: uppercase;">Saldo da Margem</p>
                                                <div class="text-center div-final">
                                                    <p class="vr-negat">-150,00</p>
                                                </div>
                                                <div class="aviso-margem text-center">
                                                    <p style="color: white;">Margem Excedente</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 cards">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <p class="text-center">Margem de:</p>
                                                <div class="text-center vr-fundo">
                                                    <p class="text-center  vr-positivo">5%</p>
                                                </div>
                                                <p class="text-center vr-positivo">R$ 450,00</p>
                                                <p class="text-center vr-texto">Valor da margem de:</p>
                                                <hr>
                                                <p class="text-center margem-utilizada">Margem utilizada</p>
                                                <ul class="ul-margem">
                                                    <li class="texto-esquerda">Cartão de Crédito: <span class="texto-direita">450,00</span></li>
                                                </ul>
                                                <hr>
                                                <ul class="ul-black-1">
                                                    <li class="texto-esquerda">Total Utilizado<span class="texto-direita">450,00</span></li>
                                                </ul>
                                                <p class="text-center saldo-margem">Saldo da Margem</p>
                                                <div class="text-center div-final">
                                                    <p class="vr-texto">0,00</p>
                                                </div>
                                                <div class="text-center"><!-- add essa class quando houver mensagem: aviso-margem -->
                                                    <p style="color: white;">space</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 cards">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <p class="text-center">Margem de:</p>
                                                <div class="text-center vr-fundo">
                                                    <p class="text-center  vr-positivo">10%</p>
                                                </div>
                                                <p class="text-center vr-positivo">R$ 900,00</p>
                                                <p class="text-center vr-texto">Valor da margem de:</p>
                                                <hr>
                                                <p class="text-center margem-utilizada">Margem utilizada</p>
                                                <ul class="ul-margem">
                                                    <li class="texto-esquerda">Cartão Beneficio: <span class="texto-direita">450,00</span></li>
                                                </ul>
                                                <hr>
                                                <ul class="ul-black-1">
                                                    <li class="texto-esquerda">Total Utilizado<span class="texto-direita">450,00</span></li>
                                                </ul>
                                                <p class="text-center saldo-margem">Saldo da Margem</p>
                                                <div class="text-center div-final">
                                                    <p class="vr-ok">300,00</p>
                                                </div>
                                                <div class="aviso-margem text-center">
                                                    <p style="color: white;">Margem limitada devido excedente margem</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <p style="font-size: 13px; font-weight: 500;"><span style="color: red;">Importante:</span> Somente quando determinado pelo regulamento da sua folha de pagamento, o limite do uso da margem pode ser comprometido em função do valor excedente utilizado da margem em outro tipo de consignação, por isso, o salda da margem consultado poderá ser menor.</p>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="button" id="btn-print" class="btn btn-default"><i class="fas fa-download"></i> Baixar PDF</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-primary" style="cursor: pointer;" data-toggle="collapse" href="#collapse1">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa-solid fa-chevron-down" style="margin-right: 5px;"></i>Informações e Avisos Importantes</h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h6 class="sub-aviso">ENTENDA COMO FUNCIONA O QUADRO DO RESUMO DA MARGEM</h6>
                                        <h6 class="sub-aviso">ATUALIZAÇÃO</h6>
                                        <p>Data da última atualização do valor da margem consignável.</p>
                                        <h6 class="sub-aviso">TIPO DE CONSIGNAÇÃO</h6>
                                        <p>Consiste na especificação da consignação com base na característica do contrato/operação realizada.</p>
                                        <h6 class="sub-aviso">MARGEM</h6>
                                        <p>Valor do limite da margem consignável autorizado pelo regulamento. O valor poderá aparecer repetido em razão da existência de uma única margem para vários tipos de consignações.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-group">
                            <div class="panel panel-primary" style="cursor: pointer;" data-toggle="collapse" href="#collapse2">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa-solid fa-chevron-down" style="margin-right: 5px;"></i>Histórico das Margens</h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="table-margem">
                                            <thead>
                                                <caption class="titulo-td">Resumo do Histórico</caption>
                                                <tr class="tr text-center">
                                                    <td class="td-head">Data</td>
                                                    <td class="td-head">Valor da Margem 35%</td>
                                                    <td class="td-head">Valor da Margem 5%</td>
                                                    <td class="td-head">Valor da Margem 10%</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr class="active info">
                                                    <td class="td-body">10/01/2023</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                </tr>
                                                <tr class="dif">
                                                    <td class="td-body">10/01/2023</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                </tr>
                                                <tr class="three">
                                                    <td class="td-body">10/01/2023</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                    <td class="td-body">1.000,00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-primary" style="cursor: pointer;" data-toggle="collapse" href="#collapse3">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa-solid fa-chevron-down" style="margin-right: 5px;"></i>Resumo das Consignações</h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table" id="table-margem">
                                                <thead>
                                                    <caption class="titulo-td">Consignações da Margem de 35%</caption>
                                                    <tr class="tr">
                                                        <td class="td-head">Solicitação</td>
                                                        <td class="td-head">Data</td>
                                                        <td class="td-head">Consignação</td>
                                                        <td class="td-head">Consignatária</td>
                                                        <td class="td-head">Margem Reservada</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="active info">
                                                        <td class="td-body cursor">104530</td>
                                                        <td class="td-body">09/05/2023</td>
                                                        <td class="td-body">Empréstimo</td>
                                                        <td class="td-body">Bradesco</td>
                                                        <td class="td-body">1.000,00</td>
                                                    </tr>
                                                    <tr class="dif">
                                                        <td class="td-body cursor">104526</td>
                                                        <td class="td-body">09/05/2023</td>
                                                        <td class="td-body">Mensalidade</td>
                                                        <td class="td-body">Unimed</td>
                                                        <td class="td-body">1.000,00</td>
                                                    </tr>
                                                    <tr class="three">
                                                        <td class="td-body cursor">104526</td>
                                                        <td class="td-body">09/05/2023</td>
                                                        <td class="td-body">Convênios Diversos</td>
                                                        <td class="td-body">Daycoval</td>
                                                        <td class="td-body">1.000,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="table-margem">
                                                <thead>
                                                    <caption class="titulo-td">Consignações da Margem de 5%</caption>
                                                    <tr class="tr">
                                                        <td class="td-head">Solicitação</td>
                                                        <td class="td-head">Data</td>
                                                        <td class="td-head">Consignação</td>
                                                        <td class="td-head">Consignatária</td>
                                                        <td class="td-head">Margem Reservada</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="active info">
                                                        <td class="td-body cursor">104330</td>
                                                        <td class="td-body">09/05/2023</td>
                                                        <td class="td-body">Cartão de Crédito</td>
                                                        <td class="td-body">Banco Master</td>
                                                        <td class="td-body">1.000,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="table-margem">
                                                <caption class="titulo-td">Consignações da Margem de 10%</caption>
                                                <tr class="tr">
                                                    <td class="td-head">Solicitação</td>
                                                    <td class="td-head">Data</td>
                                                    <td class="td-head">Consignação</td>
                                                    <td class="td-head">Consignatária</td>
                                                    <td class="td-head">Margem Reservada</td>
                                                </tr>
                                                <tbody>
                                                    <tr class="active info">
                                                        <td class="td-body">102530</td>
                                                        <td class="td-body">09/05/2023</td>
                                                        <td class="td-body">Cartão Beneficio</td>
                                                        <td class="td-body">Credcesta</td>
                                                        <td class="td-body">1.000,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fim div_campos -->
    <div class="clearfix"></div>
    <link rel="stylesheet" href="css/layout.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://kit.fontawesome.com/b7a90d0458.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // mensagem
            $('#alert .close').click(() => $('#alert').hide());
            $('#btn-print').click(() => $('.mensagem').show());
            // pdf
            document.getElementById('btn-print').addEventListener('click', function() {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', window.location.href);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.responseType = 'blob';
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var blob = new Blob([xhr.response], {
                            type: 'application/pdf'
                        });
                        var fileName = 'Consulta de Margem de Consignação ' + new Date().toISOString().split('T')[0] + '.pdf';
                        var link = document.createElement('a');
                        link.href = URL.createObjectURL(blob);
                        link.download = fileName;
                        link.click();
                    }
                };
                xhr.send('div_campos=' + encodeURIComponent(document.getElementById('div_campos').innerHTML));
            });
        });
    </script>

</body>

</html>