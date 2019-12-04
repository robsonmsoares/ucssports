<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        /* USAR O COMANDO: php artisan DB:seed
         * ======================================================================================
         * Inserir os dados dos times
         *======================================================================================
         *
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(1, 'Avaí', 'SC', 'AVA', '1900-01-01', 'Ressacada', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(2, 'Flamengo', 'RJ', 'FLA', '1900-01-01', 'Maracanã', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(3, 'Vasco', 'RS', 'VAS', '1900-01-01', 'São Januário', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(4, 'Santos', 'SP', 'SAN', '1900-01-01', 'Vila Belmiro', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(5, 'Cruzeiro', 'MG', 'CRU', '1900-01-01', 'Mineirão', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(6, 'Atéltico Mineiro', 'MG', 'AMG', '1900-01-01', 'Independência', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(7, 'Athletico Paranaense', 'PR', 'ATH', '1900-01-01', 'Arena da Baixada', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(8, 'Botafogo', 'RJ', 'BOT', '1900-01-01', 'Engenhão', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(9, 'Corinthians', 'SP', 'COR', '1900-01-01', 'Arena Corinthians', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(10, 'Goiás', 'GO', 'GOI', '1900-01-01', 'Serra Dourada', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(11, 'Bahia', 'BA', 'BAH', '1900-01-01', 'Fonta Nova', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(12, 'Palmeiras', 'SP', 'PAL', '1900-01-01', 'Arena Palmeiras', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(13, 'Grêmio', 'RS', 'GRE', '1900-01-01', 'Arena do Grêmio', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(14, 'Internacional', 'RS', 'INT', '1900-01-01', 'Gigante da Beira Rio', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(15, 'Fortaleza', 'CE', 'FOR', '1900-01-01', 'Governador Plácido Castelo', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(16, 'São Paulo', 'SP', 'SPA', '1900-01-01', 'Morumbi', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(17, 'Chapecoense', 'SC', 'CHA', '1900-01-01', 'Arena Conda', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(18, 'CSA', 'AL', 'CSA', '1900-01-01', 'Rei Pelé', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(19, 'Fluminense', 'RJ', 'FLU', '1900-01-01', 'Maracanã', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(20, 'Ceará', 'CE', 'CEA', '1900-01-01', 'Castelão', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(21, 'Cuiabá', 'MT', 'CUI', '1900-01-01', 'Arena Pantanal', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(22, 'América Mineiro', 'MG', 'AMM', '1900-01-01', 'Independência', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(23, 'Oeste', 'SP', 'OES', '1900-01-01', 'Arena Barueri', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(24, 'Atlético Goianiense', 'GO', 'ATG', '1900-01-01', 'Antônio Accioly', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(25, 'Brasil de Pelotas', 'RS', 'BRP', '1900-01-01', 'Bento Freitas', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(26, 'Coritiba', 'PR', 'CTB', '1900-01-01', 'Couto Pereira', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(27, 'Vitória', 'ES', 'VIT', '1900-01-01', 'Barradão', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(28, 'CRB', 'AL', 'CRB', '1900-01-01', 'Rei Pelé', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(29, 'Ponte Preta', 'SP', 'PPR', '1900-01-01', 'Moisés Lucarelli', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(30, 'Figueirense', 'SC', 'FIG', '1900-01-01', 'Orlando Scarpelli', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(31, 'Cricipuma', 'SC', 'CRI', '1900-01-01', 'Heriberto Hulse', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(32, 'Londrina', 'PR', 'LON', '1900-01-01', 'Estádio do Café', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(33, 'Paraná', 'PR', 'PAR', '1900-01-01', 'Durival Britto', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(34, 'Operário', 'PR', 'OPE', '1900-01-01', 'Germnao Kruger', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(35, 'São Bento', 'SP', 'SBE', '1900-01-01', 'Walter Ribeiro', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(36, 'Bragantino', 'SP', 'BRA', '1900-01-01', 'Nabi Abi Chedid', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(37, 'Vila Nova', 'GO', 'VNV', '1900-01-01', 'Serra Dourada', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(38, 'Guarani', 'SP', 'GUA', '1900-01-01', 'Brinco de Ouro', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(39, 'Botafogo SP', 'SP', 'BSP', '1900-01-01', 'Santa Cruz', null));
        DB::insert('insert into times (timeID, nome, estado, apelido, dataFundacao, nomeEstadio) values(?,?,?,?,?,?)', array(40, 'Sport', 'PE', 'SPO', '1900-01-01', 'Ilha do Retiro', null));

        /* ======================================================================================
         * Inserir os dados dos campeonatos
         *======================================================================================
         *
        DB::insert('insert into campeonatos (campId, nome, ano, qtdTimes, casaFora, dataInicio) values(?,?,?,?,?,?)', array(1, 'Brasileirão Série A', 2019, 20, 'S', '2019-04-03', null));
        DB::insert('insert into campeonatos (campId, nome, ano, qtdTimes, casaFora, dataInicio) values(?,?,?,?,?,?)', array(2, 'Brasileirão Série B', 2019, 20, 'S', '2019-04-03', null));

        /* ======================================================================================
         * Inserir os dados dos times dos campeonatos
         *======================================================================================
         *
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 1));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 2));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 3));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 4));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 5));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 6));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 7));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 8));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 9));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 10));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 11));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 12));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 13));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 14));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 15));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 16));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 17));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 18));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 19));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(1, 20));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 21));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 22));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 23));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 24));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 25));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 26));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 27));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 28));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 29));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 30));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 31));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 32));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 33));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 34));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 35));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 36));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 37));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 38));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 39));
        DB::insert('insert into campeonato_times (campId, timeId) values(?,?)', array(2, 40));

        /* ======================================================================================
         * Inserir os dados iniciais da classificação
         *======================================================================================
         */
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 1,1,1,0, 1,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 2,1,1,0, 2,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 3,1,1,0, 3,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 4,1,1,0, 4,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 5,1,1,0, 5,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 6,1,1,0, 6,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 7,1,1,0, 7,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 8,1,1,0, 8,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array( 9,1,1,0, 9,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(10,1,1,0,10,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(11,1,1,0,11,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(12,1,1,0,12,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(13,1,1,0,13,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(14,1,1,0,14,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(15,1,1,0,15,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(16,1,1,0,16,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(17,1,1,0,17,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(18,1,1,0,18,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(19,1,1,0,19,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(20,1,1,0,20,0,0,0,0,0,0,0));

        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(21,1,2,0,21,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(22,1,2,0,22,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(23,1,2,0,23,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(24,1,2,0,24,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(25,1,2,0,25,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(26,1,2,0,26,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(27,1,2,0,27,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(28,1,2,0,28,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(29,1,2,0,29,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(30,1,2,0,30,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(31,1,2,0,31,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(32,1,2,0,32,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(33,1,2,0,33,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(34,1,2,0,34,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(35,1,2,0,35,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(36,1,2,0,36,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(37,1,2,0,37,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(38,1,2,0,38,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(39,1,2,0,39,0,0,0,0,0,0,0));
        DB::insert('insert into classifications (classificationId, posicao, campId, rodada, timeId, pontos, vitorias, empates, derrotas, golsPro, golsContra, saldoGols) values(?,?,?,?,?,?,?,?,?,?,?,?)', array(40,1,2,0,40,0,0,0,0,0,0,0));

    }
}
