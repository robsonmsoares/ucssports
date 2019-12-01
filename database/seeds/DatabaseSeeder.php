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
        $this->call(UsersTableSeeder::class);
        /* USAR O COMANDO: php artisan DB:seed
         * ======================================================================================
         * Inserir os dados dos times
         *======================================================================================
         */
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
         */
        DB::insert('insert into campeonatos (campId, nome, ano, qtdTimes, casaFora, dataInicio) values(?,?,?,?,?,?)', array(1, 'Brasileirão Série A', 2019, 20, 'S', '2019-04-03', null));
        DB::insert('insert into campeonatos (campId, nome, ano, qtdTimes, casaFora, dataInicio) values(?,?,?,?,?,?)', array(2, 'Brasileirão Série B', 2019, 20, 'S', '2019-04-03', null));


        /* ======================================================================================
         * Inserir os dados dos times dos campeonatos
         *======================================================================================
         */
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
    }
}
