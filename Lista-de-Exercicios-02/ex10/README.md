# Enunciado

Crie uma página em HTML5 na qual a pessoa possa digitar seu peso e sua altura e um programa PHP para o cálculo do IMC da pessoa. Defina se a pessoa está acima ou abaixo do peso. Procure referências sobre este índice (o que é considerado normal, abaixo ou acima do peso). Inclua a referência (página de acesso) para que a pessoa leia sobre este assunto.

## Como executar

1. Certifique-se de ter um servidor web configurado (por exemplo, XAMPP) para executar o código PHP.
2. Clone o repositório e copie a pasta `ex10` para o diretório raiz do servidor web.
3. Abra o navegador e acesse `localhost/ex10`.
4. Digite o peso e a altura nos campos de entrada e clique no botão "Calcular".

## Arquivos

- `index.php`: Contém a estrutura HTML para a página e o formulário de entrada.
- `script.php`: Contém o código PHP que recebe o peso e a altura digitados pelo usuário e exibe a saída correspondente.

## Exemplo de Uso

Suponha que o usuário digite o peso 70 e a altura 1.75. A saída será:

```html
Seu IMC é 22.857142857143.
De acordo com o IMC, para um adulto, o seu peso é considerado: adequado (eutrófico).
<a href="http://tabnet.datasus.gov.br/cgi-win/SISVAN/CNV/notas_sisvan.html#:~:text=Valores%20de%20IMC%20abaixo%20de,%2C0%3A%20adulto%20com%20obesidade">Saiba mais sobre o IMC</a>.
```
