#Array

---

> Função para visualizar um dado:
> ``var_dump()``

##Funções nativas



- ==Ordenação :==
    **sort()**
    >  *ordenação de valores crescente*

    <details>
    <summary>Exemplo</summary>

    ```php

        $notas = array(10, 8, 9, 7); 
        
        $notasOrdenadas = $notas;
        sort($notasOrdenadas);

        echo 'Desordenadas:';
        var_dump($notas);

        echo 'Ordenadas:';
        var_dump($notas)
    ```

    *retorno:*

    ```php

        Desordenadas:
        array(4) {
            [0] =>
            int(10)
            [1] =>
            int(8)
            [2] =>
            int(9)
            [3] =>
            int(7)
        }

        Ordenadas:
        array(4) {
            [0] =>
            int(7)
            [1] =>
            int(8)
            [2] =>
            int(9)
            [3] =>
            int(10)
        }

    ```

    </details>

    


    **rsort()**
    > *ordenação de valores decrescente*

    **asort()**
    > *ordenação de valores crescente mantendo as chaves*

    <details>
    <summary>Exemplo</summary>


    ```php

        $notas = array(
            [
                'aluno' => 'Maria',
                'nota' => 10,
            ],
            [
                'aluno' => 'Vinicius',
                'nota' => 6,
            ],
            [
                'aluno' => 'Ana',
                'nota' => 9,
            ],
        );

        asort($notas);
        var_dump($notas);
    ```

    *retorno:*

    ```php

        array(5) {
            'Vinicius' =>
            int(6)
            'Roberto' =>
            int(7)
            'João' =>
            int(8)
            'Maria' =>
            int(9)
            'Ana' =>
            int(10)
        }

    ```


    <details/>



  - Decrescente Mantendo as chaves
    **arsort()**

- ==Ordenação de Chaves :==
 
    **ksort()**
    > *crescente, ordem alfabética*

    **krsort()**
    > *decrescente*

- ==Verificações :==

    **array_keys()**
    > *retorna as chaves do array*

    **array_values()**
    > *retorna os valores do array*

    **is_array()**
    > *verifica se variável é array*

    **array_key_exists()**
    > *verifica se a chave existe*

    **isset()**
    > *verifica se a chave existe e o valor é diferente de null*

    **in_array()**
    > *verifica se o valor existe*

    **array_search()**
    > *verifica, a partir do valor, qual é a chave*

- ==Diferença entre arrays :==    
 
    **array_diff()**
    > *retorna os elementos do primeiro parâmetro que não existem nos demais parâmetros*

    **array_diff_key()**
    > *retorna todos os elementos cujas chaves não estejam nos outros array. Os valores são ignorados*

    **array_diff_assoc**
    > *compara tanto a chave, quanto o valor*

- ==União de arrays :==

    **array_merge()**
    > *une arrays*

    **array_combine(*`array1, array2`*)**
    > *primeiro parâmetro é a chave, o segundo o valor*

    **array_flip()**
    > *inverte chave/valor para valor/chave*

- ==Array unpack operator==

    `$alunos2022 = [...$alunos2021, 'carlos vinivius', ...$novosAlunos]`