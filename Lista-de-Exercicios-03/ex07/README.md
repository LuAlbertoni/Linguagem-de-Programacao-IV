## Enunciado

Crie um programa em PHP que receba os seguintes dados de 10 alunos: nome, nota1 e nota2. Armazene esses dados em um mapa ordenado que contenha também o armazenamento da média de nota do aluno. Seu programa deve imprimir a lista dos aprovados com as médias finais e outra lista dos reprovados sem exibir o valor da média.

## Como executar

1. Certifique-se de ter um servidor web configurado (por exemplo, XAMPP) para executar o código PHP.
2. Clone o repositório e copie a pasta `ex07` para o diretório raiz do servidor web.
3. Abra o navegador e acesse `localhost/ex07`.
4. Preencha os campos do formulário com os nomes e notas dos alunos.
5. Clique no botão "Enviar".

## Arquivos

- `index.php`: Contém a estrutura HTML para a página e o formulário para entrada dos dados dos alunos.
- `script.php`: Contém o código PHP que processa os dados fornecidos, calcula a média das notas dos alunos e exibe a lista dos aprovados e reprovados.

## Exemplo de Uso

Suponha que os dados dos alunos sejam:

- Aluno 1: Nome - Maria, Nota1 - 8, Nota2 - 7
- Aluno 2: Nome - João, Nota1 - 7, Nota2 - 6
- Aluno 3: Nome - Pedro, Nota1 - 9, Nota2 - 8
- Aluno 4: Nome - Ana, Nota1 - 6, Nota2 - 5
- Aluno 5: Nome - Carlos, Nota1 - 8, Nota2 - 9
- Aluno 6: Nome - Sofia, Nota1 - 5, Nota2 - 6
- Aluno 7: Nome - Lucas, Nota1 - 7, Nota2 - 7
- Aluno 8: Nome - Julia, Nota1 - 9, Nota2 - 10
- Aluno 9: Nome - Marcos, Nota1 - 6, Nota2 - 3
- Aluno 10: Nome - Luiza, Nota1 - 8, Nota2 - 9

A saída exibida será:

```html
<h1>Aprovados</h1>
Maria: 7.5<br />
João: 6.5<br />
Pedro: 8.5<br />
Carlos: 8.5<br />
Lucas: 7<br />
Julia: 9.5<br />
Luiza: 8.5<br />

<h1>Reprovados</h1>
Ana<br />
Sofia<br />
Marcos<br />
```
