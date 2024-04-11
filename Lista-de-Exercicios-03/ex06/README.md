## Enunciado

Faça um programa que receba o nome de 5 produtos e seus respectivos preços, calcule e mostre:
a. A quantidade de produtos com preço inferior a R$50,00.
b. O nome dos produtos com preço entre R$50,00 e R$100,00.
c. A média dos preços dos produtos com preço superior a R$100,00.

## Como executar

1. Certifique-se de ter um servidor web configurado (por exemplo, XAMPP) para executar o código PHP.
2. Clone o repositório e copie a pasta `ex06` para o diretório raiz do servidor web.
3. Abra o navegador e acesse `localhost/ex06`.
4. Preencha os campos do formulário com os nomes e preços dos produtos.
5. Clique no botão "Enviar".

## Arquivos

- `index.php`: Contém a estrutura HTML para a página e o formulário para entrada dos dados dos produtos.
- `script.php`: Contém o código PHP que processa os dados fornecidos, calcula as informações solicitadas e exibe os resultados.

## Exemplo de Uso

Suponha que os dados dos produtos sejam:

- Produto 1: Nome - Lápis, Preço - R$ 1
- Produto 2: Nome - Caneta, Preço - R$ 2
- Produto 3: Nome - Caderno, Preço - R$ 15
- Produto 4: Nome - Borracha, Preço - R$ 80
- Produto 5: Nome - Régua, Preço - R$ 300

A saída exibida será:

```html
Quantidade de produtos com preço inferior a R$50,00: 3
Produtos com preço entre R$50,00 e R$100,00: 2
Média dos preços dos produtos com preço superior a R$100,00: R$ 190
```
