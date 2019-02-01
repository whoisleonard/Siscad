

-- SQLs PARA INSERCAO DE DADOS NAS TABELAS DO BANCO_DADOS_CRM;
USE banco_dados_crm;

-- ____________________________________________________________________________
-- INSERINDO OS DADOS NA TABELA CURSO;
INSERT INTO curso(descricao) VALUES ('Culinaria');
INSERT INTO curso(descricao) VALUES ('Beleza');
INSERT INTO curso(descricao) VALUES ('Artesanato');
INSERT INTO curso(descricao) VALUES ('Costura');
INSERT INTO curso(descricao) VALUES ('Outro');

SELECT * FROM curso;

-- ____________________________________________________________________________
-- INSERINDO OS DADOS NA TABELA PROFISSAO;
INSERT INTO profissao(descricao) VALUES ('Do lar');
INSERT INTO profissao(descricao) VALUES ('Estudante');
INSERT INTO profissao(descricao) VALUES ('Desempregada');
INSERT INTO profissao(descricao) VALUES ('Autônoma');
INSERT INTO profissao(descricao) VALUES ('Vendedora');
INSERT INTO profissao(descricao) VALUES ('Domestica');
INSERT INTO profissao(descricao) VALUES ('Funcionaria Publica');
INSERT INTO profissao(descricao) VALUES ('Nao Infomado');

SELECT * FROM profissao;

-- _____________________________________________________________________________
-- INSERINDO OS DADOS NA TABELA RELIGIAO
INSERT INTO religiao(descricao) VALUES ('Catolica');
INSERT INTO religiao(descricao) VALUES ('Evangelica');
INSERT INTO religiao(descricao) VALUES ('Espirita');
INSERT INTO religiao(descricao) VALUES ('Daimista');
INSERT INTO religiao(descricao) VALUES ('Matriz Africana');
INSERT INTO religiao(descricao) VALUES ('Sem Religiao');

SELECT * FROM religiao;

-- ____________________________________________________________________________
-- INSERINDO OS DADOS NA TABELA ESCOLARIDADE
INSERT INTO escolaridade(descricao) VALUES ('Nao Alfabetizada');
INSERT INTO escolaridade(descricao) VALUES ('1° a 4° Série');
INSERT INTO escolaridade(descricao) VALUES ('5° a 8° Série');
INSERT INTO escolaridade(descricao) VALUES ('Fundamental Incompleto');
INSERT INTO escolaridade(descricao) VALUES ('Fundamental Completo');
INSERT INTO escolaridade(descricao) VALUES ('Medio Incompleto');
INSERT INTO escolaridade(descricao) VALUES ('Medio Completo');
INSERT INTO escolaridade(descricao) VALUES ('Superior Incompleto');
INSERT INTO escolaridade(descricao) VALUES ('Superior Completo');
INSERT INTO escolaridade(descricao) VALUES ('Nao Informado');

SELECT * FROM escolaridade;

-- _____________________________________________________________________________
-- INSERINDO DADOS NA TABELA ORIENTACAO SEXUAL
INSERT INTO orientacao_sexual(descricao) VALUES ('Heterosexual');
INSERT INTO orientacao_sexual(descricao) VALUES ('Homosexual');
INSERT INTO orientacao_sexual(descricao) VALUES ('Bissexual');
INSERT INTO orientacao_sexual(descricao) VALUES ('Assexual');
INSERT INTO orientacao_sexual(descricao) VALUES ('Pansexual');
INSERT INTO orientacao_sexual(identidade_sexual) VALUES ('Transexual');


SELECT * FROM orientacao_sexual;

-- _______________________________________________________________________________
-- INSERINDO DADOS NA TABELA MOTIVO PROCURA 
INSERT INTO motivo_procura(descricao) values ('Atendimento social');
INSERT INTO motivo_procura(descricao) values ('Atendimento Psicologico');
INSERT INTO motivo_procura(descricao) values ('Atendimento Juridico');
INSERT INTO motivo_procura(descricao) values ('Curso');

SELECT * FROM motivo_procura;

-- _______________________________________________________________________________
-- INSERINDO DADOS NA TABELA COR
INSERT INTO cor(descricao) VALUES ('Branca');
INSERT INTO cor(descricao) VALUES ('Preta');
INSERT INTO cor(descricao) VALUES ('Parda');
INSERT INTO cor(descricao) VALUES ('Indigena');
INSERT INTO cor(descricao) VALUES ('Amarela');
INSERT INTO cor(descricao) VALUES ('Nao Informado');

SELECT * FROM cor;

-- ________________________________________________________________________________
-- INSERINDO DADOS NA TABELA SITUACAO_CONJUGAL 
INSERT INTO situacao_conjugal(descricao) VALUES ('Solteira');
INSERT INTO situacao_conjugal(descricao) VALUES ('Casada');
INSERT INTO situacao_conjugal(descricao) VALUES ('Uniao Estavel');
INSERT INTO situacao_conjugal(descricao) VALUES ('Viuva');
INSERT INTO situacao_conjugal(descricao) VALUES ('Separada');
INSERT INTO situacao_conjugal(descricao) VALUES ('Divorciada');
INSERT INTO situacao_conjugal(descricao) VALUES ('Nao Informado');

SELECT * FROM situacao_conjugal;

-- ___________________________________________________________________________________
-- INSERINDO DADOS NA TABELA RENDA FAMILIAR
INSERT INTO renda_familiar(descricao) VALUES ('Menos de 1 Salario Minimo');
INSERT INTO renda_familiar(descricao) VALUES ('1 Salario Minimo');
INSERT INTO renda_familiar(descricao) VALUES ('De 1 a 2 Salarios Minimos');
INSERT INTO renda_familiar(descricao) VALUES ('De 2 a 3 Salarios Minimos');
INSERT INTO renda_familiar(descricao) VALUES ('De 3 a 4 Salarios Minimos');
INSERT INTO renda_familiar(descricao) VALUES ('Mais de 4 Salarios Minimos');
INSERT INTO renda_familiar(descricao) VALUES ('Sem Renda');

SELECT * FROM renda_familiar;

-- ________________________________________________________________________________________
-- INSERINDO DADOS NA TABELA TIPO VIOLENCIA
INSERT INTO tipo_violencia(descricao) VALUES ('Violencia Psicologica');
INSERT INTO tipo_violencia(descricao) VALUES ('Violencia Fisica');
INSERT INTO tipo_violencia(descricao) VALUES ('Violencia Sexual');
INSERT INTO tipo_violencia(descricao) VALUES ('Violencia Economica');
INSERT INTO tipo_violencia(descricao) VALUES ('Violencia Moral');

SELECT * FROM tipo_violencia;

-- _________________________________________________________________________________________
-- INSERINDO DADOS NA TABELA BUSCA PELO SERVICO
INSERT INTO busca_pelo_servico(descricao) VALUES ('Encaminhada');
INSERT INTO busca_pelo_servico(descricao) VALUES ('Expontânea');

SELECT * FROM busca_pelo_servico;

-- ___________________________________________________________________________________________
-- INSERINDO DADOS NA TABELA INSTITUICOES
INSERT INTO instituicoes(nome) VALUES ('Delegacia Especializada da Mulher (DEAM)');
INSERT INTO instituicoes(nome) VALUES ('Ministerio Publico (MP)');
INSERT INTO instituicoes(nome) VALUES ('Maternidade Barbara Heliodora (MBH)');
INSERT INTO instituicoes(nome) VALUES ('Vara da Protecao da Mulher (VPM)');
INSERT INTO instituicoes(nome) VALUES ('Unidade Basica de Saúde');
INSERT INTO instituicoes(nome) VALUES ('Secretaria Adjunta Municipal da Mulher (SEMAM)');
INSERT INTO instituicoes(nome) VALUES ('Secretaria Estadual da Mulher (SEPMULHERES)');
INSERT INTO instituicoes(nome) VALUES ('Conselho Tutelar');
INSERT INTO instituicoes(nome) VALUES ('Defensoria Publica Estadual');
INSERT INTO instituicoes(nome) VALUES ('Secretaria de Direitos Humanos Estadual');
INSERT INTO instituicoes(nome) VALUES ('Centro de Referencia de Assistencia Social (CRAS)');
INSERT INTO instituicoes(nome) VALUES ('Centro de Referência Especializado de Assistência Social (CREAS)');
INSERT INTO instituicoes(nome) VALUES ('Outra');

SELECT * FROM instituicoes;
-- ____________________________________________________________________________________________________

-- INSERINDO DADOS NA TABELA COMO SOUBE DO SERVICO
INSERT INTO como_soube_do_servico(descricao) VALUES ('Portal da Prefeitura de Rio Branco, ACRE');
INSERT INTO como_soube_do_servico(descricao) VALUES ('Redes Sociais');
INSERT INTO como_soube_do_servico(descricao) VALUES ('Televisão');
INSERT INTO como_soube_do_servico(descricao) VALUES ('Internet');
INSERT INTO como_soube_do_servico(descricao) VALUES ('Amiga');
INSERT INTO como_soube_do_servico(descricao) VALUES ('Outra');

SELECT * FROM como_soube_do_servico;

-- _____________________________________________________________________________________________________

-- INSERINDO DADOS NA TABELA TIPO DE DOCUMENTO
INSERT INTO tipo_documento(descricao) VALUES ('Encaminhamento');
INSERT INTO tipo_documento(descricao) VALUES ('Boletim de Ocorrencia');
INSERT INTO tipo_documento(descricao) VALUES ('Notificação Compulsoria');
INSERT INTO tipo_documento(descricao) VALUES ('Outro');

SELECT * FROM tipo_documento;








