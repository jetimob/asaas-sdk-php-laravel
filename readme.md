#### Asaas Sdk Php Laravel

Essa SDK foi criado com o intuito de se comunicar com a [Api da Asaas](https://docs.asaas.com/reference) de forma simples e direta com apenas as funcionalidades necessárias.

##### Instalação 
```bash
composer require jetimob/asaas-sdk-php-laravel 
```


### Configuração
Para começar, as configurações do pacote devem ser publicadas através do comando:
```bash
php artisan asaas:install
```
Este comando irá criar o arquivo de configuração `asaas.php` no diretório `/config` para que você possa modificar conforme a necessidade do seu projeto.


### Api's

- Customer - ( Clientes )
- Charging - ( Cobranças )
- Account - ( Subcontas )
- Webhook - ( Configuração de Webhooks )

Sempre que for chamar qualquer api do pacote asaas-sdk-php-laravel, utilize o namespace Jetimob\Asaas\Facades\Asaas ou, simplesmente, Asaas. O namespace Asaas é registrado automaticamente pelo Laravel, ou seja, a importação pode ser feita apenas com use Asaas; no topo de um arquivo.

### Exemplos


#### Criação de um cliente (Customer)
```php
use Jetimob\Asaas\Facades\Asaas;
use Jetimob\Asaas\Entity\Customer\Customer; 

$customer = with(new Customer())
            ->setName('John Doe')
            ->setEmail('teste@email.com')
            ->setCpfCnpj('00000000000');

$response = Asaas::customer()->create($customer);
```

## Autenticação 

Todas as requisições para a Api da Asaas necessitam de um `access_token` nos headers da requisição, por padrão o pacote irá recuperar do arquivo `asaas.php`.

Quando se trata de requisições referentes as subcontas deve ser passado de forma explícita o token ( Retornado como ApiKey após a criação de uma subconta ).

#### Por exemplo:
```php
$charging = new Charging();

/** 
 * Dessa forma irá criar uma cobrança para a conta principal,
 * que possua a api key configurada no arquivo asaas.php.
 */
Asaas::charging()->create($charging);


/**
 * Dessa forma será criada uma cobrança para essa conta que foi criada agora
 */
$account = new Account();

$response = Asaas::account()->create($account);

$apiKey = $response->getApiKey();

Asaas::charging()->usingToken($apiKey)->create($charging);

```

### Implementaçoẽs


| **Entidades**      |                                                Funções                                                |   Status   |
|--------------------|:-----------------------------------------------------------------------------------------------------:|:----------:|
| **Contas**         |                                                                                                       |            |
|                    |                                         Criação de subcontas                                          |     ✔️     |
|                    |                                  Buscar informações da conta pelo Id                                  |     ✔️     |
|                    |                                     Resgatar o saldo de uma conta                                     |     ✔️     |
|                    |                                        Estatísticas de Splits                                         |     ✔️     |
|                    |                                        Customização de fatura                                         |     ✔️     |
| **Cobranças**      |                                                                                                       |            |
|                    |                                         Criação de cobranças                                          |     ✔️     |
|                    |                                Buscar informações da cobrança pelo Id                                 |     ✔️     |
|                    |                                 Atualizar informações de uma cobrança                                 |     ✔️     |
|                    |                                         Cancelar uma cobrança                                         |     ✔️     |
|                    |                                      Restaurar cobrança removida                                      |     ✔️     |
|                    |                                   Confirmar recebimento em dinheiro                                   |     ✔️     |
|                    |                                   Desfazer recebimento em dinheiro                                    |     ✔️     |
| **Clientes**       |                                                                                                       |            |
|                    |                                          Criação de clientes                                          |     ✔️     |
|                    |                              Resgatar informações de um cliente pelo Id                               |     ✔️     |
|                    |                                  Atualizar informações de um cliente                                  |     ✔️     |
|                    |                                          Deletar um cliente                                           |     ✔️     |
|                    | [Tokenização](https://docs.asaas.com/reference/tokenizacao-de-cartao-de-credito) de cartão de crédito |     ✔️     |
| **Transferências** |                                                                                                       |            |
|                    |                                        Transferências externas                                        |     ✔️     |
|                    |                                   Transferências entre contas Asaas                                   |     ❌     |
|                    |                              Recuperar informações de uma transferência                               |     ✔️     |
| **Webhook**        |                                                                                                       |            |
|                    |                                Configuração de Webhook para cobranças                                 |     ✔️     |
|                    |                              Configuração de Webhook para transferências                              |     ✔️     |
