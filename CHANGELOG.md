# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

## [1.6.0](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.5.1...v1.6.0) (2024-10-01)


### Features

* implementa atualização de configuração de webhooks ([90bdf0a](https://github.com/jetimob/asaas-sdk-php-laravel/commit/90bdf0accf5d8a7b05f370bb527ae9fc557cb9ef))

## [1.5.0](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.4.1...v1.5.0) (2024-09-09)


### Features

* implementação de envio de documentos ([8deae2f](https://github.com/jetimob/asaas-sdk-php-laravel/commit/8deae2f90828411030ea4f9c0c92af9bd5d36083))

### [1.4.1](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.4.0...v1.4.1) (2024-09-05)


### Bug Fixes

* corrige setProvince ([9d0b555](https://github.com/jetimob/asaas-sdk-php-laravel/commit/9d0b5550d97e2852eff212699b6d470f194c5add))

## [1.4.0](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.3.0...v1.4.0) (2024-09-05)


### Features

* implementa set e get de province ([6cb3990](https://github.com/jetimob/asaas-sdk-php-laravel/commit/6cb3990d82cc45637fb49325dadc9b524b66d797))

## [1.3.0](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.2.1...v1.3.0) (2024-04-02)


### Features

* atualização de abertura e configuração de subconta ([6be9b8b](https://github.com/jetimob/asaas-sdk-php-laravel/commit/6be9b8b7c932678e999371cf9cdc18e46910a324))

### [1.2.1](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.2.0...v1.2.1) (2024-02-20)

## [1.2.0](https://github.com/jetimob/asaas-sdk-php-laravel/compare/v1.1.1...v1.2.0) (2024-02-20)


### Features

* adiciona campo de tipo de Webhook no endpoint de criação de conta ([c6a5f3c](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c6a5f3cb2045504fa1cc303f7a13dfbcf8884a91))
* Implementa cadastro de endereços de chaves pix para contas ([9a8d383](https://github.com/jetimob/asaas-sdk-php-laravel/commit/9a8d383e5602e367510848775e094be0c51d7a86))

### 1.1.1 (2024-01-18)


### Features

* Adiciona API de cobranças ([7331f40](https://github.com/jetimob/asaas-sdk-php-laravel/commit/7331f40b15380cf46c48cbaa3cfb6e4948ee3e8b))
* adiciona api fake de transferências ([d05b79a](https://github.com/jetimob/asaas-sdk-php-laravel/commit/d05b79a2d79e38e46afb28f04638b1d29fa204c9))
* Adiciona campo de tipo na entidade de multa ([1c1a553](https://github.com/jetimob/asaas-sdk-php-laravel/commit/1c1a553f9cfa0624cf185bd999352e2dfb9a4682))
* Adiciona cast para enum de status de transferẽncia recebida via webhook ([8a10368](https://github.com/jetimob/asaas-sdk-php-laravel/commit/8a103685a64f5aa065c9448c6d2b935be00ff5e4))
* Adiciona cobrança por cartão de crédito ([51e0883](https://github.com/jetimob/asaas-sdk-php-laravel/commit/51e0883986e55297b5857339b56c816c9e348a7e))
* Adiciona enum de status de cobrança no retorno de requisição de buscar uma única fatura ([7cd6774](https://github.com/jetimob/asaas-sdk-php-laravel/commit/7cd677416b47a36d1acb4e9e81d21bf66ccc8a5a))
* adiciona getter restante para o data ([14d0992](https://github.com/jetimob/asaas-sdk-php-laravel/commit/14d099218f4d5c322ce53adef80512a2857767c2))
* adiciona interfaces para abastrair as api's e poder utilizar o swap da facade ([ffa1918](https://github.com/jetimob/asaas-sdk-php-laravel/commit/ffa1918d96db52e486a2c11a502eab911f43c01e))
* adiciona método de verificação de documentos no contrato de AccountApi ([c943048](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c943048895ef547d3c24bce48153b9361065916a))
* adiciona método fake na asaas para simular pagamento da fatura ([a4ac35f](https://github.com/jetimob/asaas-sdk-php-laravel/commit/a4ac35f1fe321de9fc6598dd35addb429b85e577))
* Adiciona métodos fakes de criação e busca de customers ([aa151fe](https://github.com/jetimob/asaas-sdk-php-laravel/commit/aa151fe1cf10035c8bc7939dab02ba02f3030cf4))
* adiciona nullable por padrão nas propriedades para evitar erros ([70c5d59](https://github.com/jetimob/asaas-sdk-php-laravel/commit/70c5d59b83000cd89047018e2e3ba1be4266d3ff))
* Adiciona opção de passar o access_token para consultas sobre outras contas ([ba4df06](https://github.com/jetimob/asaas-sdk-php-laravel/commit/ba4df06835dcc4862be1919f78ef6ca71456a49a))
* Adiciona Request Exception da Asaas na classe AbstractApi ([479ac64](https://github.com/jetimob/asaas-sdk-php-laravel/commit/479ac64241b7ea817b14892d6f7767e93f29ca0d))
* adiciona tests no autoload ([b9225b1](https://github.com/jetimob/asaas-sdk-php-laravel/commit/b9225b1662b2f2c9f2248564b06699d83cc5b621))
* Adiciona token de cartão de crédito na criação de cobrança ([9dcc8e2](https://github.com/jetimob/asaas-sdk-php-laravel/commit/9dcc8e24c3d52e7a96cd35e7b10acf61eecb2b20))
* adiciona tradução do status de documento ([736c026](https://github.com/jetimob/asaas-sdk-php-laravel/commit/736c026aa3b4edac02f37cb09f49c790c91f4356))
* adiciona using token para a facade fake ([2cdb7ba](https://github.com/jetimob/asaas-sdk-php-laravel/commit/2cdb7ba910f45e1c1e9e7fe3e667365df558eca1))
* adiciona verificação de documentos pendentes ([560d4ec](https://github.com/jetimob/asaas-sdk-php-laravel/commit/560d4ec78b662076e56dac3b75805dee25fa5aeb))
* Atualiza enum de status de transferência ([4775efb](https://github.com/jetimob/asaas-sdk-php-laravel/commit/4775efb3133e876fed07189781bb13bbc96199bf))
* Corrige arquivo de configuração da asaas ([ea2bee0](https://github.com/jetimob/asaas-sdk-php-laravel/commit/ea2bee079d0c273b01bc38fd00dd6b9401c6ace8))
* corrige namespaces do mock ([9effcbb](https://github.com/jetimob/asaas-sdk-php-laravel/commit/9effcbb21a668e059372c3d7ba6c46eb0d114093))
* Cria classe com utilitarios ([a6aa9dc](https://github.com/jetimob/asaas-sdk-php-laravel/commit/a6aa9dc5e8865238906f956ad41c8e203c6a5680))
* Cria entidades para ChargeBack ([678e179](https://github.com/jetimob/asaas-sdk-php-laravel/commit/678e17973984272c22f3fb09fa163dbb1d271d32))
* Cria enum de CompanyType ([e7e90bf](https://github.com/jetimob/asaas-sdk-php-laravel/commit/e7e90bfd0c8295bd078343180100179ea81360bd))
* cria enum helpers e cria mocks da api fake de account ([ccaf646](https://github.com/jetimob/asaas-sdk-php-laravel/commit/ccaf646a2af487d79bbc2700aa95cb659e4d379f))
* Cria enum para status de transferência ([c5480a2](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c5480a203899a6042084af0a187dd8ce9c6edd50))
* Cria enum para tipos de chave pix ([9ceb544](https://github.com/jetimob/asaas-sdk-php-laravel/commit/9ceb5440f134b077348b205f69af212e2554c73e))
* Implementa API de subContas, criação e consulta de saldo e informações ([70ca971](https://github.com/jetimob/asaas-sdk-php-laravel/commit/70ca97133bc935f70be3595b375d66d1d25cfdb5))
* Implementa ativação e configuração de webhook para as subcontas ([4ffb461](https://github.com/jetimob/asaas-sdk-php-laravel/commit/4ffb461462dcd2b80928f71c37e75ab44877a13a))
* Implementa atualização de cobrança ([d87b6f5](https://github.com/jetimob/asaas-sdk-php-laravel/commit/d87b6f554fe3fbeab926a95208987ac2217fe7f1))
* Implementa confirmação de recebimento em dinheiro de uma cobrança ([27649ad](https://github.com/jetimob/asaas-sdk-php-laravel/commit/27649add0f2dbd24fec2551cef8be1596541cad0))
* Implementa customização fatura para as contas ([c5e74b5](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c5e74b5e9e3af0787c5df6b6162edc0108e05fc4))
* Implementa endpoint para estorno de cobrança ([30090ed](https://github.com/jetimob/asaas-sdk-php-laravel/commit/30090ed17d45ba38a65c40d7ef3590842c0e7312))
* Implementa endpoint para retornar walletsIds ([17b8aba](https://github.com/jetimob/asaas-sdk-php-laravel/commit/17b8aba4181b6ba534db6ad933cb1e81254fca18))
* Implementa funcionalidade de desfazer confirmação de recebimento em dinheiro ([c33d25c](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c33d25c036d907e95c867c01ae2dd23826a80e1e))
* Implementa funcionalidade de restaurar cliente removido ([10672bc](https://github.com/jetimob/asaas-sdk-php-laravel/commit/10672bc798235ecc3cc5c371a4a089d957d93d2a))
* Implementa funcionalidade de restaurar cobrança cancelada ([88c83c0](https://github.com/jetimob/asaas-sdk-php-laravel/commit/88c83c0516b4df3310dc9633749dc86a00a2036e))
* implementa novos metodos para as fake apis ([bf66a01](https://github.com/jetimob/asaas-sdk-php-laravel/commit/bf66a01fc3c32f395774811414b0d56e52c211e7))
* Implementa objeto de erro enviados na resposta da Asaas ([061b3e6](https://github.com/jetimob/asaas-sdk-php-laravel/commit/061b3e61504dbc7ae92860cc78e9d7065af4afbd))
* Implementa possibilidade de splits em cobrança ([55d3de4](https://github.com/jetimob/asaas-sdk-php-laravel/commit/55d3de4b0365955f9f49e39dd19624c06900ce9f))
* Implementa recuperar valores de splits ([0d99f62](https://github.com/jetimob/asaas-sdk-php-laravel/commit/0d99f6275dd36acc0ed5ad7538c03d6c7e66a4a0))
* Implementa resposta do webhook de cobranças ([ab9ddad](https://github.com/jetimob/asaas-sdk-php-laravel/commit/ab9ddad4d4d4320c7c64ba7b307b1550a6f8fed7))
* Implementa resposta do webhook de transferência ([3a928ed](https://github.com/jetimob/asaas-sdk-php-laravel/commit/3a928edd42affaf1193fe12003c08869e34bdb41))
* Implementa solicitação e resgate de transferência ([99ac7b9](https://github.com/jetimob/asaas-sdk-php-laravel/commit/99ac7b96c4ce04708a370cd7b738aba33dbd42a7))
* Implementa tokenização de cartão de crédito dos clientes ([29d316c](https://github.com/jetimob/asaas-sdk-php-laravel/commit/29d316c4299fb6103528021bebdca67264804e34))
* implementa webhook para alteração de status da conta ([5f780d3](https://github.com/jetimob/asaas-sdk-php-laravel/commit/5f780d3d6a0920abd9a6746b045dcb957eaab4b9))
* Inicializa SDK da asaas ([dcf114e](https://github.com/jetimob/asaas-sdk-php-laravel/commit/dcf114e37d4d9ac94d4399dd03a95788d2dac177))
* organiza entidades por Api ([46d02a9](https://github.com/jetimob/asaas-sdk-php-laravel/commit/46d02a98c5e1081e0e06134e0dd2afc338ad6c33))
* Refatora métodos auxiliares da classe de testes ([e3f096c](https://github.com/jetimob/asaas-sdk-php-laravel/commit/e3f096cd1838a0cb05a2709bd5c2713a19c508f6))


### Bug Fixes

* adiciona nullable ao campo de  cpf da resposta de customers ([55b20b4](https://github.com/jetimob/asaas-sdk-php-laravel/commit/55b20b4f9c3b6b00fa2111ac21959c70f0df5214))
* Adiciona retorno do endpoint de update de customer da api fake ([c5c10c0](https://github.com/jetimob/asaas-sdk-php-laravel/commit/c5c10c097ce1e996020e7221f33133682e76eab4))
* adiciona url segura na configuração fake de callback ([143f5c7](https://github.com/jetimob/asaas-sdk-php-laravel/commit/143f5c775dd9d0ef41a7c344aa1dbe4357d59031))
* altera campos da conta para nullalbe ([50d1e2b](https://github.com/jetimob/asaas-sdk-php-laravel/commit/50d1e2b83be34988e374ed943810778c4e573248))
* corrige casas decimais do retorno do fake-endpoint da consulta de saldo da conta ([3f2df47](https://github.com/jetimob/asaas-sdk-php-laravel/commit/3f2df479e88eef77980dabd75b74a3d71d686243))
* Corrige criação da entidade de desconto ([706b396](https://github.com/jetimob/asaas-sdk-php-laravel/commit/706b3967b72d2c88b07a31f3b05134327ed0f9ac))
* corrige rota de endpoint de solitação de transferência ([e9b3f60](https://github.com/jetimob/asaas-sdk-php-laravel/commit/e9b3f6089bd46f9aaf10f8166288f2442063ba7a))
* Corrige tipagem dos valores da entidades e adiciona strict types para gerar exception se for passado um int para um float ([3161c8e](https://github.com/jetimob/asaas-sdk-php-laravel/commit/3161c8e6056da2d726b3f80e2f2c051d67735244))
* corrige tipo do parametro do valor do disconto ([d32da60](https://github.com/jetimob/asaas-sdk-php-laravel/commit/d32da6049ad7199d8dee10f96f08a27d4d16e6c7))
