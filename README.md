# codeigniter4-crud

### Utilizar o CI4 sem o Apache 
- Faça o dowload do PHP pelo Chocolatey:  [Chocolatey PHP](https://chocolatey.org/packages/php "Chocolatey PHP")
- Ou baixe direto do site: [PHP](https://www.php.net/downloads.php "PHP Dowload")

##### Observações: 
- Neste projeto a language já está traduzida para a versão PT-BR  de acordo com o repositório [codeigniter4-translations](https://github.com/codeigniter4/translations "codeigniter4-translations"). Caminho até a pasta de alteração: `app/Config/App.php` Alterar o campo `public $defaultLocale = 'es'` para `public $defaultLocale = 'pt-br'`.
- É necessário o PHP versão 7.2 ou mais recente.
- O PHP vem com as extenções necessárias para rodar o CI4 desabilitadas, para alterar, basta ir na pasta onde foi instalado o `PHP/php.ini ` e descomentar inicialmente as linhas
```php
extension=mbstring
extension=mysqli
extension=curl
```
Adicione o PHP ao PATH do seu sistema. Caso ao rodar o `$ php -v` dê erro de biblioteca não encontrada, coloque o diretório onde se encontram as libraries no campo:
```php
extension_dir = "C:\caminho\php\ext"
```

Com o PHP Funcionando utilize o comando `$ php spark serve` dentro da pasta que se encontra o projeto do CI4. Assim, o projeto rodará na sua máquica local.

##### Alterações do CI3 para o  CI4: 
- Estrutura de pastas

| CI3 | CI4 | Alterações |
| ------ | ------ | ------ |
| application  | app  | Sem alterações |
| - | public  | Diretório onde será apontado o .HTACESS|
|  system | system  | Sem alterações |
| -  | writable  | Diretório para lidar com arquivos |

- CodeIgniter\RESTful\ResourceController: 
Permite trabalhar com o CI4 as usabilidades de uma API RESTFul nativa. 

- Adição de namespaces: 
Primeiro para organizar seus tipos logicamente. É como se você colocasse determinados tipos (classes, estruturas, enumerações, delegações, interfaces, etc.) que são relacionados de alguma forma em uma mesma "caixa".

- Adição o arquivo .env: 
Arquivo onde será armazenado dados como conexão com o banco de dados.

- Utilização do soft delete: 
Funcionalidade que implementa um recurso de exclusão diferenciado integrado no CI4.

- Utilização de seeds: 
Funciolidade para incluir dados de testes no banco de dados  `$ php spark db:seed TestSeeder`.

- Utilização de filtros: 
Utilizado para criar middlewares de requisições. Caminho `Config/Filters`.


### Banco de dados utilizado
```sql
CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        body text NOT NULL,
		created_at DATETIME,
		updated_at DATETIME,
		deleted_at DATETIME,
        PRIMARY KEY (id),
        KEY slug (slug)
);
```

```sql
INSERT INTO news VALUES
(1,'Elvis sighted','elvis-sighted','Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2,'Say it isn\'t so!','say-it-isnt-so','Scientists conclude that some programmers have a sense of humor.'),
(3,'Caffeination, Yes!','caffeination-yes','World\'s largest coffee shop open onsite nested coffee shop for staff only.');
```
