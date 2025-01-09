<p align="center">
    <img src="public/img/banner.png" width="600" alt="Illustration of Pinkary logo. The logo is composed of stylized white text spelling out 'Pinkary' with a pink dot at the end.">
</p>

**Facade Link!** é uma ferramenta online que permite criar links encurtados e rastreáveis com foco em postagens em redes sociais, medir o sucesso de campanhas de marketing ou ações de influenciadores.

## Installation

Pinkary é uma aplicação regular do Laravel; ele é baseado no Laravel 11 e usa CSS Livewire/Tailwind para o frontend. Se você conhece o Laravel, deve se sentir em casa.

Em termos de desenvolvimento local, você pode usar os seguintes requisitos:

- PHP 8.4 - com SQLite, GD e outras extensões comuns.
- Node.js 16 ou mais recente.

Se você tiver estes requisitos, pode começar clonando o repositório e instalando as dependências:

```bash
git clone https://github.com/monteirofutila/facade-link.git

cd facade-link

git checkout -b feat/your-feature # or fix/your-fix
```

> **Não envie diretamente para o branch `main`**. Em vez disso, crie um novo branch e envie-o para seu branch.

Em seguida, instale as dependências usando [Composer](https://getcomposer.org) e [NPM](https://www.npmjs.com):

```bash
composer install

npm install
```

Depois disso, configure seu arquivo `.env`:

```bash
cp .env.example .env

php artisan key:generate
```

Prepare seu banco de dados e execute as migrações:

```bash
touch database/database.sqlite

php artisan migrate
```

Vincule o armazenamento à pasta pública:

```bash
php artisan storage:link
```

Em um **terminal separado**, crie os ativos no modo de observação:

```bash
npm run dev
```

Também em um **terminal separado**, execute o trabalhador da fila:

```bash
php artisan queue:work
```

Finalmente, inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

Depois de concluir as alterações no código, execute o conjunto de testes para garantir que tudo ainda esteja funcionando:

```bash
composer test
```

Se tudo estiver verde, envie seu branch e crie uma solicitação pull:

```bash
git commit -am "Your commit message"

git push
```

## Ferramentas

Facade usa algumas ferramentas para garantir a qualidade e consistência do código. Claro, usamos [PHPStan](https://phpstan.org) para análise estática. Em termos de estilo de código, usamos [Laravel Pint](https://laravel.com/docs/11.x/pint) para garantir que o código seja consistente e siga as convenções do Laravel. Também usamos [Rector](https://getrector.org) para garantir que o código esteja atualizado com a versão mais recente do PHP.

Você executa essas ferramentas individualmente usando os seguintes comandos:

```bash
# Lint the code using Pint
./vendor/bin/pint
./vendor/bin/pint --test

# Refactor the code using Rector
vendor/bin/rector
vendor/bin/rector --dry-run

# Run PHPStan
./vendor/bin/phpstan analyse

# Run all the tools
composer test
```

As solicitações pull que não passarem no conjunto de testes não serão mescladas. Portanto, conforme sugerido na seção [Instalação](#instalação), certifique-se de executar o conjunto de testes antes de enviar seu branch.

## Produção

Facade está hospedado em [Contabo](https://contabo.com) e o servidor está rodando no Ubuntu 24.04 de 4 vCPUs, 6GB RAM.

O único serviço que utilizamos é o [Google Auth Platform](https://console.cloud.google.com) para autenticação OAuth. Além disso, SQLite é utilizado como driver de banco de dados, driver de sessão, driver de fila, driver de cache, etc.

---

Facade é um software de código aberto licenciado sob a **[MIT License](LICENSE)**