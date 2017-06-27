<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();



        DB::table('pedidos')->insert(['type' => 'AÇÃO DECLARATÓRIA DE NULIDADE DE GREVE']);
        DB::table('pedidos')->insert(['type' => 'AÇÃO REGRESSIVA']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL DE INSALUBRIDADE']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL DE PENOSIDADE']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL DE PERICULOSIDADE']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL DE TRANSFERÊNCIA']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL NOTURNO']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL NOTURNO SOBRE AS HORAS TRABALHADAS APÓS AS 05H00']);
        DB::table('pedidos')->insert(['type' => 'ADICIONAL POR ACÚMULO OU DESVIO DE FUNÇÃO']);
        DB::table('pedidos')->insert(['type' => 'DISSÍDIO COLETIVO']);
        DB::table('pedidos')->insert(['type' => 'EQUIPARAÇÃO SALARIAL']);
        DB::table('pedidos')->insert(['type' => 'FORNECIMENTO DE PPP']);
        DB::table('pedidos')->insert(['type' => 'HONORÁRIOS ADVOCATÍCIOS ASSISTENCIAIS']);
        DB::table('pedidos')->insert(['type' => 'HONORÁRIOS ADVOCATÍCIOS DE SUCUMBÊNCIA']);
        DB::table('pedidos')->insert(['type' => 'HONORÁRIOS ADVOCATÍCIOS SOB A FORMA DE INDENIZAÇÃO']);
        DB::table('pedidos')->insert(['type' => '"HORAS EXTRAS (""IN ITINERE"")"']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (EXCESSO DE JORNADA TRABALHADA)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (INTERVALO INTERJORNADA)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (INTERVALO INTRAJORNADA)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (MINUTOS RESIDUAIS)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (TRABALHO EM DSR E FERIADOS)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (TRABALHO EM TURNOS DE 12 HORAS)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS (TRABALHO EM TURNOS DE REVEZAMENTO)']);
        DB::table('pedidos')->insert(['type' => 'HORAS EXTRAS PELA REDUÇÃO FICTA DA HORA NOTURNA']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO PERÍODO DE ESTABILIDADE CIPA']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO PERÍODO DE ESTABILIDADE GESTACIONAL']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO PERÍODO DE ESTABILIDADE POR ACIDENTE DE TRABALHO']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO PERÍODO DE ESTABILIDADE SINDICAL']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO POR DANOS MATERIAIS']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO POR DANOS MORAIS']);
        DB::table('pedidos')->insert(['type' => 'LITIGÂNCIA DE MÁ-FÉ']);
        DB::table('pedidos')->insert(['type' => '"MULTA DO ARTIGO 467, DA CLT"']);
        DB::table('pedidos')->insert(['type' => '"MULTA DO ARTIGO 477, § 8º, DA CLT"']);
        DB::table('pedidos')->insert(['type' => 'MULTAS NORMATIVAS']);
        DB::table('pedidos')->insert(['type' => 'PENSÃO MENSAL VITALÍCIA']);
        DB::table('pedidos')->insert(['type' => 'RECONHECIMENTO DE VÍNCULO EMPREGATÍCIO']);
        DB::table('pedidos')->insert(['type' => 'RECONVENÇÃO']);
        DB::table('pedidos')->insert(['type' => 'REFLEXOS DE PAGAMENTO EXTRAFOLHA']);
        DB::table('pedidos')->insert(['type' => 'REFLEXOS DE PERÍODO SEM REGISTRO']);
        DB::table('pedidos')->insert(['type' => 'REINTEGRAÇÃO ESTABILIDADE CIPA']);
        DB::table('pedidos')->insert(['type' => 'REINTEGRAÇÃO ESTABILIDADE GESTACIONAL']);
        DB::table('pedidos')->insert(['type' => 'REINTEGRAÇÃO ESTABILIDADE POR ACIDENTE DE TRABALHO']);
        DB::table('pedidos')->insert(['type' => 'REINTEGRAÇÃO ESTABILIDADE SINDICAL']);
        DB::table('pedidos')->insert(['type' => 'RESCISÃO INDIRETA']);
        DB::table('pedidos')->insert(['type' => 'RETIFICAÇÃO DE PPP']);
        DB::table('pedidos')->insert(['type' => 'REVERSÃO DE JUSTA CAUSA']);
        DB::table('pedidos')->insert(['type' => 'RECOLHIMENTO DE DIFERENÇAS DE FGTS']);
        DB::table('pedidos')->insert(['type' => 'RECOLHIMENTO DE MULTA DE 40% DO FGTS']);
        DB::table('pedidos')->insert(['type' => 'RECOLHIMENTO DE INSS']);
        DB::table('pedidos')->insert(['type' => 'APROPRIAÇÃO INDÉBITA']);
        DB::table('pedidos')->insert(['type' => 'INDENIZAÇÃO PELA LAVAGEM DE UNIFORMES']);
        DB::table('pedidos')->insert(['type' => 'RESPONSABILIDADE SUBSIDIÁRIA']);
        DB::table('pedidos')->insert(['type' => 'RESPONSABILIDADE SOLIDÁRIA']);
        DB::table('pedidos')->insert(['type' => 'PEDIDO DE NULIDADE DE TERCEIRIZAÇÃO E RECONHECIMENTO DE VÍNCULO DIRETO']);
        DB::table('pedidos')->insert(['type' => 'VERBAS RESCISÓRIAS']);
    }
}
