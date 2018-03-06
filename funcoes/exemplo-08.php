<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // inicio diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    // Termino Gerente de Vendas
                )
            ),
            // Termino Diretor Comercial
            // Inicio Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Inicio Gerente contas a pagar
                    array(
                        'nome_cargo' => 'Gerente Contas a Pagar',
                        'subordinados' => array(
                            // Inicio supervisor de Pagamento
                            'nome_cargo' => 'Supervidor de Pagamento'
                        )
                    ),
                    // Termino Gerente contas a pgar
                    // Inicio Gerente Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            // Inicio Supervidor Suprimentos
                            array(
                                'nome_cargo' => 'Supervidor de Suprimentos'
                            )
                        )
                    )
                    // Termino Gerente de Compras
                )
            )
            // Termino Diretor Financeiro
        )
    )
);

function exibe($cargos) {

    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
            }
        $html .= "</li>";
    }
    $html .= "</ul>";

    return $html;

};

echo exibe($hierarquia);
